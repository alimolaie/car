<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AboutUs;
class AboutUsController extends Controller
{
    public function edit(){
        $about=AboutUs::find(1);
        return view('admin.about.edit',compact('about'));
    }
    public function update(Request $request){

        $about=AboutUs::find(1);
         $about->descrioption = $request->input('descrioption');
         $about->save();
        return redirect()->back();
    }
}
