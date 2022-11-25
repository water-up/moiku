<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student_article;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_article>
 */
class Student_articleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student_article::class;
     
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween($min = 1, $max = 30),
            'teacher_id' => null,
            'secondary_category_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'prefecture_id' => $this->faker->numberBetween($min = 1, $max = 47),
            'title' => $this->faker->realText($maxNbChars = 50, $indexSize = 5),
            'place' => $this->faker->city,
            'desered_fee' => '2000円くらい',
            'desered_date' => '12月の土日',
            'body' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}
