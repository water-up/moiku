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
                    //id=1
                    'name' => '野球',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=2
                    'name' => 'ボルダリング',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=3
                    'name' => '体操',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=4
                    'name' => 'ヨガ',
                    'primary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=5
                    'name' => '歌',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=6
                    'name' => '太鼓',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=7
                    'name' => 'ピアノ',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=8
                    'name' => 'ギター',
                    'primary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=9
                    'name' => '茶道',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=10
                    'name' => 'いけばな',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=11
                    'name' => '絵画',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=12
                    'name' => '鑑賞',
                    'primary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=13
                    'name' => 'タイピング',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=14
                    'name' => 'プログラミング',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=15
                    'name' => 'Excel',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=16
                    'name' => 'PowerPoint',
                    'primary_category_id' => '4',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=17
                    'name' => '国語',
                    'primary_category_id' => '5',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=18
                    'name' => '数学',
                    'primary_category_id' => '5',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=19
                    'name' => '英語',
                    'primary_category_id' => '5',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=20
                    'name' => '理科',
                    'primary_category_id' => '5',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=21
                    'name' => '社会',
                    'primary_category_id' => '5',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=22
                    'name' => '運転',
                    'primary_category_id' => '6',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=23
                    'name' => '料理',
                    'primary_category_id' => '6',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=24
                    'name' => '就活',
                    'primary_category_id' => '7',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    //id=25
                    'name' => 'その他',
                    'primary_category_id' => '7',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
