<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Datetime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 3,
            'name' => '飛鳥陽',
            'image' => '/image/icon.png',
            'email' => 'test3@gmail.com',
            'password' => Hash::make('password'), //ログイン時のパスワードは''内
            'age_id' => 1,
            'sex' => 1,
            'type' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
