<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelsCtroller;
use App\Http\Controllers\YoutuberController;

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

/*//---------------------------'users/{id}/hello/{abc}'-------------------------------------------------

Route::get('users/{id}/hello/{abc}', function ($id,$abc) {

    return $id."  ".view('welcome')."".$abc;

})->where(['id'=>'[0-9]+','abc'=>'[A-Z][a-z]+']);   //----------('[A-Z][a-z]+')!=('[A-Za-z]+')

//-----------------------------'users/{id?}/hello/'-----------------------------------------------

Route::get('users/hello/{id?}', function ($id=41) {

    return $id."  ".view('welcome');

})->where(['id'=>'[0-9]+']); //where('id','[0-9]+');*/


//-----------------------------'/'-----------------------------------------------

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
//----------------------------'/channels/index'------------------------------------------------
Route::get('/channels',[ChannelsCtroller::class,'index'])->name('channels');//function () {return view('channels.index');}    '\App\Http\Controllers\ChannelsCtroller@index')

//----------------------------'/channels/creat'------------------------------------------------
Route::get('/channels/create',[ChannelsCtroller::class,'creat'] )->name('c_create');

//----------------------------'/channels/edit'------------------------------------------------
Route::get('/channels/{id}/edit',[ChannelsCtroller::class,'edit'])->name('c_edit')->where(['id'=>'[0-9]+']);

//----------------------------'/channels/show'------------------------------------------------
Route::get('/channels/{id}',[ChannelsCtroller::class,'show'])->name('c_show')->where(['id'=>'[0-9]+']);






//---------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------
//----------------------------'/youtuber/index'------------------------------------------------
Route::get('/youtubers',[YoutuberController::class,'index'])->name('youtuber');

//-------------------------------'/youtuber/creat'---------------------------------------------
Route::get('/youtubers/create', [YoutuberController::class,'creat'])->name('y_create');

//----------------------------'/youtuber/edit'------------------------------------------------
Route::get('/youtubers/{id}/edit',[YoutuberController::class,'edit'])->name('y_edit')->where(['id'=>'[0-9]+']);

//----------------------------'/youtuber/show'------------------------------------------------
Route::get('/youtubers/{id}',[YoutuberController::class ,'show'])->name('y_show')->where(['id'=>'[0-9]+']);
