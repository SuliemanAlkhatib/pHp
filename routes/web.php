<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts',function (){
    return view('contacts');
});

Route::get('/jobs',function (){
                
                return view('jobs',[
                    'greeting' => 'Hello World',
                    'jobs'=>[
                        ['id'=>1,
                            'title'=>'Laravel Developer',
                            'salary'=> 40000
                            ],
            [
                'id'=>2,

                'title'=>'Vue Developer',
                'salary'=> 35000
                ],
                [
                    'id'=>3,
                    'title'=>'React Developer',
                    'salary'=> 45000
            ],
             [
                'id'=>4,
                'title'=>'Angular Developer',
                'salary'=> 30000
                ],
             [
                 'id'=>5,

                 'title'=>'Node Developer',
                'salary'=> 50000
                ]

    ]]);
    });
    
Route::get('/jobs/{id}',function ($id){
       $jobs=[
                        ['id'=>1,
                            'title'=>'Laravel Developer',
                            'salary'=> 40000
                            ],
            [
                'id'=>2,

                'title'=>'Vue Developer',
                'salary'=> 35000
                ],
                [
                    'id'=>3,
                    'title'=>'React Developer',
                    'salary'=> 45000
            ],
             [
                'id'=>4,
                'title'=>'Angular Developer',
                'salary'=> 30000
                ],
             [
                 'id'=>5,

                 'title'=>'Node Developer',
                'salary'=> 50000
                ]

    ];

   $job =  Arr::first($jobs, fn($job) => $job['id'] == $id);
        return view('job',['job'=>$job] );    
});

    