<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class AboutUsController extends Controller{

    public function create(Request $request){
        $about = AboutUs::where('id', 1)->first();
        return view('admin.about.add', compact('about'));
    }

    public function storeData(Request $request){
        $data = $request->all();
        $msg = '';

        if($data['recID'] == 0){
            $about = new AboutUs();
            $msg = 'About page data added successfully!';
        }else{
            $about = AboutUs::where('id', $data['recID'])->first();
            $msg = 'About page data updated successfully!';
        }

        $about->intro_content = $data['intro_content'];
        $about->pre_heading = $data['pre_heading'];
        $about->heading = $data['heading'];
        $about->description = $data['description'];
        $about->button_name = $data['button_name'];
        $about->button_link = $data['button_link'];
        $about->infra_heading = $data['infra_heading'];
        $about->infra_pre_heading = $data['infra_pre_heading'];
        $about->page_title = $data['page_title'];
        $about->seo_title = $data['seo_title'];
        $about->seo_description = $data['seo_description'];

        if ($request->file('intro_image')) {
            $random = Str::random(15);
            $image = $request->file('intro_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/about_images'), $imageName);
            $about->intro_image = $imageName;
        }
        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/about_images'), $imageName);
            $about->image = $imageName;
        }
        if ($request->file('banner_image')) {
            $random = Str::random(15);
            $image = $request->file('banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/about_images'), $imageName);
            $about->banner_image = $imageName;
        }

        if($about->save()){
            return redirect()->route('enterprise-admin.about.add')->with('success', $msg);
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
