<?php

use Illuminate\Support\Facades\Route;

// route using a facade -> "method on facade"
// Route::get('/', 'HomeController@index');

// route that takes two parameters ,, ()


// ADOPTLINE ROUTE


// Route::get('/login',['uses' => 'DashController@login', 'as' => 'login']);
// Route::get('/register',['uses' => 'DashController@register', 'as' => 'register']);
// Route::post('/save',['uses' => 'DashController@save', 'as' => 'save']);
// Route::post('/check',['uses' => 'DashController@check', 'as' => 'check']);



// for middlewear 
Route::get('/login',['uses' => 'DashController@login', 'as' => 'login']);
Route::get('/register',['uses' => 'DashController@register', 'as' => 'register']);
Route::resource('dash', 'DashController');
Route::get('/adopt',['uses' => 'AdoptlineController@showadopts', 'as' => 'adoptline.showadopt']);
Route::get('adoptline/proceedAdopts',['uses' => 'AdoptlineController@proceedAdopts', 'as' => 'adoptline.proceedAdopts']);
Route::get('adoptline/proceedAdopts',['uses' => 'AdoptlineController@proceedAdopts', 'as' => 'adoptline.proceedAdopts']);
Route::post('/adoptline/{id}/saveOrUpdate',['uses' => 'AdoptlineController@saveOrUpdate', 'as' => 'adoptline.saveOrUpdate']);
Route::resource('rescuer', 'RescuerController');
Route::resource('adopter', 'AdopterController');
Route::resource('disease', 'DiseaseController');
Route::resource('dashboard', 'DashController');
Route::resource('personnel', 'PersonnelController');
Route::resource('animal', 'AnimalController');
Route::resource('homepage', 'HomepageController');


// ANIMAL ROUTE
Route::resource('adoptline', 'AdoptLineController');
Route::get('/animal/{id}/checks',['uses' => 'AnimalController@checks', 'as' => 'animal.check']);
Route::put('/animal/{id}/healthupdate',['uses' => 'AnimalController@healthupdate', 'as' => 'animal.healthupdate']);



Route::group(['middleware'=>['Authcheck']], function(){


});

//////------> not for middlewear
Route::post('/check',['uses' => 'DashController@check', 'as' => 'check']);
Route::post('/save',['uses' => 'DashController@save', 'as' => 'save']);
Route::get('/home',['uses' => 'DashController@showadopthome', 'as' => 'home']);
////// ------>>>


//////////

Route::get('/contact-form', ['uses' =>'ContactController@showForm','as' => 'showForm']);

Route::post('/contact-form', ['uses' =>'ContactController@storeForm','as' => 'storeForm']);

Route::get('/contact-form', ['uses' =>'DashController@contacts','as' => 'welcome']);
Route::post('/index/searchAdoptable', ['uses' =>'AnimalController@searchAdoptable','as' => 'Adoptsearch']);
Route::get('/conlist', ['uses' =>'DashController@conlist','as' => 'conlist']);



//////////


