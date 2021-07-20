<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'name' => 'ichigo',
                'description' => '美味しいですよ',
                'image' => '../images/ichigo.jpg',
                'price' => '200'
            ],
            [
                'name' => 'macalon',
                'description' => '旨い',
                'image' => '../images/macalon.jpg',
                'price' => '300'
            ],
            [
                'name' => 'cookie',
                'description' => 'イチオシ',
                'image' => '../images/cookie.jpg',
                'price' => '150'
            ],
            [
                'name' => 'soda',
                'description' => 'おすすめ',
                'image' => '../images/soda.jpg',
                'price' => '120'
            ],
        ]);
    }
}
