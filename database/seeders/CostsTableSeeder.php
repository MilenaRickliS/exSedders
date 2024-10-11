<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cost;

class CostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = \App\Models\Product::find(1); // Assumindo que o primeiro produto é o Arroz
        Cost::create(['product_id' => $product->id, 'cost_value' => 100.00, 'date' => now()]);
        Cost::create(['product_id' => $product->id, 'cost_value' => 120.00, 'date' => now()->subDays(30)]);
    }
}
