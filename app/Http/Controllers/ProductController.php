<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   //listar productos
   function show(){
    $productList=Product::all();
    return view('product/list',['productList'=>$productList]);
}
function delete($id){
    $producto=Product::find($id);
    $producto->delete();
    return redirect('/product');
    //return redirect()->route('products');
}
/*function form(){
    return view('product/form');
}*/
function form($id=null){
    
    if($id==null){
        $producto=new Product();
    }
    else{
        $producto=Product::findOrFail($id);
    }
    $brands = Brand::all();
        $categories = Category::all();
return view('product/form', compact('product', 'brands', 'categories'));

}
function save(Request $request){
$producto=new Product();
if($request->id > 0){
    $producto=Product::find($request->id);
}

$request->validate([
'name'=>'required|max:50',
'cost'=>'required',
'price'=>'required',
'quantity'=>'required|numeric',
'brand'=>'required|max:50',
'categoria' => ['required', 'max:100']
]);


$producto=new Product();

$producto->name=$request->name;
$producto->cost=$request->cost;
$producto->price=$request->price;
$producto->quantity=$request->quantity;
$producto->brand=$request->brand;
$producto->category_id = $request->categoria;
$producto->save();
return redirect('/product')->with('message','producto guardado');
}

}
