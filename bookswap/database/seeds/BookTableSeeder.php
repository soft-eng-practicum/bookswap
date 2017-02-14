<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();

		DB::table('books')->insert([
			'title' => 'Android Bootcamp for Developers',
			'author' => 'Corinne Hoisington',
			'edition' => '2nd',
			'ISBN' => '978-1285856834',
			'publisher' => 'Course Technology, Inc.'
		]);
		DB::table('books')->insert([
			'title' => 'PHP and MySQL Web Development',
			'author' => 'Luke Welling',
			'edition' => '4th',
			'ISBN' => '978-0672329166',
			'publisher' => 'Developers Library'
		]);
    }
}
