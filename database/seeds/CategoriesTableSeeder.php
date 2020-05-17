<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'          =>  'Root',
            'description'   =>  '',
            'parent_id'     =>  null,
            'menu'          =>  0,
        ]);
        Category::create([
            'name'          =>  'Hair',
            'description'   =>  '',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Shampoo',
            'description'   =>  '',
            'parent_id'     =>  2,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Treatments',
            'description'   =>  '',
            'parent_id'     =>  2,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Face',
            'description'   =>  '',
            'parent_id'     =>  1,
            'menu'          =>  1,
        ]);

        Category::create([
            'name'          =>  'Mask',
            'description'   =>  '',
            'parent_id'     =>  3,
            'menu'          =>  1,
        ]);
        Category::create([
            'name'          =>  'Cream',
            'description'   =>  '',
            'parent_id'     =>  3,
            'menu'          =>  1,
        ]);
    }
}
