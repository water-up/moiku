<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert(
            [
                [
                    'student_id' => '1',
                    'teacher_article_id' => '1',
                    'score' => '4.82',
                    'body' => '丁寧に教えていただいてありがとうございました！',
                    'attendance' => true,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '1',
                    'teacher_article_id' => '1',
                    'score' => '3.5',
                    'body' => '楽しかったです',
                    'attendance' => null,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
