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
            'user_id' => 3, //usersテーブルで登録したidをしまう
            'body' => 'これは投稿内容です',  
            'image_url' => 'https://th.bing.com/th/id/R.538e61cfe382a7badab4552e9c8c9326?rik=hQpjCw9oBjY9Ww&riu=http%3a%2f%2ffarm7.static.flickr.com%2f6063%2f6138724037_fc1a30102e_o.jpg&ehk=yHxk22PYdpqKf5tMuYapcvkhraoErMjAjpN4u818IZY%3d&risl=&pid=ImgRaw&r=0',  //urlをしまう
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
       ]);
    }
}
