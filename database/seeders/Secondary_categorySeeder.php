<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Secondary_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secondary_categories')->insert(
            [
                [
                    'name' => '野球',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ボルダリング',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '体操',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '茶道',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ピアノ',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ギター',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '国語',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '数学',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '英語',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '運転',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '料理',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '就活',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
