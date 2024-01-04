<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyContorller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/my-controller', [MyContorller::class, 'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyContorller@index');
Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/my-contorller3', 'MyContorller@index');
    Route::post('my-controller3-post', 'MyContorller@store');
});
Route::resource('/my-controller4', MyContorller::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function () {
    //$data['']="";
    $data = ['val_a' => 'เลือกตัวตั้ง'];
    $data['val_b']="ใส่ในช่อง";
    return view('myfolder.mypage',$data);
});

Route::post('/myroute', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view ('myroute',$data);
});
