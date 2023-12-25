<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function () {
    //$data['']="";
    $data = ['val_a' => 'น้องบอม ตัวเล็กน่ารักเอาใจเก่ง'];
    $data['val_b']="1700 เท่านั้นสนใจทักได้ค่าาา";
    return view('myfolder.mypage',$data);
});

Route::post('/myroute', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view ('myroute',$data);
});
