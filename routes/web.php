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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@error')->name('error');
Route::get('/aim', 'PagesController@getAim');
Route::get('/staff', 'PagesController@getStaff');
Route::get('/news', 'PagesController@getNews');
Route::get('/zones', 'PagesController@getZones');
Route::get('/popular-info', 'PagesController@getPopular-Info');
Route::get('/beresident', 'PagesController@getBeresident');


Route::get('/preference-yic', 'PagesController@getPreference');
Route::get('/coordinated-consulting', 'PagesController@getCoordination');
Route::get('/how-to-join', 'PagesController@getInstruction');
Route::get('/questions', 'PagesController@getQuestions');
Route::get('/residents', 'PagesController@getResidents');
Route::get('/products', 'PagesController@getProducts');
Route::get('/contact', 'PagesController@getContact');
Route::get('/request', 'PagesController@getRequest');

//search
Route::get('/search/all', 'PagesController@getSearch')->name('search');



Route::get('/admin', 'AdminController@admin');
Route::resource('admin/posts', 'PostController');
Auth::routes();
Route::get('admin/blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\_\-]+');
Route::get('admin/products', 'ProductController@index')->name('products.index');
Route::post('/admin/products', 'ProductController@store')->name('products.store');
Route::delete('admin/products/{product}',array('uses' => 'ProductController@destroy', 'as' => 'products.destroy'));
Route::get('admin/residents', 'ResidentController@index')->name('residents.index');
Route::post('admin/residents', 'ResidentController@store')->name('residents.store');
Route::delete('admin/residents/{resident}', array('uses' => 'ResidentController@destroy', 'as' => 'residents.destroy'));











// Language set up
Route::get('setlocale/{locale}', function($locale){
    if(in_array($locale, \Config::get('app.locales')))
        return redirect()->back()->withCookie(cookie()->forever('language', $locale));
    else
        return redirect()->back();
})->name('lang.switch');

