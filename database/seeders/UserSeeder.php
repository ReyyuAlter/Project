<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        User::create(array(
            'id' => 1,
            'name' => 'Waka 3',
            'email' => 'waka3@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ryo.jpg',
            'role' => 'admin', 
        ));

        
        User::create(array(
            'id' => 2,
            'name' => 'Agrc',
            'email' => 'rivo@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ai.jpg',
            'role' => 'agrc', 
        ));

        User::create(array(
            'id' => 3,
            'name' => 'Pena',
            'email' => 'pena@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ai.jpg',
            'role' => 'pena', 
        ));

        User::create(array(
            'id' => 4,
            'name' => 'Himpunan',
            'email' => 'hmp@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ai.jpg',
            'role' => 'himpunan', 
        ));

        User::create(array(
            'id' => 5,
            'name' => 'Poma',
            'email' => 'poma@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ai.jpg',
            'role' => 'poma', 
        ));

        User::create(array(
            'id' => 6,
            'name' => 'Pmk',
            'email' => 'pmk@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ai.jpg',
            'role' => 'pmk', 
        ));

        User::create(array(
            'id' => 7,
            'name' => 'Ldk',
            'email' => 'ldk@gmail.com',
            'password' => Hash::make('123456'),
            'profile_picture' => 'ai.jpg',
            'role' => 'ldk', 
        ));
    }
}
