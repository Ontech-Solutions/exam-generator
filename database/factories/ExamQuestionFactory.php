<?php

namespace Database\Factories;

use App\Models\ExamQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExamQuestion>
 */
class ExamQuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ExamQuestion::class;

    public function definition(): array
    {
        return [
            "program_id" => $this->faker->randomElement([2, 4]),
            "competency_id" => $this->faker->randomElement([1, 5]),
            "year" => $this->faker->randomElement(["2004","2005","2009","2010","2019"]),
            "month" => $this->faker->randomElement(["January", "February","March", "December"]),
            "image" => $this->faker->randomElement(["null", "/question_images/x_ray.png"]),
            "question" => $this->faker->sentence,
            "option_a" => $this->faker->sentence,
            "option_b" => $this->faker->sentence,
            "option_c" => $this->faker->sentence,
            "option_d" => $this->faker->sentence,
            "option_e" => $this->faker->sentence,
            "correct_answer" => $this->faker->randomElement(["A", "B","C", "D","E"]),
            "user_id" => 1
        ];
    }
}
