<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
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
               'first_name' =>'Tom',
               'last_name' =>'Mouse',
               'avatar' => 'aaaaaa',
               'email'=>'tom@gmail.com',
               'password'=>bcrypt('tom'),
               
            ],
            [
                'first_name' =>'Jery',
                'last_name' =>'Crack',
                'avatar' => 'aaaaaa',
                'email'=>'jery@gmail.com',
                'password'=>bcrypt('jery'),
               
             ],
             [
                'first_name' =>'Bar',
                'last_name' =>'Sinpsom',
                'avatar' => 'aaaaaa',
                'email'=>'bar@gmail.com',
                'password'=>bcrypt('bar'),
               
             ],
             [
                'first_name' =>'Bog',
                'last_name' =>'Esponja',
                'avatar' => 'aaaaaa',
                'email'=>'bog@gmail.com',
                'password'=>bcrypt('bog'),
               
             ],
             [
                'first_name' =>'Tony',
                'last_name' =>'Start',
                'avatar' => 'aaaaaa',
                'email'=>'tony@gmail.com',
                'password'=>bcrypt('tony'),
               
             ],
             [
                'first_name' =>'Hary',
                'last_name' =>'Poter',
                'avatar' => 'aaaaaa',
                'email'=>'hary@gmail.com',
                'password'=>bcrypt('hary'),
                
             ],
             [
                'first_name' =>'Timon',
                'last_name' =>'Pumba',
                'avatar' => 'aaaaaa',
                'email'=>'timon@gmail.com',
                'password'=>bcrypt('timon'),
                
             ],
             [
                'first_name' =>'Simba',
                'last_name' =>'Escar',
                'avatar' => 'aaaaaa',
                'email'=>'simba@gmail.com',
                'password'=>bcrypt('simba'),
             ],
        ];
        foreach ($items as $key => $value) {
            User::create($value);
        }
    }
}
