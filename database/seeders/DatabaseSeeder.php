<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Payment_method;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);
        
        Category::factory(3)->create();
        Payment_method::factory(3)->create();
        Supplier::factory(3)->create();
        
        $this->call([
            ProductSeeder::class,
        ]);

        $this->call([
            InvoiceSeeder::class,
        ]);
    }
}
