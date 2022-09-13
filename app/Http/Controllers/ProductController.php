<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{

    public function index()
    {
        $car=Product::latest()->paginate(5);
        return view('admin.product.index',compact('car'));
    }


    public function create()
    {
        return view('admin.product.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'model' => 'required|numeric',
            'color' => 'required|max:50',
            'price' => 'required|numeric',
        ]);
        $car=new Product();


        $image = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->move('uploads/products', $image);

        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->color = $request->input('color');
        $car->price = $request->input('price');
        $car->image = $image;
        $toast=Toastr::success('با موفقیت اضافه شد');
        $car->save();
        return redirect()->back()->with($toast);
    }


    public function edit($id)
    {
        $car=Product::find($id);
        return view('admin.product.edit',compact('car'));
    }
    public function show(Product $product,$id)
    {
        //
    }

    public function update(Request $request,$id)
    {
        $car=Product::find($id);
        $imageName=$car->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = 'car-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('image')->move('uploads/products', $imageName);
        }
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->color = $request->input('color');
        $car->price = $request->input('price');
        $car->image = $imageName;
        //insert to database
        $car->save();
        $toast=Toastr::success('با موفقیت به روز شد');
        return redirect()->route('product.index')->with($toast);

    }



    public function delete($id)
    {
        $car=Product::find($id);
        $car->delete();
        $toast=Toastr::success('با موفقیت حذف شد');
        return redirect()->route('product.index')->with($toast);
    }
    public function showCar(){

    }
}
