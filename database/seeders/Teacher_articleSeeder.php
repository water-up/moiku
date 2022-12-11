<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher_article;
use App\Models\Student;
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
                    'secondary_category_id' => '2',
                    'prefecture_id' => '14',
                    'title' => 'ボルダリングの基礎教えます',
                    'place' => '横浜ポルダリングジム',
                    'fee' => '2000',
                    'date' => '2023-4-10',
                    'start_time' => '14:30',
                    'finish_time' => '16:30',
                    'min_number' => '2',
                    'max_number' => '5',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '2',
                    'student_article_id' => '2',
                    'secondary_category_id' => '7',
                    'prefecture_id' => '9',
                    'title' => 'ピアノ初心者でも丁寧に教えます',
                    'place' => '宇都宮スタジオ',
                    'fee' => '2500',
                    'date' => '2023-3-15',
                    'start_time' => '12:30',
                    'finish_time' => '14:30',
                    'min_number' => '3',
                    'max_number' => '5',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '3',
                    'student_article_id' => '3',
                    'secondary_category_id' => '10',
                    'prefecture_id' => '13',
                    'title' => '１ランク上のいけばなを',
                    'place' => '練馬区公民館',
                    'fee' => '2000',
                    'date' => '2023-6-4',
                    'start_time' => '15:20',
                    'finish_time' => '17:30',
                    'min_number' => '4',
                    'max_number' => '8',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '4',
                    'student_article_id' => '4',
                    'secondary_category_id' => '11',
                    'prefecture_id' => '13',
                    'title' => '絵画を見るコツ教えます',
                    'place' => '上野美術館',
                    'fee' => '1000',
                    'date' => '2023-5-15',
                    'start_time' => '12:30',
                    'finish_time' => '16:30',
                    'min_number' => '6',
                    'max_number' => '8',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '5',
                    'student_article_id' => '5',
                    'secondary_category_id' => '13',
                    'prefecture_id' => '27',
                    'title' => 'タイピング極めませんか？',
                    'place' => '大阪市内自宅',
                    'fee' => '1000',
                    'date' => '2023-4-8',
                    'start_time' => '14:30',
                    'finish_time' => '15:30',
                    'min_number' => '4',
                    'max_number' => '5',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '6',
                    'student_article_id' => '6',
                    'secondary_category_id' => '14',
                    'prefecture_id' => '25',
                    'title' => 'Java教えます',
                    'place' => '大津公民館A教室',
                    'fee' => '2000',
                    'date' => '2023-3-22',
                    'start_time' => '13:30',
                    'finish_time' => '18:30',
                    'min_number' => '5',
                    'max_number' => '8',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '7',
                    'student_article_id' => '7',
                    'secondary_category_id' => '15',
                    'prefecture_id' => '28',
                    'title' => 'Excelの基礎教えます',
                    'place' => '神戸市図書館B会議室',
                    'fee' => '2500',
                    'date' => '2023-6-10',
                    'start_time' => '13:30',
                    'finish_time' => '16:00',
                    'min_number' => '3',
                    'max_number' => '6',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '8',
                    'student_article_id' => '8',
                    'secondary_category_id' => '18',
                    'prefecture_id' => '14',
                    'title' => '確率に特化して教えます',
                    'place' => '横浜大学貸出教室２０１',
                    'fee' => '1000',
                    'date' => '2023-4-3',
                    'start_time' => '12:30',
                    'finish_time' => '16:30',
                    'min_number' => '1',
                    'max_number' => '4',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '9',
                    'student_article_id' => '9',
                    'secondary_category_id' => '23',
                    'prefecture_id' => '29',
                    'title' => '正しいオムレツの作り方',
                    'place' => '奈良料理スタジオ',
                    'fee' => '2000',
                    'date' => '2023-2-11',
                    'start_time' => '13:30',
                    'finish_time' => '16:30',
                    'min_number' => '2',
                    'max_number' => '4',
                    'body' => '初心者対象！基礎を重点的に教えます。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'teacher_id' => '10',
                    'student_article_id' => '10',
                    'secondary_category_id' => '24',
                    'prefecture_id' => '20',
                    'title' => '面接のコツ教えます',
                    'place' => '長野地域センター',
                    'fee' => '1000',
                    'date' => '2022-1-20',
                    'start_time' => '10:30',
                    'finish_time' => '13:30',
                    'min_number' => '3',
                    'max_number' => '5',
                    'body' => 'こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
            ]
        );
    }
}
