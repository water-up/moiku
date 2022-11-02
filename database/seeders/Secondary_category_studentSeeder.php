<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Secondary_category_studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secondary_category_student')->insert(
            [
                [
                    'student_id' => '1',
                    'secondary_category_id' => '1',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '1',
                    'secondary_category_id' => '2',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '1',
                    'secondary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '2',
                    'secondary_category_id' => '3',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'student_id' => '2',
                    'secondary_category_id' => '5',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}