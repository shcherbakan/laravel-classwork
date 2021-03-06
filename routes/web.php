<?php

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

Route::get('/products', function(){
    $products = \App\Models\Product::all();
    return view('product.index', compact('products'));
});

Route::post('/products', function (){
    $data = request(['title', 'description', 'price']);
    \App\Models\Product::create($data);
});
