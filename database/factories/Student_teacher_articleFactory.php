<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student_teacher_article;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_teacher_article>
 */
class Student_teacher_articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween($min = 1, $max = 30),
            'teacher_article_id' => $this->faker->numberBetween($min = 1, $max = 30),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}
