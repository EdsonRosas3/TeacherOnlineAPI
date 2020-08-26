<?php

use Illuminate\Database\Seeder;
use App\Qualification;


class QualificationSeeder extends Seeder
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
               'number_starts' =>4,
               'user_id' =>1,
               'teacher_id' =>1,
            ],
            [
                'number_starts' =>4,
                'user_id' =>2,
                'teacher_id' =>1,
             ],
             [
                'number_starts' =>4,
                'user_id' =>3,
                'teacher_id' =>1,
             ],
             [
                'number_starts' =>5,
                'user_id' =>4,
                'teacher_id' =>1,
             ],
             [
                'number_starts' =>4,
                'user_id' =>1,
                'teacher_id' =>2,
             ],
             [
                'number_starts' =>5,
                'user_id' =>2,
                'teacher_id' =>2,
             ],
             [
                'number_starts' =>3,
                'user_id' =>3,
                'teacher_id' =>2,
             ],
             [
                'number_starts' =>2,
                'user_id' =>1,
                'teacher_id' =>3,
             ],
             [
                'number_starts' =>5,
                'user_id' =>4,
                'teacher_id' =>3,
             ],
        ];
        foreach ($items as $key => $value) {
            Qualification::create($value);
        }
    }
}
