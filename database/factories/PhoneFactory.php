<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
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
            'phone'=>$this->faker->numberBetween(50 , 200),
            'image' =>$this->faker->imageUrl(),
            'description'  =>$this->faker->text(50),
        ];
    }
}
