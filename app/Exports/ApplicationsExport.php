<?php

namespace App\Exports;

use App\Models\Advertisement;
use App\Models\Application;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ApplicationsExport implements FromView
{
    private $ad_id;
    function __construct($id)
    {
        $this->ad_id = $id;
    }
    public function view(): View
    {
        $id = $this->ad_id;
        $apps = Application::where('advertisement_id',$id)->with('education_info','employment_info','professional_info')->get();
        return view('exports.applications', [
            'applications' => $apps
        ]);
    }
}
