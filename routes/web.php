<?php

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
Route::get('/test', 'TestController@index');
Route::get('/init', 'VideoController@init');
Route::get('/play/{name}', 'TestController@play');
Route::get('/danmakuv2v3', '\MoePlayer\Danmaku\Controllers\DanmakuController@index');
Route::post('/danmakuv2v3/send', '\MoePlayer\Danmaku\Controllers\DanmakuController@store');
Route::post('/danmaku/send', '\MoePlayer\Danmaku\Controllers\DanmakuController@store');
Route::resource('/video', 'VideoController');
//Route::get('danmaku/send', function () {
//    dd(1);
//});
//Route::post('danmaku/send', function (\Illuminate\Http\Request $request) {
//    dd(1);
//});