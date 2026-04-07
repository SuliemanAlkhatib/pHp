<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts',function (){
    return view('contacts');
});

Route::get('/jobs',function (){
                $jobs = Job::all();
                return view('jobs',[
                    'greeting' => 'Hello World',
                    'jobs'=> $jobs]);
    });
    
Route::get('/jobs/{id}',function ($id) {
   $jobs = Job::all();
   $job =  Arr::first($jobs, fn($job) => $job['id'] == $id);
        return view('job',['job'=>$job] );    
});

    