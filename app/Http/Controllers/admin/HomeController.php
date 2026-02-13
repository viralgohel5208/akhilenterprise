<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Products;
use App\Models\ProductCategory;
use App\Models\RequestCatalog;
use App\Models\HomePage;
use Carbon\Carbon; 
use App\Models\CommonPage;
use Auth;
use Session;
use DB; 
use Mail; 
use Str;

class HomeController extends Controller{

    public function __construct(){
        // $this->middleware('auth');
        $this->middleware('role.redirect');
    }

    public function dashboard(Request $request){
        $totalProducts = Products::get()->count();
        $totalCategory = ProductCategory::get()->count();
        $totalInquiry = RequestCatalog::get()->count();
        return view('admin.dashboard', compact('totalProducts', 'totalCategory', 'totalInquiry'));
    }

    public function myProfile(Request $request){
        $user = Auth::user();
        return view('admin.myProfile', compact('user'));
    }

    public function myProfileStore(Request $request){
        $data = $request->all();
        $user = User::where('id', $data['userID'])->first();
        $user->first_name = $data['firstName'];
        $user->last_name = $data['lastName'];
        $user->user_name = $data['user_name'];
        $user->email = $data['email'];
        $user->mobile_no = $data['mobile_no'];
        $user->address = $data['address'];
        $user->city = $data['city'];
        $user->update();
        return redirect()->back();
    }

    public function changePassword(Request $request){
        $data = $request->all();
        $user = User::where('id', $data['userID'])->first();
        $user->password = $data['password'];
        $user->update();
        return redirect()->back();
    }

    public function homeCreate(Request $request){
        $home = HomePage::where('id', 1)->first();
        return view('admin.home.add', compact('home'));
    }

    public function homeStoreData(Request $request){
        $data = $request->all();
        $msg = '';
        if($data['recID'] == 0){
            $home = new HomePage();
            $msg = 'Home page data added successfully!';
        }else{
            $home = HomePage::where('id', $data['recID'])->first();
            $msg = 'Home page data updated successfully!';
        }

        $home->pre_heading = $data['pre_heading'];
        $home->heading = $data['heading'];
        $home->description = $data['description'];
        $home->button_name = $data['button_name'];
        $home->button_link = $data['button_link'];
        $home->product_pre_heading = $data['product_pre_heading'];
        $home->product_heading = $data['product_heading'];
        $home->infra_heading = $data['infra_heading'];
        $home->infra_pre_heading = $data['infra_pre_heading'];
        $home->page_title = $data['page_title'];
        $home->seo_title = $data['seo_title'];
        $home->seo_description = $data['seo_description'];

        if ($request->file('image')) {
            $random = Str::random(15);
            $image = $request->file('image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/home_page_images'), $imageName);
            $home->image = $imageName;
        }
        if ($request->file('infra_image')) {
            $random = Str::random(15);
            $image = $request->file('infra_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/home_page_images'), $imageName);
            $home->infra_image = $imageName;
        }

        if($home->save()){
            return redirect()->route('enterprise-admin.home.add')->with('success', $msg);
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function pageIndex(Request $request){
        $data = CommonPage::get();
        return view('admin.page.index', compact('data'));
    }

    public function editPageRecord(Request $request, $id){
        $data = CommonPage::where('id', $id)->first();
        return view('admin.page.edit', compact('data'));
    }

    public function updatePageRecord(Request $request){
        $data = $request->all();
        $slug = Str::slug($data['page_name']);
        $common = CommonPage::where('id', $data['recID'])->first();
        $common->page_name = $data['page_name'];
        $common->page_slug = $slug;
        $common->seo_title = $data['seo_title'];
        $common->seo_description = $data['seo_description'];
        if ($request->file('page_banner_image')) {
            $random = Str::random(15);
            $image = $request->file('page_banner_image');
            $imageName = $random . '-' . time() . '.' . $image->extension();
            $image->move(public_path('admin/page_banner'), $imageName);
            $common->page_banner_image = $imageName;
        }
        if($common->update()){
            return redirect()->back()->with('success', 'Page data updated successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
