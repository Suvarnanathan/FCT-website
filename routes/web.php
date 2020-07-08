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

Route::get('//', function () {
    return view('welcome');
});
Route::get('/', 'folderController@home');
Route::get('academic', 'folderController@academic');
Route::get('admin', 'folderController@administrative');
Route::get('non', 'folderController@nonacademic');
Route::get('iic', 'folderController@iicfct');
Route::get('nel', 'folderController@nelrc');
Route::get('ab_nel', 'folderController@about_nelrc');
Route::get('pro', 'folderController@pro_nelrc');
Route::get('cont', 'folderController@con_nelrc');
Route::get('nano', 'folderController@nano');
Route::get('dac', 'folderController@dac');
Route::get('dce', 'folderController@dce');
Route::get('dse', 'folderController@dse');
Route::get('ugp', 'folderController@undergrad');
Route::get('bse', 'folderController@bse');
Route::get('bet', 'folderController@bet');
Route::get('eval', 'folderController@eval');
Route::get('epro', 'folderController@epro');
Route::get('postgra', 'folderController@postgra');
Route::get('master', 'folderController@master');
Route::get('bict', 'folderController@bict');
Route::get('con', 'folderController@conference');
Route::get('icact', 'folderController@icact');
Route::get('kicact', 'folderController@kicact');
Route::get('kicact2', 'folderController@kicact2');
Route::get('phd', 'folderController@phd');
Route::get('research', 'folderController@research');
Route::get('prospectus', 'folderController@prospectus');
Route::get('notice', 'folderController@notice');
Route::get('contact', 'folderController@contact');
Route::get('vacancy', 'folderController@vacancy');
Route::get('develope', 'folderController@develope');
Route::get('notices', 'folderController@notices');