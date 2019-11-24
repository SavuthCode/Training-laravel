<?php

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
        DB::table('products')->insert([
            'name' => 'Sokvuth',
            'rent_price'=>'3.00',
            'list_price'=>'3.00',
            'sale_price'=>'3.00',
            'sold_price'=>'3.00',
            'profile'=>'3.00',
            'galleries'=>'3.00',
            'created_by'=>'Ven sokvuth',
            'updated_by'=>'sokvuth',
        ]);
        DB::table('products')->insert([
            'name' => 'Sokvuth',
            'rent_price'=>'3.00',
            'list_price'=>'3.00',
            'sale_price'=>'3.00',
            'sold_price'=>'3.00',
            'profile'=>'3.00',
            'galleries'=>'3.00',
            'created_by'=>'Ven sokvuth',
            'updated_by'=>'sokvuth',
        ]);

        DB::table('products')->insert([
            'name' => 'Sokvuth',
            'rent_price'=>'3.00',
            'list_price'=>'3.00',
            'sale_price'=>'3.00',
            'sold_price'=>'3.00',
            'profile'=>'3.00',
            'galleries'=>'3.00',
            'created_by'=>'Ven sokvuth',
            'updated_by'=>'sokvuth',
        ]);
    }
}
