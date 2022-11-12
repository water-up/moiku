<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher_article;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher_article>
 */
class Teacher_articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Teacher_article::class;
     
    public function definition()
    {
        return [
            'teacher_id' => $this->faker->numberBetween($min = 1, $max = 30),
            'student_article_id' => $this->faker->numberBetween($min = 1, $max = 30),
            'prefecture_id' => $this->faker->numberBetween($min = 1, $max = 47),
            'title' => $this->faker->realText($maxNbChars = 15, $indexSize = 5),
            'place' => $this->faker->city,
            'fee' => $this->faker->randomNumber($nbDigits = 4),
            'date' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '+1 years')->format('Y-m-d H:i'),
            'min_number' => $this->faker->numberBetween($min = 2, $max = 5),
            'max_number' => $this->faker->numberBetween($min = 6, $max = 10),
            'time' => '3:30',
            'body' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'status' => $this->faker->numberBetween($min = 1, $max = 3),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}