<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('posts')->insert([
            'user_id' => 'ユーザー名',
            'body' => '内容',
            'photo' => '写真',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
       ]);
    }
}
