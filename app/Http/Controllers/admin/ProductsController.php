<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\Products;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller{

    public function index(Request $request){
        $products = Products::orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('products'));
    }

    public function storeForm(Request $request){
        $category = ProductCategory::get();
        return view('admin.product.add', compact('category'));
    }

    public function storeData(Request $request){
        $data = $request->all();
        $slug = Str::slug($data['product_name']);

        $product = new Products();
        $product->product_title = $data['product_name'];
        $product->product_slug = @$slug;
        $product->short_description = $data['short_description'];
        $product->product_status = $data['product_status'];
        $product->seo_title = $data['seo_title'];
        $product->seo_description = $data['seo_description'];
        $product->main_description = $data['editor1'];
        $product->category_id = $data['category_id'];

        if ($request->file('product_image')) {
            $random = Str::random(15);
            $image = $request->file('product_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/product_image'), $imageName);
            $product->product_image = $imageName;
        }

        if ($request->file('product_banner_image')) {
            $random = Str::random(15);
            $image = $request->file('product_banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/product_image'), $imageName);
            $product->product_banner_image = $imageName;
        }
        if($product->save()){
            if ($request->file('gallery_image')) {
                foreach ($request->file('gallery_image') as $key => $value) {
                    $random = Str::random(15);
                    $image = $value;
                    $imageName = $random . '-' . time() . '.' . $image->extension();
                    $image->move(public_path('admin/product_gallery'), $imageName);

                    $product_gallery = new ProductGallery();
                    $product_gallery->product_id = $product->id;
                    $product_gallery->gallery_image = $imageName;
                    $product_gallery->save();
                }
            }
            return redirect()->back()->with('success', 'Product added successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function updateRecord(Request $request){
        $data = $request->all();
        $slug = Str::slug($data['product_name']);

        $product = Products::where('id', $data['prdID'])->first();
        $product->product_title = $data['product_name'];
        $product->product_slug = @$slug;
        $product->short_description = $data['short_description'];
        $product->product_status = $data['product_status'];
        $product->seo_title = $data['seo_title'];
        $product->seo_description = $data['seo_description'];
        $product->main_description = $data['editor1'];
        $product->category_id = $data['category_id'];

        if ($request->file('product_image')) {
            $random = Str::random(15);
            $image = $request->file('product_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/product_image'), $imageName);
            $product->product_image = $imageName;
        }

        if ($request->file('product_banner_image')) {
            $random = Str::random(15);
            $image = $request->file('product_banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/product_image'), $imageName);
            $product->product_banner_image = $imageName;
        }
        if($product->update()){
            if ($request->file('gallery_image')) {
                foreach ($request->file('gallery_image') as $key => $value) {
                    $random = Str::random(15);
                    $image = $value;
                    $imageName = $random . '-' . time() . '.' . $image->extension();
                    $image->move(public_path('admin/product_gallery'), $imageName);

                    $product_gallery = new ProductGallery();
                    $product_gallery->product_id = $product->id;
                    $product_gallery->gallery_image = $imageName;
                    $product_gallery->save();
                }
            }
            return redirect()->back()->with('success', 'Product updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function editRecord(Request $request, $id){
        $category = ProductCategory::get();
        $product = Products::where('id', $id)->first();
        $gallery = ProductGallery::where('product_id', $id)->get();
        return view('admin.product.edit', compact('product', 'gallery', 'category'));
    }

    public function removeImage(Request $request){
        $data = $request->all();
        $product = Products::where('id', $data['recID'])->first();
        if($data['recType'] == 'product_image'){
            $imagePath = public_path('admin/product_image/' . $product->product_image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $product->product_image = NULL;
        }else{
            $imagePath = public_path('admin/product_image/' . $product->product_banner_image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $product->product_banner_image = NULL;
        }
        if($product->update()){
            return response()->json(['success' => 'image deleted successfully!']);
        }else{
            return response()->json(['error' => 'Record not found!'], 404);
        }
    }

    public function removeGalleryImage(Request $request){
        $data = $request->all();
        $gallery = ProductGallery::where('id', $data['recID'])->first();
        if(!empty($gallery)){
            $imagePath = public_path('admin/product_gallery/' . $gallery->gallery_image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
                $gallery->delete();
            }
            return response()->json(['success' => 'image deleted successfully!']);
        }else{
            return response()->json(['error' => 'Record not found!'], 404);
        }
    }

    public function deleteRecord(Request $request, $id){
        $gallery = ProductGallery::where('product_id', $id)->delete();
        $product = Products::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
