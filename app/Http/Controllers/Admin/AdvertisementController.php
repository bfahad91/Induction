<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Application;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::orderBy('id', 'desc')->paginate();
        return view('Admin.Advertisements.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Advertisements.createAd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:pdf|max:2048',
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'is_active' => 'nullable',
        ]);
        // Image Store
        $imageName = date("d-m-Y") . '-' . $request->image->getClientOriginalName();
        $img = $request->file('image')->storeAs('public/uploads/Ads', $imageName);
        $request->merge(['adImg' => 'storage/uploads/Ads/' . $imageName]);

        Advertisement::create([
            'title' => $request->title,
            'title_urdu' => $request->title_urdu,
            'adImg' => $request->adImg,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'is_active' => $request->is_active,
        ]);
        toastr()->success('Success!', 'Advertisement created Successfully');
        return redirect()->back();
    }

    public function Advertisment_Applications(Advertisement $advertisement)
    {
        $applications = Application::where('advertisement_id', $advertisement->id)->with(['education_info', 'employment_info', 'professional_info', 'advertisement'])
            ->paginate();

        return view('Admin.applications', compact('applications', 'advertisement'));
    }
    public function isActive_Ajax(Request $request)
    {
        $ad = Advertisement::find($request->ad_id);
        $ad->is_active = $request->is_active;
        $ad->save();
        // toastr()->success('Success!', 'Advertisement created Successfully');
        return response()->json(['success' => 'Status change successfully.']);
    }
    public function activeAds()
    {
        $ads = Advertisement::where('is_active', true)->paginate();
        return view('Admin.Advertisements.index', compact('ads'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        return view('Admin.Advertisements.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdvertisementRequest $request, Advertisement $advertisement)
    {
        $is_active = isset($request->is_active) ? 1 : 0;
        if ($request->file('Adimage')) {
            $imageName = date("d-m-Y") . '-' . $request->Adimage->getClientOriginalName();
            $img = $request->file('Adimage')->storeAs('public/uploads/Ads', $imageName);
            $adImg = 'storage/uploads/Ads/'.$imageName;
        }
        else{
            $adImg = $advertisement->adImg;
        }
        $advertisement->update([
            'adImg' => $adImg,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date'  => $request->end_date,
            'is_active'  => $is_active,
        ]);
        toastr()->success('Success!', 'Advertisement Updated Successfully');
        return redirect()->route('admin.advertisements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
