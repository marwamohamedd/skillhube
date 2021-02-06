<?php

namespace Database\Factories;

use App\Models\questions;
use Illuminate\Database\Eloquent\Factories\Factory;

class questionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = questions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title' => $this->faker->sentence(),

            'option_1' =>$this->faker->sentence(5, true),
            'option_2' =>$this->faker->sentence(5, true),
            'option_3' =>$this->faker->sentence(5, true),
            'option_4' =>$this->faker->sentence(5, true),
            'right_answer' =>$this->faker->numberBetween(1, 4),


        ];
    }
}
