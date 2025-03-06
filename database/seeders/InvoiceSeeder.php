<?php

namespace Database\Seeders;

use App\Models\Facture_payment_method;
use App\Models\Invoice;
use App\Models\Invoice_detail;
use App\Models\Payment_method;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::factory(2)->create([])->each(function ($invoice) {
            Invoice_detail::create([
                'invoice_id' => $invoice->id,
                'product_id' => Product::all()->random()->id,
                'quantity_product' => random_int(1, 10),
                'unit_price' => fake()->randomFloat(2, 1, 100),
            ]);

            Facture_payment_method::create([
                'invoice_id' => $invoice->id,
                'payment_method_id' => Payment_method::all()->random()->id,
                'total_amount' => fake()->randomNumber(3),
            ]);

        });
    }
}
