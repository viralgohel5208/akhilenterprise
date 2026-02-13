<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoreValues;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;
use Illuminate\Support\Facades\File;

class CoreValuesController extends Controller{
    public function index(Request $request){
        $corevalues = CoreValues::get();
        return view('admin.corevalue.index', compact('corevalues'));
    }

    public function create(Request $request){
        return view('admin.corevalue.add');
    }

    public function storeData(Request $request){
        $data = $request->all();
        $core = new CoreValues();
        $core->heading = $data['heading'];
        $core->short_description = $data['short_description'];
        $core->status = $data['status'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/core_value_images'), $imageName);
            $core->image = $imageName;
        }
        if($core->save()){
            return redirect()->route('enterprise-admin.corevalue')->with('success', 'Corevalue added successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function editRecord(Request $request, $id){
        $data = CoreValues::where('id', $id)->first();
        return view('admin.corevalue.edit', compact('data'));
    }

    public function updateRecord (Request $request){
        $data = $request->all();
        $core = CoreValues::where('id', $data['recID'])->first();
        $core->heading = $data['heading'];
        $core->status = $data['status'];
        $core->short_description = $data['short_description'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/core_value_images'), $imageName);
            $core->image = $imageName;
        }
        if($core->update()){
            return redirect()->back()->with('success', 'Corevalue updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function delete(Request $request){
        $data = $request->all();
        $core = CoreValues::where('id', $data['recID'])->first();
        if(!empty($core)){
            $imagePath = public_path('admin/core_value_images/' . $core->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
                $core->delete();
            }
            return response()->json(['success' => 'Corevalue deleted successfully!']);
        }else{
            return response()->json(['error' => 'Record not found!'], 404);
        }
    }
}
