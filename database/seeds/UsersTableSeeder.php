<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => "12345678",
            'role'=>"admin",
            'status'=>"active"
        ]);
    }
}
