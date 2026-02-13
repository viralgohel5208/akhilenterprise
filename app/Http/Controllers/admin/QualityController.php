<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;
use Illuminate\Support\Facades\File;

class QualityController extends Controller{

    public function create(Request $request){
        $quality = Quality::where('id', 1)->first();
        return view('admin.quality.add', compact('quality'));
    }

    public function storeData(Request $request){
        $data = $request->all();
        $msg = '';

        if($data['recID'] == 0){
            $quality = new Quality();
            $msg = 'Quality added successfully!';
        }else{
            $quality = Quality::where('id', $data['recID'])->first();
            $msg = 'Quality updated successfully!';
        }

        $quality->heading = $data['heading'];
        $quality->description = $data['description'];
        $quality->page_title = $data['page_title'];
        $quality->seo_title = $data['seo_title'];
        $quality->seo_description = $data['seo_description'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/quality_images'), $imageName);
            $quality->image = $imageName;
        }
        if ($request->file('banner_image')) {
            $random = Str::random(15);
            $image = $request->file('banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/quality_images'), $imageName);
            $quality->banner_image = $imageName;
        }

        if($quality->save()){
            return redirect()->route('enterprise-admin.quality.add')->with('success', $msg);
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
