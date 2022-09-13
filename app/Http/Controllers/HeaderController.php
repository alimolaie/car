<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Header;
class HeaderController extends Controller
{
    public function index(){
        $header=Header::find(1);
        return view('admin.header.index',compact('header'));
    }
    public function edit(){
        $header=Header::find(1);
        return view('admin.header.edit',compact('header'));
    }
    public function update(Request $request){
        $header=Header::find(1);
        $imageName=$header->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = 'car-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('image')->move('uploads/header/', $imageName);
        }
        $header->title = $request->input('title');
        $header->image = $imageName;
        //insert to database
        $header->save();
        $toast=Toastr::success('با موفقیت به روز شد');
        return redirect()->back()->with($toast);
    }
}
