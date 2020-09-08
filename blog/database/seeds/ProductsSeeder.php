<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Flu medicine 1 tablet',
                'price' => 'IDR. 35.000',
                'shop_id'=> 1,
            ],
            [
                'name' => 'Rose flower 500gr',
                'price' => 'IDR. 22.000',
                'shop_id'=> 2,
            ],
            [
                'name' => 'Headache medicine 1 tablet',
                'price' => 'IDR. 75.000',
                'shop_id'=> 1,
            ],
            [
                'name' => 'Jasmine flower 500gr',
                'price' => 'IDR. 29.000',
                'shop_id'=> 2,
            ],
        ]);
    }
}
