<?php

use Illuminate\Support\Facades\Route;
use vendor\tcg\voyager\resources\views;



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


Route::get('applications/', function () {
    return view('sajilis.applications')
    ->with('name', 'Victoria')
    ->with('occupation', 'Astronaut');
});


Route::get('create/applications/', 'App\Http\Controllers\SajiliController@index');
Route::get('applications/', 'App\Http\Controllers\SajiliController@select_data')->name('applications');
Route::get('create/subsequent/applications/', 'App\Http\Controllers\SubsequentSajiliController@create_data');
Route::get('subsequent/applications/', 'App\Http\Controllers\SubsequentSajiliController@select_data')->name('sapplications');;
Route::get('create/disbursements/', 'App\Http\Controllers\DisbursementController@create_data');
Route::get('disbursements/', 'App\Http\Controllers\DisbursementController@select_data')->name('disbursements');;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});


