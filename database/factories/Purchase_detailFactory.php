<?php

namespace Database\Factories;

use App\Models\Buy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase_detail>
 */
class Purchase_detailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'buy_id' => Buy::all()->random()->id,
            'quantity_buy' => random_int(1, 10),
            'price_buy' => random_int(1000, 10000),            
        ];
    }
}
