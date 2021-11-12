<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Application;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $ads = Advertisement::all();
        $activeAds = Advertisement::where('is_active',true)->get();
        $applications = Application::all();

        return view('dashboard',compact('ads','activeAds','applications'));
    }
    public function GetAllApplication()
    {
        $applications = Application::with(['education_info', 'employment_info', 'professional_info', 'advertisement'])->paginate();
            $advertisement=null;
        return view('Admin.applications', compact('applications','advertisement'));
    }

    public function export(Advertisement $advertisement)
    {
        return Excel::download(new Application($advertisement->id), $advertisement->title.'-Applications.xlsx');
    }

    // public function CreateAd()
    // {
    //     return view('Admin.Advertisements.createAd');
    // }
    // public function PostAd(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'image' => 'required|mimes:pdf|max:2048',
    //         'title' => 'required',
    //         'description' => 'required',
    //         'start_date' => 'required',
    //         'end_date' => 'required',
    //     ]);
    //     // dd($request->all());
    //     $imageName = date("d-m-Y") . '-' . $request->image->getClientOriginalName();

    //     // $request->image->move(public_path('images/ads'), $imageName);
    //     $img = $request->file('image')->storeAs('public/uploads/Ads', $imageName);

    //     $request->merge(['adImg' => 'storage/uploads/Ads/' . $imageName]);

    //     Advertisement::create([
    //         'title' => $request->title,
    //         'title_urdu' => $request->title_urdu,
    //         'adImg' => $request->adImg,
    //         'description' => $request->description,
    //         'start_date' => $request->start_date,
    //         'end_date' => $request->end_date,
    //         'is_active' => $request->is_active,
    //     ]);
    //     toastr()->success('Success!', 'Advertisement created Successfully');
    //     return redirect()->back();
    // }

    // public function AdsList()
    // {
    //     $ads = Advertisement::orderBy('id', 'desc')->get();
    //     return view('Admin.Advertisements.index', compact('ads'));
    // }

    // public function Advertisment_Applications(Advertisement $advertisement)
    // {
    //     $applications = Application::where('advertisement_id', $advertisement->id)->with(['education_info', 'employment_info', 'professional_info', 'advertisement'])
    //         ->paginate();

    //     return view('Admin.applications', compact('applications','advertisement'));
    // }

}
