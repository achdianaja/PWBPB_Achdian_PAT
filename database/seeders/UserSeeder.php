<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Gender;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'Admin',
            'role' => 'admin',
            'gender_id' => 1,
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
            'remember_token' => Str::random(60)
        ]);

        Gender::create([
            'gender' => 'Laki Laki'
        ]);

        Gender::create([
            'gender' => 'Perempuan'
        ]);
    }   
}
