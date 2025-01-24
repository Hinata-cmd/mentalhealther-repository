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
                'id' => 1,
                'name' => '北海道',
            ]);

            DB::table('areas')->insert([
                'id' => 2,
                'name' => '東北',
            ]);

            DB::table('areas')->insert([
                'id' => 3,
                'name' => '関東',
            ]);

            DB::table('areas')->insert([
                'id' => 4,
                'name' => '中部',
            ]);

            DB::table('areas')->insert([
                'id' => 5,
                'name' => '北陸',
            ]);
            
            DB::table('areas')->insert([
                'id' => 6,
                'name' => '近畿',
            ]);

            DB::table('areas')->insert([
                'id' => 7,
                'name' => '中国',
            ]);

            DB::table('areas')->insert([
                'id' => 8,
                'name' => '四国',
            ]);
            
            DB::table('areas')->insert([
                'id' => 9,
                'name' => '九州・沖縄',
            ]);
            
            DB::table('areas')->insert([
                'id' => 10,
                'name' => 'オンライン',
            ]);
            
            DB::table('areas')->insert([
                'id' => 11,
                'name' => '海外・その他',
            ]);

    }
}
