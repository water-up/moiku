<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Teacher;
use DateTime;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(
            [
                [
                    'name' => 'test_teacher',
                    'email' => 'teacher@test.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のテストアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '教え太郎',
                    'email' => 'teacher1@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'とある先生',
                    'email' => 'teacher2@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'コーチ仙人',
                    'email' => 'teacher3@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'シドー君',
                    'email' => 'teacher4@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '教壇の上にも3年マン',
                    'email' => 'teacher5@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '数学の鬼！！',
                    'email' => 'teacher6@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '龍桜先生',
                    'email' => 'teacher7@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '家庭教師の寅井',
                    'email' => 'teacher8@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'さとしんハイスクール',
                    'email' => 'teacher9@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'さトピックス',
                    'email' => 'teacher10@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '栄子ゼミなーる',
                    'email' => 'teacher11@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '理系つよつよお兄さん',
                    'email' => 'teacher12@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '文系つよつよお姉さん',
                    'email' => 'teacher13@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'とある大学生',
                    'email' => 'teacher14@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ころんせんせー',
                    'email' => 'teacher15@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '金髪先生',
                    'email' => 'teacher16@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '久門',
                    'email' => 'teacher17@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ティーチャーさん',
                    'email' => 'teacher18@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '大学院生のはしくれ',
                    'email' => 'teacher19@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'スポーツつよつよおじさん',
                    'email' => 'teacher20@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは先生側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                //ここに追加できます
                
            ]
        );
    }
}
