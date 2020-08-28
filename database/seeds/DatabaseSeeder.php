<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('products')->insert([
            'name' => 'Iphone 8',
            'price' => '22000',
        ]);

        DB::table('products')->insert([
            'name' => 'Iphone 11',
            'price' => '31000',
        ]);

        DB::table('products')->insert([
            'name' => 'Iphone 11 pro',
            'price' => '39000',
        ]);
    }
}
