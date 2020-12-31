<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SmartphoneController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('brand', BrandController::class);
Route::resource('smartphone', SmartphoneController::class);


# In this way it provides a recursive list.
# Array Brand -> Smartphones
Route::get('/data/recursive', function(){
   $items = App\Models\Brand::all();
   foreach ($items as &$key) {
      $key->smartphones;
   }

   return $items;
});

Route::get('/data/optimal', function(){
   # This is an optimal way to iterate lists from frontend.
   # Array Brands, array Smartphones
   return [
      'brands' => App\Models\Brand::all(),
      'smartphones' => App\Models\Smartphone::all(),
   ];
});