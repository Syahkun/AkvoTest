<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'name' => 'Drugstore',
                'owner' => 'Mr. John Doe',
                'description' => 'This shop sell some medicines',
            ],
            [
                'name' => 'GreenStore',
                'owner' => 'Mrs. Maria',
                'description' => 'This shop sell some flowers',
            ]
        ]);
    }
}
