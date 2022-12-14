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
                    'teacher_id' => '1',
                    'secondary_category_id' => '2',
                    'prefecture_id' => '4',
                    'title' => 'ボルダリングの基礎を教えてください',
                    'place' => '横浜ポルダリングジム',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '4月の中旬くらい',
                    'body' => '初めまして！１ヶ月ほど前にボルダリングを始めたのですが、なかなか上達しません。基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '2',
                    'teacher_id' => '2',
                    'secondary_category_id' => '7',
                    'prefecture_id' => '9',
                    'title' => 'ピアノ難しそうだけどやってみたい',
                    'place' => '宇都宮スタジオ',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '3月の土日',
                    'body' => '初めまして！ピアノを始めたいんですが、勇気が出ません泣、丁寧に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '3',
                    'teacher_id' => '3',
                    'secondary_category_id' => '10',
                    'prefecture_id' => '13',
                    'title' => 'いけばな上達したい',
                    'place' => '練馬',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '6月の平日',
                    'body' => '初めまして！１ヶ月ほど前にいけばなを始めたのですが、なかなか上達しません。基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '4',
                    'teacher_id' => '4',
                    'secondary_category_id' => '11',
                    'prefecture_id' => '13',
                    'title' => '絵画ってどこ見ればいいの？',
                    'place' => '上野美術館',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '5月のくらい',
                    'body' => '絵画ってどう鑑賞したらいいのかいまいち...基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '5',
                    'teacher_id' => '5',
                    'secondary_category_id' => '13',
                    'prefecture_id' => '27',
                    'title' => 'タイピング早くならない...',
                    'place' => '大阪市',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '4月の土日',
                    'body' => 'タイピングの基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '6',
                    'teacher_id' => '6',
                    'secondary_category_id' => '14',
                    'prefecture_id' => '25',
                    'title' => 'Java教えて',
                    'place' => '大津市内',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '3月の土日',
                    'body' => 'プログラミングやりたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '7',
                    'teacher_id' => '7',
                    'secondary_category_id' => '15',
                    'prefecture_id' => '28',
                    'title' => 'Excelの基礎教えて！',
                    'place' => '神戸市内で！',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '6月頃',
                    'body' => '重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '8',
                    'teacher_id' => '8',
                    'secondary_category_id' => '18',
                    'prefecture_id' => '14',
                    'title' => 'テストで確率できなかった...',
                    'place' => '横浜市内',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '早急にお願いします',
                    'body' => 'テスト終わりました。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '9',
                    'teacher_id' => '9',
                    'secondary_category_id' => '23',
                    'prefecture_id' => '29',
                    'title' => '卵料理って難しくないですか？',
                    'place' => '奈良',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '平日ならいつでもOK',
                    'body' => '基礎を教えてください。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '10',
                    'teacher_id' => '10',
                    'secondary_category_id' => '24',
                    'prefecture_id' => '20',
                    'title' => '面接緊張しちゃいます',
                    'place' => '長野駅から車で30分以内',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '3月の土日',
                    'body' => '基礎を教えてください。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                
                
                
                
                
                
                
                
                [
                    'student_id' => '2',
                    'teacher_id' => null,
                    'secondary_category_id' => '2',
                    'prefecture_id' => '4',
                    'title' => 'ボルダリングの基礎を教えてください',
                    'place' => '横浜ポルダリングジム',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '4月の中旬くらい',
                    'body' => '初めまして！１ヶ月ほど前にボルダリングを始めたのですが、なかなか上達しません。基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '3',
                    'teacher_id' => null,
                    'secondary_category_id' => '7',
                    'prefecture_id' => '9',
                    'title' => 'ピアノ難しそうだけどやってみたい',
                    'place' => '宇都宮スタジオ',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '3月の土日',
                    'body' => '初めまして！ピアノを始めたいんですが、勇気が出ません泣、丁寧に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '4',
                    'teacher_id' => null,
                    'secondary_category_id' => '10',
                    'prefecture_id' => '13',
                    'title' => 'いけばな上達したい',
                    'place' => '練馬',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '6月の平日',
                    'body' => '初めまして！１ヶ月ほど前にいけばなを始めたのですが、なかなか上達しません。基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '5',
                    'teacher_id' => null,
                    'secondary_category_id' => '11',
                    'prefecture_id' => '13',
                    'title' => '絵画ってどこ見ればいいの？',
                    'place' => '上野美術館',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '5月のくらい',
                    'body' => '絵画ってどう鑑賞したらいいのかいまいち...基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '6',
                    'teacher_id' => null,
                    'secondary_category_id' => '13',
                    'prefecture_id' => '27',
                    'title' => 'タイピング早くならない...',
                    'place' => '大阪市',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '4月の土日',
                    'body' => 'タイピングの基礎を重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '7',
                    'teacher_id' => null,
                    'secondary_category_id' => '14',
                    'prefecture_id' => '25',
                    'title' => 'Java教えて',
                    'place' => '大津市内',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '3月の土日',
                    'body' => 'プログラミングやりたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '8',
                    'teacher_id' => null,
                    'secondary_category_id' => '15',
                    'prefecture_id' => '28',
                    'title' => 'Excelの基礎教えて！',
                    'place' => '神戸市内で！',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '6月頃',
                    'body' => '重点的に教えて頂きたいです。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '9',
                    'teacher_id' => null,
                    'secondary_category_id' => '18',
                    'prefecture_id' => '14',
                    'title' => 'テストで確率できなかった...',
                    'place' => '横浜市内',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '早急にお願いします',
                    'body' => 'テスト終わりました。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '10',
                    'teacher_id' => null,
                    'secondary_category_id' => '23',
                    'prefecture_id' => '29',
                    'title' => '卵料理って難しくないですか？',
                    'place' => '奈良',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '平日ならいつでもOK',
                    'body' => '基礎を教えてください。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '1',
                    'teacher_id' => null,
                    'secondary_category_id' => '24',
                    'prefecture_id' => '20',
                    'title' => '面接緊張しちゃいます',
                    'place' => '長野駅から車で30分以内',
                    'desered_fee' => '2000円くらい',
                    'desered_date' => '3月の土日',
                    'body' => '基礎を教えてください。こちらはサンプル投稿です',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                //ここに追加できます
            ]
        );
        
        Student_article::factory(30)->create();
    }
}
