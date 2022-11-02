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
                    'name' => 'スポーツ',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '芸術',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '勉強',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'その他',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
