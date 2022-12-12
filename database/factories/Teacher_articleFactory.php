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
            'teacher_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'student_article_id' => null,
            'secondary_category_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'prefecture_id' => $this->faker->numberBetween($min = 1, $max = 47),
            'title' => "サンプル投稿",
            'place' => $this->faker->city,
            'fee' => $this->faker->randomNumber($nbDigits = 4),
            'date' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '+1 years')->format('Y-m-d'),
            'start_time' => $this->faker->time($format = 'H:i', $max = '12:00'),
            'finish_time' => $this->faker->time($format = 'H:i', $min = '12:00'),
            'min_number' => $this->faker->numberBetween($min = 2, $max = 5),
            'max_number' => $this->faker->numberBetween($min = 6, $max = 10),
            'body' => "こちらはサンプル投稿です",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}