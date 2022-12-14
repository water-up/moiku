<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'user1',
                    'email' => 'user1@example.com',
                    'password' => \Hash::make('hogehoge'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                [
                    'name' => 'user2',
                    'email' => 'user2@example.com',
                    'password' => \Hash::make('hogehoge'),
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                
                //ここに追加できます
            ]
        );
    }
}
