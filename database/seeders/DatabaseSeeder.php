<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(Primary_categorySeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(PrefectureSeeder::class);
        $this->call(Secondary_categorySeeder::class);
        $this->call(Secondary_category_studentSeeder::class);
        $this->call(Secondary_category_teacherSeeder::class);
        $this->call(Student_articleSeeder::class);
        $this->call(Teacher_articleSeeder::class);
        $this->call(Student_article_goodSeeder::class);
        $this->call(Teacher_article_goodSeeder::class);
        $this->call(Teacher_reactionSeeder::class);
        $this->call(Student_teacher_articleSeeder::class);
        $this->call(ReviewSeeder::class);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
