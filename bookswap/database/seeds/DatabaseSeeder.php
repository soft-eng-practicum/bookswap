<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('BookTableSeeder');
        $this->command->info('Book table seeded.');
        $this->call('UsersTableSeeder');
        $this->command->info('User table seeded.');
        $this->call('ExchangeTableSeeder');
        $this->command->info('Exchange table seeded.');
    }
}
