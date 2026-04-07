<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'greeting' => 'Hello World'
    ]);
});


Route::get('/contacts',function (){
    return view('contacts');
});

Route::get('/about',function (){

    return view('about');
});

