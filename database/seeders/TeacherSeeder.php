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
                    'name' => 'teacher1',
                    'email' => 'teacher1@example.com',
                    'password' => \Hash::make('hogehoge'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'teacher2',
                    'email' => 'teacher2@example.com',
                    'password' => \Hash::make('hogehoge'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
        
        Teacher::factory(30)->create();
    }
}
