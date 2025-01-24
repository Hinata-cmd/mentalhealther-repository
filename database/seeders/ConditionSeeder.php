<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('conditions')->insert([
                'id' => 1,
                'name' => '診断・カウンセリング受付中',
            ]);

            DB::table('conditions')->insert([
                'id' => 2,
                'name' => 'DM相談OK',
            ]);
            
            DB::table('conditions')->insert([
                'id' => 3,
                'name' => '顔出しなしOK',
            ]);
            
            DB::table('conditions')->insert([
                'id' => 4,
                'name' => '傾聴中心',
            ]);

            DB::table('conditions')->insert([
                'id' => 5,
                'name' => 'アドバイス中心',
            ]);

            DB::table('conditions')->insert([
                'id' => 6,
                'name' => 'オンライン対応可',
            ]);
            
            DB::table('conditions')->insert([
                'id' => 7,
                'name' => '学生向け相談',
            ]);

            DB::table('conditions')->insert([
                'id' => 8,
                'name' => '来院予約可',
            ]);
            
            DB::table('conditions')->insert([
                'id' => 9,
                'name' => '発信専用アカウント',
            ]);
    }
}
