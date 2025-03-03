<?php

use App\Http\Controllers\Hometemplate;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\slides;
use App\Http\Controllers\Register;
use App\Http\Controllers\Service;
use App\Http\Controllers\why;
use App\Http\Controllers\Team;
use App\Http\Controllers\Aboutus;
use App\Http\Controllers\client;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;
use App\Artisan;

// Route::get('/', function () {
//     return view('homeindex.index'); 
// });



Route::get('/services', function () {
    return view('pages.services'); 
});

Route::get('/why', function () {
    return view('pages.why'); 
});

Route::get('/team', function () {
    return view('pages.team'); 
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('login');
});


// Route::get('/addservices', function () {
//     return view('addservices');
// });

// Route::get('/slider', function () {
//     return view('layout.slider');
// });

//templateRoutes



Route::get('/dashboard',[TemplateController::class, 'index'])->middleware('is_user');
// Route::get('/',[Hometemplate::class, 'Homeindex']);

// ----------------------------



Route::post('/login',[Register::class, 'store'])->name('UserReg');
Route::post('/dashboard',[Register::class, 'singin'])->name('logIn1');
Route::get('/logout',[Register::class, 'logOut'])->name('logOut');


// slider route
Route::get('/',[slides::class, 'home']);
Route::get('/imageform', function () { return view('form'); })->middleware('is_user');
Route::post('/create',[slides::class, 'create'])->middleware('is_user')->name('created');
Route::get('/imageform',[slides::class, 'SliderDelete'])->middleware('is_user')->name('dltslider');
Route::get('/imageform/{id}',[slides::class, 'dltsl'])->middleware('is_user')->name('dltsl');

// services route
Route::get('/services',[Service::class, 'Services']);
Route::get('/servicesadd',[Service::class, 'addservices'])->middleware('is_user')->name('addservice');
Route::post('/Createdservices',[Service::class, 'Createservices'])->middleware('is_user')->name('Createdservices');
Route::get('/servicesadd',[Service::class, 'ServicesDelete'])->middleware('is_user')->name('deleteservice');
Route::get('/servicesadd/{id}',[Service::class, 'dltserv'])->middleware('is_user')->name('dltserv');

// about route
Route::get('/about',[Aboutus::class, 'aboutus']);
Route::get('/aboutadd',[Aboutus::class, 'aboutCreate'])->middleware('is_user')->name('addabout');
Route::post('/aboutcreated',[Aboutus::class, 'Createabout'])->middleware('is_user')->name('aboutcreated');
Route::get('/aboutadd',[Aboutus::class, 'DeleteAbout'])->middleware('is_user')->name('deleteabout');
Route::get('/aboutadd/{id}',[Aboutus::class, 'dltabt'])->middleware('is_user')->name('dltabt');

// why route
Route::get('/why',[why::class, 'whychose']);
Route::get('/whyadd',[why::class, 'WhyCreate'])->middleware('is_user')->name('addwhy');
Route::post('/whycreated',[why::class, 'CreateWhy'])->middleware('is_user')->name('whycreated');
Route::get('/whyadd',[why::class, 'DeleteWhy'])->middleware('is_user')->name('deletewhy');
Route::get('/whyadd/{id}',[why::class, 'whydlt'])->middleware('is_user')->name('whydlt');

// team route
Route::get('/team',[Team::class, 'team']);
Route::get('/Teamadd',[Team::class, 'TeamCreate'])->middleware('is_user')->name('teamadd');
Route::post('/teamcreated',[Team::class, 'CreateTeam'])->middleware('is_user')->name('teamcreated');
Route::get('/Teamadd',[Team::class, 'DeleteTeam'])->middleware('is_user')->name('deleteteam');
Route::get('/Teamadd/{id}',[Team::class, 'teamdlt'])->middleware('is_user')->name('teamdlt');


// Client route
Route::get('/client',[client::class, 'Clients']);
Route::get('/clientreview',[client::class, 'ClientCreate'])->middleware('is_user')->name('clientadd');
Route::post('/clientcreated',[client::class, 'CreateClient'])->middleware('is_user')->name('clientcreated');
Route::get('/clientreview',[client::class, 'DeleteClient'])->middleware('is_user')->name('deleteclient');
Route::get('/clientreview/{id}',[client::class, 'Clntdlt'])->middleware('is_user')->name('Clntdlt');