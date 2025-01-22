<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
            'name' => '北海道',
            'name' => '東北',
            'name' => '関東',
            'name' => '中部',
            'name' => '北陸',
            'name' => '近畿',
            'name' => '中国',
            'name' => '四国',
            'name' => '九州・沖縄',
            'name' => 'オンライン',
            'name' => '海外・その他',
        ]);
    }
}
