<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img' => $this->faker->name(),
            'name' => $this->faker->name(),
            'desc' =>'1',
            'unit' => 'kg',
            'price' => $this->faker->randomDigit(),
            'quantity' => $this->faker->randomDigit(),
            'import_price' => $this->faker->randomDigit(),
            'category_id' => 1,
        ];
    }
}
