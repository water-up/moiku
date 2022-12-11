<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use DateTime;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            [
                [
                    'name' => 'test_student',
                    'email' => 'student@test.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のテストアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '桜庭花道',
                    'email' => 'student1@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ぽよぽよ太',
                    'email' => 'student2@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '理系苦手くん',
                    'email' => 'student3@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '文系苦手くん',
                    'email' => 'student4@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '最果ての主婦',
                    'email' => 'student5@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '後木 新',
                    'email' => 'student6@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'くるくる君',
                    'email' => 'student7@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '空腹太郎',
                    'email' => 'student8@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'みたらし男子',
                    'email' => 'student9@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '向日葵ちゃん',
                    'email' => 'student10@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'かずねこ',
                    'email' => 'student11@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ぬまたろう',
                    'email' => 'student12@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'とある受験生',
                    'email' => 'student13@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '主婦さん',
                    'email' => 'student14@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'りんごくん',
                    'email' => 'student15@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '岩男',
                    'email' => 'student16@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ミスターみどり',
                    'email' => 'student17@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'サスケちゃん',
                    'email' => 'student18@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'コリコリ筋肉',
                    'email' => 'student19@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ぽっちー',
                    'email' => 'student20@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'スポーツ大好き少年',
                    'email' => 'student21@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '泳ぐチワワ',
                    'email' => 'student22@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '転生したマグロ',
                    'email' => 'student23@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'チャピー',
                    'email' => 'student24@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'GetOn中のダンジ',
                    'email' => 'student25@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '生徒聖夜',
                    'email' => 'student26@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'ふつーデント',
                    'email' => 'student27@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '綾タカくん',
                    'email' => 'student28@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'きっくん',
                    'email' => 'student29@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => '5等の後藤',
                    'email' => 'student30@example.com',
                    'password' => '2y10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
                    'introducation'=>'こちらは生徒側のサンプルアカウントです',
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
