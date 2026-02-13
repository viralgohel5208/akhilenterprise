<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\CoreValues;
use App\Models\HomePage;
use App\Models\Infrastructure;
use App\Models\Products;
use App\Models\RequestCatalog;
use App\Models\AboutUs;
use App\Models\Quality;
use App\Models\Certificates;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\CommonPage;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class HomeController extends Controller{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        $sliders = HomeSlider::get();
        $coreValues = CoreValues::get();
        $homeData = HomePage::where('id', 1)->first();
        $infrastructure = Infrastructure::get();
        $products = Products::orderBy('id', 'DESC')->limit(9)->get();
        return view('home', compact('sliders', 'coreValues', 'homeData', 'infrastructure', 'products'));
    }

    public function aboutUs(Request $request){
        $about = AboutUs::where('id', 1)->first();
        $infrastructure = Infrastructure::get();
        return view('about-us', compact('about', 'infrastructure'));
    }

    public function qualityData(Request $request){
        $quality = Quality::where('id', 1)->first();
        $certificates = Certificates::get();
        return view('quality', compact('quality', 'certificates'));
    }

    public function contactData(Request $request){
        $data = CommonPage::where('page_type', 'contact-us')->first();
        return view('contact-us', compact('data'));
    }

    public function productPage(Request $request){
        $data = CommonPage::where('page_type', 'products')->first();
        $products = Products::paginate(12);
        $categories = ProductCategory::get();
        return view('product-list', compact('products', 'categories', 'data'));
    }

    public function singleProduct(Request $request, $slug){
        $product = Products::where('product_slug', $slug)->first();
        $gallery = ProductGallery::where('product_id', $product->id)->get();
        $meta_title = 'Product - '.$product->seo_title.'';
        return view('single-product', compact('product', 'gallery', 'meta_title'));
    }

    public function requestCatalog(Request $request){
        $data = CommonPage::where('page_type', 'catalog')->first();
        return view('request-catalog', compact('data'));
    }

    public function productSearch(Request $request){
        $query = $request->input('query');
        $filter = $request->input('filter');

        $products = Products::when($query, function($q) use ($query) {
            return $q->where('product_title', 'LIKE', "%{$query}%");
        })
        ->when($filter, function($q) use ($filter) {
            return $q->where('category_id', $filter);
        })
        ->paginate(12);

        if ($request->ajax()) {
            return view('product_list_ajax', compact('products'))->render();
        }

        $quality = Quality::where('id', 1)->first();
        $products = Products::get();
        $categories = ProductCategory::get();
        return view('product-list', compact('quality', 'products', 'categories'));
    }

    public function contactForm(Request $request){
        $data = $request->all();
        $form = new RequestCatalog();
        $form->first_name = $data['first_name'];
        $form->last_name = $data['last_name'];
        $form->email = $data['email'];
        $form->phone_number = $data['phone_number'];
        if($form->save()){
            return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
        }else {
            return response()->json(['success' => false, 'message' => 'Form submission failed. Please try again.']);
        }
    }
}
