<?php

use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['50ml', '330ml', '500ml','150ml','750ml'];
        $actions = ['cleaning', 'strong hair', 'soft skin', 'hair loss','deep clean',];

        foreach ($sizes as $size)
        {
            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  $size,
                'price'             =>  null,
            ]);
        }

        foreach ($actions as $action)
        {
            AttributeValue::create([
                'attribute_id'      =>  2,
                'value'             =>  $action,
                'price'             =>  null,
            ]);
        }
    }
}
