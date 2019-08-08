<?php

use Illuminate\Database\Seeder;
use Laraspace\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'jayson.suyat@lending.co',
            'name' => 'Jayson Suyat',
            'role' => 'admin',
            'password' => bcrypt('admin@123')
        ]);

        User::create([
            'email' => 'renan.acuin@lending.co',
            'name' => 'Renan Acuin',
            'role' => 'admin',
            'password' => bcrypt('admin@123')
        ]);

        User::create([
            'email' => 'user@lending.co',
            'name' => 'User 01',
            'role' => 'user',
            'password' => bcrypt('user@123')
        ]);
    }
}
