<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;
use Illuminate\Support\Facades\File;

class HomeSliderController extends Controller{

    public function index(Request $request){
        $sliders = HomeSlider::get();
        return view('admin.homeslider.index', compact('sliders'));
    }

    public function create(Request $request){
        return view('admin.homeslider.add');
    }

    public function storeData(Request $request){
        $data = $request->all();
        $slider = new HomeSlider();
        $slider->banner_heading = $data['banner_heading'];
        $slider->banner_description = $data['banner_description'];
        $slider->image_status = $data['image_status'];

        if ($request->file('banner_image')) {
            $random = Str::random(15);
            $image = $request->file('banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/slider_image'), $imageName);
            $slider->banner_image = $imageName;
        }
        if($slider->save()){
            return redirect()->route('enterprise-admin.homesldier')->with('success', 'Banner added successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function editRecord(Request $request, $id){
        $slider = HomeSlider::where('id', $id)->first();
        return view('admin.homeslider.edit', compact('slider'));
    }

    public function updateRecord (Request $request){
        $data = $request->all();
        $slider = HomeSlider::where('id', $data['sliderID'])->first();
        $slider->banner_heading = $data['banner_heading'];
        $slider->banner_description = $data['banner_description'];
        $slider->image_status = $data['image_status'];

        if ($request->file('banner_image')) {
            $random = Str::random(15);
            $image = $request->file('banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/slider_image'), $imageName);
            $slider->banner_image = $imageName;
        }
        if($slider->update()){
            return redirect()->back()->with('success', 'Banner updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function deleteRecord(Request $request){
        $data = $request->all();
        $slider = HomeSlider::where('id', $data['recID'])->first();
        if(!empty($slider)){
            $imagePath = public_path('admin/slider_image/' . $slider->banner_image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
                $slider->delete();
            }
            return response()->json(['success' => 'Banner deleted successfully!']);
        }else{
            return response()->json(['error' => 'Record not found!'], 404);
        }
    }
}
