<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function GetAllApplication()
    {
        $applications = Application::with(['education_info','employment_info','professional_info','advertisement'])->get();
        // dd($applications);
        return view('Admin.applications',compact('applications'));
    }

    public function CreateAd()
    {
        return view('Admin.Advertisements.createAd');
    }
    public function PostAd(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = date("d-m-Y").'-'.$request->image->getClientOriginalName();

        // $request->image->move(public_path('images/ads'), $imageName);
        $img = $request->file('image')->storeAs('public/uploads/Ads',$imageName);

        $request->merge(['adImg'=> 'storage/uploads/Ads/'.$imageName]);

        Advertisement::create([
            'title' => $request->title,
            'title_urdu' => $request->title_urdu,
            'adImg' => $request->adImg,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,

        ]);
        return redirect()->back()->with('success','Advertisement added successfully!');
    }

    public function AdsList()
    {
        $ads = Advertisement::all();
        return view('Admin.Advertisements.index',compact('ads'));
    }

    public function AllApplications(Advertisement $advertisement)
    {
        $advertisement->load('applications','applications.education_info','applications.employment_info','applications.professional_info');
        dd($advertisement);
    }

}
