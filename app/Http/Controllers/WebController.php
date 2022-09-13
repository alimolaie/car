<?php

namespace App\Http\Controllers;

use App\AboutUs;
use Illuminate\Http\Request;
use App\Product;
use App\Header;
class WebController extends Controller
{
    public function index(){
        $header=Header::find(1);
        $products=Product::limit(5)->get();
        return view('website.index',compact('header','products'));
    }
    public function viewProduct($id){
        $products=Product::find($id);
        return view('website.viewProduct',compact('products'));

    }
    public function aboutUs(){
        $about=AboutUs::find(1);
        return view('website.about-us',compact('about'));

    }
}
