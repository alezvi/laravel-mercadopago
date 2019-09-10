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
        \DB::table('customers')->truncate();
        \DB::table('items')->truncate();

        // $this->call(UsersTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(ItemsTableSeeder::class);
    }
}
