<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'product_code' => fake()->unique()->regexify('[0-9]{15}'),
            'product_name' => fake()->words(3, true), // 3 คำสั้น
            'description' => fake()->paragraph, // 1 ย่อหน้า
            'price' => fake()->randomFloat(2, 10, 1000),
            'quantity' => fake()->numberBetween(1, 100),

            //รหัสสินค้า, ชื่อสินค้า, รายละเอียด, ราคา, จำนวนคงเหลือ
        ];
    }
}
