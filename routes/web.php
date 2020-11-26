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

Route::get('/', function () {
  
    return view('page');
});


Route::get('/test1', function () {
    return 'welcome';
})->name('a');




Route::group(['prefix'=>'users','middleware'=>'auth '],function(){
Route::get('/majed',function(){
 return 'work';
});

});



Route::get('news','App\Http\Controllers\NewsController@index'); // this = all route under; 
/*
Route::get('news','NewsController@show');
Route::post('news','NewsController@store');
Route::get('news/create','NewsController@create');

Route::get('news/{id}/edit','NewsController@edit');

Route::post('news/{id}','NewsController@update');

Route::delete('news/{id}','NewsController@delete')
*/




Route::get('/landing', function () {
    return view('landing');
});




Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
