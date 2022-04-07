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
    return view('welcome');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('postlogin','AuthController@postlogin');
Route::get('/register','AuthController@regis');
Route::post('/postregis','AuthController@postregis');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:user','revalidate']], function(){
    
    
    Route::get('/perjalanan','PerjalananController@index');
    Route::get('/tambah','PerjalananController@create');
    Route::post('/store','PerjalananController@store');
    Route::get('/destroy/{id}','PerjalananController@destroy');
    
});

Route::group(['middleware' => ['auth','checkRole:admin,user','revalidate']], function(){
    Route::get('/utama','TemplateController@app');
    Route::get('/profile','TemplateController@profile');
    Route::get('/edit/{id}','TemplateController@editprov');
    Route::put('//updateprov/{id}','TemplateController@updateprov');
    Route::get('/upload','UserController@upload');
    Route::post('upload/proses','UserController@uploadproses');
});

Route::group(['middleware' => ['auth','checkRole:admin','revalidate']], function(){
    Route::get('/user','UserController@index');
    Route::get('/cetak_pdf','UserController@cetak_pdf');
    Route::get('/tutup/{id}','UserController@destroy');
});