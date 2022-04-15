<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin ',
            'email'=>'admin@gmail.com',
            'username'=>'test3333',
            'password'=>'12345678',
        ]);

        User::create([
            'name'=>'Admin Zahid',
            'email'=>'zahid01@gmail.com',
            'username'=>'test025',
            'password'=>'12345678',
        ]);
    }
}
