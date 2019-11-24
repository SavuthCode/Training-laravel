<?php

use Illuminate\Database\Seeder;

class Properties_statusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('property_statuses')->insert([
            'name' => 'Publiced',
        ]);

        DB::table('property_statuses')->insert([
            'name' => 'Pandding',
        ]);
    }
}
