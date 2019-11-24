<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Phone',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Speaker',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Temblat',
        ]);
    }
}
