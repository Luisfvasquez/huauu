<?php

namespace Database\Seeders;

use App\Models\Buy;
use App\Models\Product;
use App\Models\Purchase_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(2)->create()->each(function(Product $product){
            Buy::factory(2)->create();
            Purchase_detail::factory(2)->create([
                'product_id' => $product->id,
            ]);
        });
    }
}
