<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class HeaderController extends Controller{
    public function headerRecords(Request $request){
        $headerData = Header::where('id', 1)->first();
        return view('admin.headerData', compact('headerData'));
    }

    public function headerRecordsSave(Request $request){
        $data = $request->all();
        $fieldsJson = json_encode($data['fields']);
        $headerData = Header::where('id', $data['rcID'])->first();
        $headerData->top_header_email = $data['top_header_email'];
        $headerData->top_header_mobile_no = $data['top_header_mobile_no'];
        $headerData->header_button_name = $data['header_button_name'];
        $headerData->header_button_link = $data['header_button_link'];
        $headerData->site_name = $data['site_name'];
        if ($request->file('header_logo')) {
            $random = Str::random(15);
            $image = $request->file('header_logo');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/images'), $imageName);
            $headerData->header_logo = $imageName;
        }
        $headerData->header_menu_link = $fieldsJson;
        $headerData->update();
        return redirect()->back()->with('success', 'Record updated successfully!');
    }
}
