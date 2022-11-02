<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Teacher_reactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teacher_reactions')->insert(
            [
                [
                    'teacher_id' => '1',
                    'student_article_id' => '1',
                    
                    'min_number' => '2',
                    'max_number' => '5',
                    'desered_time' => '3時間くらい',
                    'desered_date' => '12/3,12/4,12/11のお昼頃から',
                    'body' => '基礎って大事ですよね！褒めて伸ばします',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                
                //ここに追加できます
            ]
        );
    }
}
