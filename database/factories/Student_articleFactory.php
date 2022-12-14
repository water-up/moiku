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
     
    private static int $sequence = 1;
    
    public function definition()
    {
        return [
            'student_id' => $this->faker->numberBetween($min = 1, $max = 30),
            'teacher_id' => null,
            'secondary_category_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'prefecture_id' => $this->faker->numberBetween($min = 1, $max = 47),
            'title' => "リクエスト".self::$sequence++."(サンプル)",
            'place' => $this->faker->city,
            'desered_fee' => '○○○○円くらい',
            'desered_date' => '○○月の平日',
            'body' => "こちらは自動生成されたサンプルリクエストです。教え隊はこのリクエストに対して「立候補する」ことができます。
            立候補後に学び隊から選ばれマッチングすると、授業についての募集記事が投稿できます。その場合、リクエストをした学び隊は参加者リストに自動で追加されます。",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}
