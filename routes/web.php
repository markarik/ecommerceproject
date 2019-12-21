<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin_guest'],function (){
//    Route::prefix('admin')->group(function (){
//        Route::get('/login', 'AdminAuth\AdminLoggingController@showLoginform')->name('admin.login');
//        Route::post('/login', 'AdminAuth\AdminLoggingController@login')->name('admin.login.submit');
//        Route::get('register', 'AdminAuth\AdminRegisterController@index')->name('admin.register');
//        Route::post('register', 'AdminAuth\AdminRegisterController@store')->name('admin.store');
//
//
//
//    });
});

Route::get('/admin/home', 'Admin\Admin_Guest\AdminController@index')->name('admin.dashboard');
Route::get('/admin/register', 'Admin\Admin_Auth\AdminRegisterController@index')->name('admin.register');
Route::get('/admin/login', 'Admin\Admin_Auth\AdminLoginController@index')->name('admin.login');


//Route::group(['middleware'=>'admin_auth'],function (){
//
//    Route::prefix('admin')->group(function (){
////        Route::post('/logout', 'AdminAuth\AdminLoggingController@logout')->name('admin.logout');
//        Route::get('/home', 'Admin\Admin_Guest\AdminController@index')->name('admin.dashboard');
//        Route::get('/availableStores', 'AdminGuest\AdminController@viewSeller')->name('admin.viewSeller');
//        Route::get('/availableStores/seller/{seller_id}', 'AdminGuest\AdminController@SellerChangeStatus')->name('admin.Seller.status');
//        Route::get('/products', 'AdminGuest\AdminController@create')->name('admin.products');
//        Route::get('/featured/products', 'AdminGuest\AdminController@showFeaturedProducts')->name('admin.featured.products');
//        Route::get('category','AdminGuest\CategoryController@index')->name('view.category');
//        Route::get('category/add','AdminGuest\CategoryController@create')->name('add.category');
//        Route::post('category','AdminGuest\CategoryController@store')->name('store.category');
//        Route::get('category/{id}/edit','AdminGuest\CategoryController@edit')->name('category.edit');
//        Route::post('category/{id}','AdminGuest\CategoryController@update')->name('category.update');
//        Route::get('change/status/{product_id}','AdminGuest\AdminController@change_status')->name('product.change.status');
//        Route::get('couresels','AdminGuest\CoureselController@index')->name('view.couresels');
//        Route::get('delete/couresel/{id}', 'AdminGuest\CoureselController@destroy');
//
//        Route::post('couresels/store','AdminGuest\CoureselController@store')->name('store.couresels');
//        Route::get('brands', 'AdminGuest\AdminController@viewBrands')->name('admin.brand.view');
//        Route::get('variants', 'AdminGuest\VariantsController@index')->name('admin.variants.view');
//        Route::post('variants/store', 'AdminGuest\VariantsController@store')->name('admin.variants.store');
////        Route::get('variants/{id}/edit', 'AdminGuest\VariantsController@edit')->name('admin.variants.edit');
//        Route::post('variants/{id}', 'AdminGuest\VariantsController@update')->name('admin.variants.update');
//        Route::get('constants','AdminGuest\SettingsController@index')->name('admin.add.constants');
//        Route::post('constants/store','AdminGuest\SettingsController@store')->name('admin.store.constants');
//        Route::post('constants/delete/{id}','AdminGuest\SettingsController@destroy')->name('admin.delete.constants');
//        Route::post('constants/{id}/edit','AdminGuest\SettingsController@update')->name('admin.edit.constants');
//        Route::get('orders','AdminGuest\OrderController@adminindex')->name('admin.view.orders');
//        Route::get('orders/pdf/{seller_id}','AdminGuest\OrderController@pdfexport')->name('admin.orderpdf');
////        Route::get('orders/pdf/{id}','AdminGuest\OrderController@pdfexport')->name('admin.orderpdf');
//        Route::get('orders/pdf','AdminGuest\OrderController@tablepdfexport')->name('admin.orderpdf.table');
//
//
//    });
//
//});