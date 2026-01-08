<?php

namespace Database\Factories;

use App\Models\ItemCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InventoryItem>
 */
class InventoryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => $this->faker->unique()->ean13(),
            'device_equipment_name' => $this->faker->word(),
            'department' => $this->faker->word(),
            'reference_number' => $this->faker->unique()->ean8(),
            'monetary_value' => $this->faker->randomFloat(2, 10, 1000),
            'item_category_id' => ItemCategory::all()->random()->id,
        ];
    }
}
