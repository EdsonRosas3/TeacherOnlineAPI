<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'user_id' => 2,
                'teacher_id' =>1 ,    
            ],
            [
                'user_id' => 3,
                'teacher_id' =>1 ,    
            ],
            [
                'user_id' => 4,
                'teacher_id' =>1 ,    
            ],
            [
                'user_id' => 2,
                'teacher_id' =>4 ,    
            ],
            [
                'user_id' => 3,
                'teacher_id' =>4 ,    
            ],
            [
                'user_id' => 1,
                'teacher_id' =>4 ,    
            ],
        ];
        foreach ($items as $key => $value) {
            Student::create($value);
        }
    }
}
