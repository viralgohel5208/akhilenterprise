<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class FooterController extends Controller{
    public function footerRecords(Request $request){
        $footerData = Footer::where('id', 1)->first();
        return view('admin.footerData', compact('footerData'));
    }

    public function footerRecordsSave(Request $request){
        $data = $request->all();
        $fieldsJson = json_encode($data['fields']);
        $fieldsJsonPrd = json_encode($data['fields_prd']);
        $footerData = Footer::where('id', $data['rcID'])->first();
        $footerData->footer_description = $data['footer_description'];
        $footerData->copyright_text = $data['copyright_text'];
        if ($request->file('footer_logo')) {
            $random = Str::random(15);
            $image = $request->file('footer_logo');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/images'), $imageName);
            $footerData->footer_logo = $imageName;
        }
        $footerData->footer_menu = $fieldsJson;
        $footerData->footer_product = $fieldsJsonPrd;
        $footerData->update();
        return redirect()->back()->with('success', 'Record updated successfully!');
    }
}
