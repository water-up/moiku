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
    
    private static int $sequence = 1;
    
    public function definition()
    {
        return [
            'teacher_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'student_article_id' => null,
            'secondary_category_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'prefecture_id' => $this->faker->numberBetween($min = 1, $max = 47),
            'title' => "募集記事".self::$sequence++."(サンプル)",
            'place' => $this->faker->city,
            'fee' => $this->faker->randomNumber($nbDigits = 4),
            'date' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = '+1 years')->format('Y-m-d'),
            'start_time' => $this->faker->time($format = 'H:i', $max = '12:00'),
            'finish_time' => $this->faker->time($format = 'H:i', $min = '12:00'),
            'min_number' => $this->faker->numberBetween($min = 2, $max = 5),
            'max_number' => $this->faker->numberBetween($min = 6, $max = 10),
            'body' => "こちらは自動生成された学び隊募集記事です。学び隊はこの募集記事に対して「参加する」ことができます。
            募集記事の最低参加人数を満たすと授業が開催されます。教え隊は募集記事を、マイページから新規投稿することも可能ですし、学び隊のリクエストから投稿することも可能です（マッチングが必須）。",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        
        
    }
}