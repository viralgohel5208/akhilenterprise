<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificates;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;
use Illuminate\Support\Facades\File;

class CertificatesController extends Controller{

    public function index(Request $request){
        $certificates = Certificates::get();
        return view('admin.certificate.index', compact('certificates'));
    }

    public function create(Request $request){
        return view('admin.certificate.add');
    }

    public function storeData(Request $request){
        $data = $request->all();
        $certificate = new Certificates();
        $certificate->heading = $data['heading'];
        $certificate->short_description = $data['short_description'];
        $certificate->status = $data['status'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/certificate_images'), $imageName);
            $certificate->image = $imageName;
        }
        if($certificate->save()){
            return redirect()->route('enterprise-admin.certificate')->with('success', 'Certificate added successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function editRecord(Request $request, $id){
        $data = Certificates::where('id', $id)->first();
        return view('admin.certificate.edit', compact('data'));
    }

    public function updateRecord (Request $request){
        $data = $request->all();
        $certificate = Certificates::where('id', $data['recID'])->first();
        $certificate->heading = $data['heading'];
        $certificate->status = $data['status'];
        $certificate->short_description = $data['short_description'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/certificate_images'), $imageName);
            $certificate->image = $imageName;
        }
        if($certificate->update()){
            return redirect()->back()->with('success', 'Certificate updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function delete(Request $request){
        $data = $request->all();
        $certificate = Certificates::where('id', $data['recID'])->first();
        if(!empty($certificate)){
            $imagePath = public_path('admin/certificate_images/' . $certificate->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
                $certificate->delete();
            }
            return response()->json(['success' => 'Certificate deleted successfully!']);
        }else{
            return response()->json(['error' => 'Record not found!'], 404);
        }
    }
}
