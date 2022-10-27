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
        DB::table('users')->insert([
            'name' => 'sample.user',
            'email' => 'sample@address',
            'email_verified_at' => null,
            'password' => 'sample@address',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
