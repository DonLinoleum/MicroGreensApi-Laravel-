<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::fallback(function(){
    return view('main');
});

/*Route::get("/about",function(){
    return view('about',['name'=>"test"]);
});

Route::get("/products",function(){
    $products =  App\Models\Products::all();
  return response()->json($products);

});*/

/*Route::get("/update",function(){
    $row = App\Models\Products::find(3);
    $row->price = 20.99;
    $row->save();
    return response()->json($row);
});*/

/*Route::get("/product_add",function(){
    $product = new App\Models\Products([
        "name" => "card2",
        "preview_image" => "/assets/images/cards/card2.jpg",
        "price" => 30.99,
        "description" => "Microgreens: The Insiders Secrets To Growing Gourmet Greens & Building A Wildly Successful Microgreen Business (Smarter Home Gardening). If you are buying microgreens for the first time consider starting with the three mixes: mild, spicy, and complete - containing over 15 varieties in the three pots - we think you'll love them."
    ]);
    $product->save();
});*/
