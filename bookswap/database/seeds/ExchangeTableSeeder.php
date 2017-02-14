<?php

use Illuminate\Database\Seeder;

class ExchangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exchange')->delete();

		DB::table('exchange')->insert([
			'description' => 'Slightly used',
			'price' => '22.22',
			'user_id' => '1',
			'books_id' => '2'
		]);
    }
}
