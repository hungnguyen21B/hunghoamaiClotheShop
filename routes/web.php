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



// Route::get('/{1}',function($id) {
//     echo 'ID: '.$id;
//  });
// Route::get('/{name?}', function ($name) { return view('welcomeHung').$name;});
Route::get('khoahoc',['as'=>'welcomeHung', function () {
    echo "xin chao cac ban";
 }]);
Route:: group(['welcomeHung'=>'MyGroup'],function(){
    Route::get('u1', function () {
        echo "xin chao cac 1";
    });
    Route::get('u2',  function () {
        echo "xin chao cac 2";
    });
 });