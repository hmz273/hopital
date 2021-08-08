<?php
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('doctors', 'App\Http\Controllers\dctController');

Route::get('redirects','App\Http\Controllers\HomeController@index');
Route::get('admin/add/', 'App\Http\Controllers\dctController@create')->name('admin.add');
Route::post('admin/add/', 'App\Http\Controllers\dctController@store')->name('admin.add');
Route::get('admin/edit/{id}', 'App\Http\Controllers\dctController@edit')->name('admin.edit');
Route::post('admin/edit/{id}', 'App\Http\Controllers\dctController@update')->name('admin.update');
Route::get('admin/delete/{id}', 'App\Http\Controllers\dctController@destroy')->name('admin.destroy');

//PATIENT

Route::get('redirects','App\Http\Controllers\HomeController@index');
Route::resource('rendez_vouses', 'App\Http\Controllers\rdvController');
Route::get('patient/rdv/', 'App\Http\Controllers\rdvController@create')->name('patient.rdv');
Route::post('patient/rdv/', 'App\Http\Controllers\rdvController@store')->name('patient.rdv');
Route::get('patient/edit/{id}', 'App\Http\Controllers\rdvController@edit')->name('rendez_vous.edit');
Route::post('patient/edit/{id}', 'App\Http\Controllers\rdvController@update')->name('rendez_vous.update');
Route::get('patient/delete/{id}', 'App\Http\Controller\rdvController@destroy')->name('rendez_vous.destroy');
