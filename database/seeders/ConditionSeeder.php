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
            'name' => '診断・カウンセリング受付中',
            'name' => 'DM相談OK',
            'name' => '顔出しなしOK',
            'name' => '傾聴中心',
            'name' => 'アドバイス中心',
            'name' => 'オンライン対応可',
            'name' => '学生向け相談',
            'name' => '来院予約可',
            'name' => '発信専用アカウント',
        ]);
    }
}
