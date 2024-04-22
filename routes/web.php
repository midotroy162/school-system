<?php
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Grades;
use app\Http\Controllers;
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
Auth::routes();

Route::group(['middleware'=>['guest']],function(){Route::get('/', function () {
    return view('auth.login');
});} );

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth']
], 
function(){
//      Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dashborad', 'HomeController@index')->name('home');

        Route::group(["namespace" => 'Grades'], function () {
            Route::resource('Grades', 'GradeController');
        });
});







Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
