<?php 
namespace App\Models;
use Illuminate\Support\Arr;



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
        ]];}
        public static function find(int $id): array{
            $jobs = self::all();
            $job = Arr::first($jobs, fn($job) => $job['id'] == $id);  
            if(!$job){
                abort(404);
            }else{
                return $job;
            }
    }
}
?>