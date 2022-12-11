<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Primary_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert(
            [
                [
                    //id=1
                    'name' => 'スポーツ',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=2
                    'name' => '音楽',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=3
                    'name' => '芸術',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=4
                    'name' => 'パソコン',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=5
                    'name' => '勉強',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=6
                    'name' => '生活',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=7
                    'name' => 'その他',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
