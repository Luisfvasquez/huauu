<?php

namespace Database\Seeders;

use App\Models\Buy;
use App\Models\Inventory;
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
        Product::factory(3)->create()->each(function(Product $product){
            Buy::factory(1)->create();
            Purchase_detail::factory(1)->create([
                'product_id' => $product->id
            ])
            ->each(function(Purchase_detail $puchase_detail){
                Inventory::factory(1)->create([
                    'product_id' => $puchase_detail->product_id,
                    'stock' => $puchase_detail->quantity_buy
                ]);
            });
        });
    }
}
