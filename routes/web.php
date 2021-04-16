<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Front\UserController;
use App\Http\controllers\NewController;

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

    $data=[];
    $data['name']='rama olabi';
    $data['age']=24;


    return view('welcome',$data);
});

Route::get('/test', function () {
    return 'welcome';
});
Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('index',[UserController::class,'getindex']);
Route::get('dataview',[UserController::class,'getdata']);
Route::get('dataview2',[UserController::class,'getdata2']);




Route::get('/show-number/{id?}', function () {
    return 'welcome';
})->name('a');

Route::namespace('Front')->group(function () {
    route:: get('users',[UserController::class,'nameusers']);
});



Route::get('/test', function () {
    return 'welcome';
})->middleware('auth');

route:: group(['prefix'=>'users','middleware'=>'Authenticate'],function(){
    route::get('show',[UserController::class,'nameusers']);
    route::get('delete',[UserController::class,'nameusers']);
    route::get('update',[UserController::class,'nameusers']);
    route::get('insert',[UserController::class,'nameusers']);
    route::get('edit',[UserController::class,'nameusers']);

});

Route::prefix('users')->group(function(){
    route::get('show',[UserController::class,'nameusers']);
    route::get('delete',[UserController::class,'nameusers']);
    route::get('update',[UserController::class,'nameusers']);
    route::get('insert',[UserController::class,'nameusers']);
    route::get('edit',[UserController::class,'nameusers']);

});

Route ::resource ('new',NewController::class);


Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified')
;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
