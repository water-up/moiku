<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student_article;
use DateTime;

class Student_articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_articles')->insert(
            [
                [
                    'student_id' => '1',
                    'teacher_id' => null,
                    'secondary_category_id' => '2',
                    'prefecture_id' => '4',
                    'title' => 'ボルダリングの基礎を教えてください',
                    'place' => '横浜',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '12月の土日',
                    'body' => '初めまして！\n１ヶ月ほど前にボルダリングを始めたのですが、なかなか上達しません。\n基礎を重点的に教えて頂きたいです。',
                    'status' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                
                //ここに追加できます
            ]
        );
        
        Student_article::factory(30)->create();
    }
}
