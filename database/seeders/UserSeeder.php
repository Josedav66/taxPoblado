<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


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
            'name' => 'admin',

            'email' => 'adminPrueba@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401092',
            'remember_token' => Str::random(10),
        ])->assignRole('admin');
        User::create([
            'name' => 'jose',
            'email' => 'cajero@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401093',
            'remember_token' => Str::random(10),
        ])->assignRole('cajero');;

        User::create([
            'name' => 'santiago',
            'email' => 'bodega@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401094',
            'remember_token' => Str::random(10),
        ])->assignRole('bodega');; 
    }
}
