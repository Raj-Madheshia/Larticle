<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    
    public function run()
    {
        User::truncate();

        $faker = Faker\Factory::create();
        $password = Hash::make('Raj');
        User::create([
            'name' => 'Administrator',
            'email' => 'Raj',
            'password' => $password,
        ]);

        for($i=0;$i<10;$i++)
        {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
