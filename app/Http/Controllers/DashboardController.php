<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Blogs_Table;
use App\Models\candidate_data;
use App\Models\Jobs;
use App\Models\Setting;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $blogs = Blogs::all()->count();
        $members = TeamMember::all()->count();
        $teammembers = TeamMember::all();
        $data=[];
        
        $data = [
            'blogs'=> $blogs,
            'members'=> $members,
            'team'=> $teammembers,
            'main_page'=>'Dashboard'
        ];
        return view('dashboard', $data);

    }
    
    public function show(){
        $data = [
            'main_page'=>'Change Logos'
        ];
        return view('change_logo', $data);
    }
    public function save_logo(Request $request)
{
    $file = $request->file('logo');
    $favicon = $request->file('favicon');

    $type = 'logo'; 
    $existingSettings = Setting::where('type', $type)->first();
    $existingSettings = json_decode($existingSettings->value, true); // Decode the 'value' property
    $logo_name = $existingSettings['logo'] ?? null;
    $favicon_name = $existingSettings['favicon'] ?? null;

    if ($file) {
        $originalFileName = $file->getClientOriginalName();
        $filenameWithoutSpaces = str_replace(' ', '_', $originalFileName);
        $uniqueFileName = time() . '_' . $filenameWithoutSpaces;
        $path = 'assets/images/logos/';
        $file->move($path, $uniqueFileName);
        $logo_name = $path . $uniqueFileName;
    }
    if ($favicon) {
        $originalFileName = $favicon->getClientOriginalName();
        $filenameWithoutSpaces = str_replace(' ', '_', $originalFileName);
        $uniqueFileName = time() . '_' . $filenameWithoutSpaces;
        $path = 'assets/images/logos/';
        $favicon->move($path, $uniqueFileName);
        $favicon_name = $path.$uniqueFileName;
    }

    Setting::where('type', $type)->update([
        'value' => json_encode([
            'logo' => $logo_name,
            'favicon' => $favicon_name
        ])
    ]);
    return redirect()->route('change_logo')->with('success', 'Updated successfully.');
}
    
}
