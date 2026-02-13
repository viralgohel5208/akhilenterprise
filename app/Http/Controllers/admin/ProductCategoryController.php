<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class ProductCategoryController extends Controller{
    public function index(Request $request){
        $categories = ProductCategory::get();
        return view('admin.product_category.index', compact('categories'));
    }

    public function storeForm(Request $request){
        return view('admin.product_category.add');
    }

    public function store(Request $request){
        $data = $request->all();
        $slug = Str::slug($data['category_name']);
        $category = new ProductCategory;
        $category->category_name = $data['category_name'];
        $category->cat_slug = $slug;
        $category->status = $data['status'];
        $category->save();
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function editForm(Request $request, $id){
        $category = ProductCategory::where('id', $id)->first();
        return view('admin.product_category.edit', compact('category'));
    }

    public function update(Request $request){
        $data = $request->all();
        $slug = Str::slug($data['category_name']);
        $category = ProductCategory::where('id', $data['catID'])->first();
        $category->category_name = $data['category_name'];
        $category->cat_slug = $slug;
        $category->status = $data['status'];
        $category->update();
        return redirect()->back()->with('success', 'Category updated successfully!');
    }

    public function delete(Request $request, $id){
        $category = ProductCategory::where('id', $id)->first();
        $category->delete();
        return redirect()->route('enterprise-admin.pro-cat')->with('success', 'Category deleted successfully!');
    }
}
