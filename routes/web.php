<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'greeting' => 'Hello World',
        'jobs'=>[
            [
                'title'=>'Laravel Developer',
                'salary'=> 40000
            ],
            [
                'title'=>'Vue Developer',
                'salary'=> 35000
            ],
            [
                'title'=>'React Developer',
                'salary'=> 45000
            ],
             [
                'title'=>'Angular Developer',
                'salary'=> 30000
            ],
             [
                'title'=>'Node Developer',
                'salary'=> 50000
        ]

    ]]);
});


Route::get('/contacts',function (){
    return view('contacts');
});

Route::get('/about',function (){

    return view('about');
});

