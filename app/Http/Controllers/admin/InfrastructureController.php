<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Infrastructure;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;
use Illuminate\Support\Facades\File;

class InfrastructureController extends Controller{
    public function index(Request $request){
        $infrastructures = Infrastructure::get();
        return view('admin.infrastructure.index', compact('infrastructures'));
    }

    public function create(Request $request){
        return view('admin.infrastructure.add');
    }

    public function storeData(Request $request){
        $data = $request->all();
        $infra = new Infrastructure();
        $infra->heading = $data['heading'];
        $infra->short_description = $data['short_description'];
        $infra->status = $data['status'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/infrastructure_image'), $imageName);
            $infra->image = $imageName;
        }
        if($infra->save()){
            return redirect()->route('enterprise-admin.infrastructure')->with('success', 'Infrastructure added successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function editRecord(Request $request, $id){
        $data = Infrastructure::where('id', $id)->first();
        return view('admin.infrastructure.edit', compact('data'));
    }

    public function updateRecord (Request $request){
        $data = $request->all();
        $infra = Infrastructure::where('id', $data['recID'])->first();
        $infra->heading = $data['heading'];
        $infra->status = $data['status'];
        $infra->short_description = $data['short_description'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/infrastructure_image'), $imageName);
            $infra->image = $imageName;
        }
        if($infra->update()){
            return redirect()->back()->with('success', 'Infrastructure updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function deleteRecord(Request $request){
        $data = $request->all();
        $infra = Infrastructure::where('id', $data['recID'])->first();
        if(!empty($infra)){
            $imagePath = public_path('admin/infrastructure_image/' . $infra->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
                $infra->delete();
            }
            return response()->json(['success' => 'Infrastructure deleted successfully!']);
        }else{
            return response()->json(['error' => 'Record not found!'], 404);
        }
    }
}
