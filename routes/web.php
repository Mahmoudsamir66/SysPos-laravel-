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
Route::group(['as'=>'admin.','prefix'=>'admin/'],function (){
   Route::get('login','App\Http\Controllers\LoginController@index')->name('login');
   Route::post('login.store','App\Http\Controllers\LoginController@loginStore')->name('login.store');
   Route::get('logout','App\Http\Controllers\LoginController@logout')->name('logout');
});

Route::group(['middleware'=>'auth'],function () {
Route::get('/','App\Http\Controllers\HomeController@index')->name('Dashbord');
///////kind

    Route::group(['as' => 'kind.', 'prefix' => 'kind/'], function () {
        //kind
        Route::get('create', 'App\Http\Controllers\KindController@create')->name('create');
        Route::post('store', 'App\Http\Controllers\KindController@store')->name('store');
        Route::post('Update/{id}', 'App\Http\Controllers\KindController@update')->name('Update');
        Route::get('Edit/{id}', 'App\Http\Controllers\KindController@Edit')->name('Edit');
        Route::get('delete/{id}', 'App\Http\Controllers\KindController@delete')->name('delete');
    });
//stores
    Route::group(['as' => 'stores.', 'prefix' => 'stores/'], function () {
        //stores
        Route::get('create', 'App\Http\Controllers\StoreController@create')->name('create');
        Route::post('store', 'App\Http\Controllers\StoreController@store')->name('store');
        Route::post('Update/{id}', 'App\Http\Controllers\StoreController@update')->name('Update');
        Route::get('Edit/{id}', 'App\Http\Controllers\StoreController@Edit')->name('Edit');
        Route::get('delete/{id}', 'App\Http\Controllers\StoreController@delete')->name('delete');
    });
///product
    Route::group(['as' => 'product.', 'prefix' => 'product/'], function () {
        //product
        Route::get('create', 'App\Http\Controllers\ProductController@create')->name('create');
        Route::post('store', 'App\Http\Controllers\ProductController@store')->name('store');
        Route::post('Update/{product}', 'App\Http\Controllers\ProductController@update')->name('Update');
        Route::get('Edit/{product}', 'App\Http\Controllers\ProductController@Edit')->name('Edit');
        Route::get('delete/{product}', 'App\Http\Controllers\ProductController@delete')->name('delete');
    });

//seller
    Route::group(['as' => 'seller.', 'prefix' => 'seller/'], function () {
        //seller
        Route::get('create', 'App\Http\Controllers\SellerController@create')->name('create');
        Route::post('store', 'App\Http\Controllers\SellerController@store')->name('store');
        Route::post('Update/{id}', 'App\Http\Controllers\SellerController@update')->name('Update');
        Route::get('Edit/{id}', 'App\Http\Controllers\SellerController@Edit')->name('Edit');
        Route::get('delete/{id}', 'App\Http\Controllers\SellerController@delete')->name('delete');
    });

//buyer
    Route::group(['as' => 'buyer.', 'prefix' => 'buyer/'], function () {
        //buyer
        Route::get('create', 'App\Http\Controllers\BuyerController@create')->name('create');
        Route::post('store', 'App\Http\Controllers\BuyerController@store')->name('store');
        Route::post('Update/{buyer}', 'App\Http\Controllers\BuyerController@update')->name('Update');
        Route::get('Edit/{buyer}', 'App\Http\Controllers\BuyerController@Edit')->name('Edit');
        Route::get('delete/{buyer}', 'App\Http\Controllers\BuyerController@delete')->name('delete');
    });

//search
    Route::group(['as' => 'search.', 'prefix' => 'search/'], function () {

        Route::get('create', 'App\Http\Controllers\SearchController@create')->name('create');
        Route::get('productSearch', 'App\Http\Controllers\SearchController@productSearch')->name('productSearch');
        Route::get('kindSearch', 'App\Http\Controllers\SearchController@kindSearch')->name('kindSearch');
        Route::get('kindCreate', 'App\Http\Controllers\SearchController@kindCreate')->name('kindCreate');
        Route::post('store', 'App\Http\Controllers\SearchController@store')->name('store');
        Route::post('Update/{buyer}', 'App\Http\Controllers\SearchController@update')->name('Update');
        Route::get('Edit/{buyer}', 'App\Http\Controllers\SearchController@Edit')->name('Edit');
        Route::get('delete/{buyer}', 'App\Http\Controllers\SearchController@delete')->name('delete');
    });

  //report
    Route::group(['as' => 'Report.', 'prefix' => 'Report/'], function () {

        Route::get('create', 'App\Http\Controllers\reportController@create')->name('create');
        Route::get('product_kind', 'App\Http\Controllers\reportController@productkind')->name('product_kind');
        Route::post('Update/{buyer}', 'App\Http\Controllers\reportController@update')->name('Update');
        Route::get('Edit/{buyer}', 'App\Http\Controllers\reportController@Edit')->name('Edit');
        Route::get('delete/{buyer}', 'App\Http\Controllers\reportController@delete')->name('delete');
    });

});
