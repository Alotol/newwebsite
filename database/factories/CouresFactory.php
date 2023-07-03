<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CouresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->faker->words(3, True),
            'price'=>$this->faker->numberBetween(50 , 200),
            'image' =>$this->faker->imageUrl(),
            'descrption'  =>$this->faker->text(50),
        ];
    }
}
