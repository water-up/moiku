<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher_article;
use DateTime;

class Teacher_articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_articles')->insert(
            [
                [
                    'teacher_id' => '1',
                    'student_article_id' => '1',
                    'prefecture_id' => '4',
                    'title' => 'ボルダリングの基礎教えます',
                    'place' => '横浜',
                    'fee' => '2000',
                    'date' => '2022-12-03 12:00:00',
                    'min_number' => '2',
                    'max_number' => '5',
                    'time' => '3:30',
                    'body' => '初心者対象！\n基礎を重点的に教えます。',
                    'status' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                
                //ここに追加できます
            ]
        );
        
        Teacher_article::factory(30)->create();
    }
}
