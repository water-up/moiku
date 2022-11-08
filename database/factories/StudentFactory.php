<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;
    
    private static $num = 100; 
     
    public function definition()
    {
        return [
            'name' => sprintf('student%d', self::$num),
            'email' => sprintf('student%d@example.com', self::$num++),
            'password' => '$2y$10$BdauA7RlkwmXFJEtk9iQ8eub.LPXvzBbn20c0Di0Ui7S74p9VrhZu',
            'introducation' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
    }
}
