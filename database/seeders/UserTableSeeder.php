<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@oesl.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active',
            ],
             //Agent
             [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@oesl.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
                'status' => 'active',
             ],
              //User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@oesl.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active',
            ]
            
            ]);
    }
}
