<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyContorller extends Controller
{
    private $myvar = "Hello World";
    function _construct(){

    }
    public function index(){
        return view('home');
    }
    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view ('myroute',$data);
    }
}
