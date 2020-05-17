<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            
            'brand_id' => 1,
            'sku' => '152432',
            'name' => 'Oil Shampoo',
            'description' => 'Shampoo with oil for shiny hair',
            'quantity' => 5,
            'weight' =>  0.5,
            'price' => 2.8,
            'sale_price' => 2.3,
            'status' => 1,
            'featured' => 1,
        ]);
        Product::create([
            
            'brand_id' => 2,
            'sku' => '13242',
            'name' => 'Anti hair loss Shampoo',
            'description' => 'Shampoo to stop loosing hair',
            'quantity' =>5,
            'weight' =>  0.5,
            'price' =>2.4,
            'sale_price' =>2.1,
            'status' =>1,
            'featured' =>1,
        ]);
        Product::create([
            
            'brand_id' => 1,
            'sku' => '16542',
            'name' => 'Night cream',
            'description' => 'For smooth skin',
            'quantity' =>10,
            'weight' =>  0.2,
            'price' =>5.8,
            'sale_price' =>4.5,
            'status' =>1,
            'featured' =>1,
        ]);
        Product::create([
            
            'brand_id' => 1,
            'sku' => '16542',
            'name' => 'Day cream',
            'description' => 'SPF 35',
            'quantity' =>10,
            'weight' =>  0.2,
            'price' =>4.6,
            'sale_price' =>4.2,
            'status' =>1,
            'featured' =>1,
        ]);
    }
}

