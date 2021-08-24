<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\Personacontroller;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuario', function () {
    return "ruta de usuario";
});
route::get('/usuario/{id}',function($id){
return "el id es:".$id;
});



Route::get('/form/{id?}',
[Personacontroller::class,"mostrarform"]
)->where('id','[0-9]+');//regex->expresion regular



//use Illuminate\Support\Facades\DB;
/*
Route::get('/products', function(){
    // $products = DB::table('product')->get();
    $products = Product::get();
    return dd($products); //var_dump
});*/
route::get('/product',[ProductController::class,'show']);

route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('prodDelete');

// registrar 
//route::get('product/form',[ProductController::class,'form'])->name('product.form');
Route::post('product/save',[ProductController::class, 'save'])->name('product.save');
route::get('product/form/{id?}',[ProductController::class,'form'])->name('product.form');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get(
    '/brand',
    [BrandController::class, 'showBrands']
)->name('brand.getAll');

Route::get(
    '/brand/add/{id?}',
    [BrandController::class, 'showFormBrand']
)->name('brand.add');

Route::post(
    '/brand/add/',
    [BrandController::class, 'save']
)->name('brand.Save');

Route::get(
    'brand/delete/{id}',
    [BrandController::class, 'delete']
)->name('brand.Delete');


Route::get(
    '/category',
    [CategoryController::class, 'getList']
)->name('category.getAll');

// Ruta para añadir productos
Route::get(
    '/category/add/{id?}',
    [CategoryController::class, 'add']
)->name('category.add');

//Ruta para salvar
Route::post(
    '/category/add',
    [CategoryController::class, 'save']
)->name('category.save');

// Ruta para eliminar
Route::get(
    'category/delete/{id}',
    [CategoryController::class, 'delete']
)->name('category.delete');
