<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert(
            [
                [
                    'name' => '北海道',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '宮城県',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '東京都',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '神奈川県',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '愛知県',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '大阪府',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '広島県',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '福岡県',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                
                //ここに追加できます
            ]
        );
    }
}
