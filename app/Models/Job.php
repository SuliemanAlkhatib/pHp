<?php 
namespace App\Models;

class Job{
    public static function all(): array{
        return [
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
        ]];
    }
}
