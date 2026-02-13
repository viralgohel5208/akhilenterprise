<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSettings;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class GeneralSettingsController extends Controller{

    public function settingsView(Request $request){
        $setting = GeneralSettings::where('id', 1)->first();
        return view('admin.settings', compact('setting'));
    }

    public function settingsStore(Request $request){
        $data = $request->all();
        $setting = GeneralSettings::where('id', $data['rc_ID'])->first();
        $setting->email = $data['email'];
        $setting->phone_number = $data['phone_number'];
        $setting->description = $data['description'];
        $setting->address = $data['address'];
        $setting->facebook_link = $data['facebook_link'];
        $setting->instagram_link = $data['instagram_link'];
        $setting->linkedin_link = $data['linkedin_link'];
        $setting->update();
        return redirect()->back()->with('success', 'GeneralSetting updated successfully!');
    }
}
