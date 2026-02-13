<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\RequestCatalog;
use Carbon\Carbon; 
use Auth;
use Session;
use DB; 
use Mail; 

class RequestCatalogController extends Controller{
    public function index(){
        $records = RequestCatalog::orderBy('id', 'desc')->get()->toArray();
        return view('admin.requestCatalog', compact('records'));
    }
}
