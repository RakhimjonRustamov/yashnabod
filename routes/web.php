<?php

Route::get('/', function () {
    return view('welcome');
});

//Нome
Route::get('/', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@error')->name('error');
Route::get('/aim', 'PagesController@getAim');
Route::get('/staff', 'PagesController@getStaff');

//News
Route::get('/news/{slug}', ['as'=>'news.single', 'uses'=>'BlogController@getSingleNews'])->where('slug', '[\w\d\_\-]+');
Route::get('/news', 'BlogController@getNews');
//News

Route::get('/zones', 'PagesController@getZones');
Route::get('/popular-info', 'PagesController@getPopularInfo');
Route::get('/beresident', 'PagesController@getBeresident');
Route::get('/normative', 'PagesController@getNormative');
Route::get('/reester', 'PagesController@getReester');


//Возможности
Route::get('/areas', 'PagesController@getAreas');
Route::get('/copyright', 'PagesController@getCopyRight');
Route::get('/credits', 'PagesController@getCredits');
Route::get('/promotion', 'PagesController@getPromotion');
Route::get('/sponsorship', 'PagesController@getSponsorship');
Route::get('/taxes', 'PagesController@getTaxes');
//Возможности


Route::get('/preference-yic', 'PagesController@getPreference');
Route::get('/coordinated-consulting', 'PagesController@getCoordination');
Route::get('/how-to-join', 'PagesController@getInstruction');
Route::get('/questions', 'PagesController@getQuestions');
Route::get('/residents', 'PagesController@getResidents');
Route::get('/residents/{resident}', 'PagesController@getSingleResident')->name('getSingleResident');


Route::get('/products', 'PagesController@getProducts');

// reception
Route::get('/reception', 'PagesController@getReception');
Route::post('reception', 'ReceptionController@postReception')->name('reception');
// contact
Route::get('/contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact')->name('contact');
//search
Route::get('/search/all', 'PagesController@getSearch')->name('search');
//offer
Route::get('/request', 'PagesController@getRequest')->name('pages.request');
Route::post('/request', 'OfferController@postOffer')->name('offer.request');


Route::get('/admin', 'AdminController@admin');
Route::resource('admin/posts', 'PostController');
Auth::routes();
Route::get('admin/blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\_\-]+');
Route::get('admin/products', 'ProductController@index')->name('products.index');
Route::post('/admin/products', 'ProductController@store')->name('products.store');
Route::delete('admin/products/{product}',array('uses' => 'ProductController@destroy', 'as' => 'products.destroy'));
Route::put('admin/products/{product}', 'ProductController@update')->name('products.update');

Route::get('admin/residents', 'ResidentController@index')->name('residents.index');
Route::post('admin/residents', 'ResidentController@store')->name('residents.store');
Route::put('admin/residents/{resident}', 'ResidentController@update')->name('residents.update');
Route::delete('admin/residents/{resident}', array('uses' => 'ResidentController@destroy', 'as' => 'residents.destroy'));

Route::get('admin/receptions', 'ReceptionController@index')->name('receptions.index');
Route::delete('admin/receptions/{reception}', array('uses' => 'ReceptionController@destroy', 'as' => 'receptions.destroy'));

Route::get('admin/employees', 'EmployeeController@index')->name('employees.index');
Route::post('admin/employees', 'EmployeeController@store')->name('employees.store');
Route::delete('admin/employees/{employee}', array('uses'=>'EmployeeController@destroy', 'as'=>'employees.destroy'));
Route::put('admin/employees/{employee}', 'EmployeeController@update')->name('employees.update');

Route::get('admin/offers', 'OfferController@index')->name('offers.index');
Route::delete('admin/offers/{offer}', array('uses'=>'OfferController@destroy', 'as'=>'offers.destroy'));
Route::get('admin/offers/download/{id}', 'OfferController@download');

Route::get('admin/popularity', 'PopularityController@index')->name('popularity.index');
Route::post('admin/popularity', 'PopularityController@store')->name('popularity.store');
Route::delete('admin/popularity/{popularity}', array('uses'=>'PopularityController@destroy', 'as'=>'popularity.destroy'));
Route::put('admin/popularity/{popularity}', 'PopularityController@update')->name('popularity.update');




Route::get('/download', 'HomeController@downloadZip');

// Language set up
Route::get('setlocale/{locale}', function($locale){
    if(in_array($locale, \Config::get('app.locales')))
        return redirect()->back()->withCookie(cookie()->forever('language', $locale));
    else
        return redirect()->back();
})->name('lang.switch');

