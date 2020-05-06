<?php

use App\Http\Middleware\EnquiryCheck;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});
Route::get('/home', 'HomeController@index')->name('home');


//frontend

Route::get('/', 'MainPageController@home');
Route::get('/contact', 'ContactPageController@index');
Route::post('/contact', 'ContactPageController@sendMail');
Route::get('/contact-mail', 'ContactPageController@viewMail');
Route::get('/enquiry-received', 'ContactPageController@mailReceived')->middleware(EnquiryCheck::class);
Route::get('/bedroom', 'CollectionsController@showBedroom');
Route::get('/dining-room', 'CollectionsController@showDiningRoom');
Route::get('/living-room', 'CollectionsController@showLivingRoom');
Route::get('/frequently-asked-questions', 'CollectionsController@showFaq');
Route::get('/{slug}', 'CollectionsController@singleProduct');






//Admin Routes
Route::get('/admin/categories', 'Admin\CategoryController@index')->middleware('role:Admin');
Route::get('/admin/category/create', 'Admin\CategoryController@create')->middleware('role:Admin');
Route::post('/admin/category/store', 'Admin\CategoryController@store')->middleware('role:Admin');
Route::get('/admin/categories/{id}/edit', 'Admin\CategoryController@edit')->middleware('role:Admin');
Route::put('/admin/categories/{id}', 'Admin\CategoryController@update')->middleware('role:Admin');
Route::get('/admin/categories/{id}/delete','admin\CategoryController@delete')->middleware('role:Admin');
Route::get('/admin/inventory-items', 'Admin\ProductController@index')->middleware('role:Admin');
Route::get('/admin/inventory/create', 'Admin\ProductController@create')->middleware('role:Admin');
Route::post('/admin/inventory/store', 'Admin\ProductController@store')->middleware('role:Admin');
Route::get('/admin/inventory/{id}/edit', 'Admin\ProductController@edit')->middleware('role:Admin');
Route::put('/admin/inventory/{id}', 'Admin\ProductController@update')->middleware('role:Admin');
Route::get('/admin/inventory/{id}/delete', 'Admin\ProductController@delete')->middleware('role:Admin');
