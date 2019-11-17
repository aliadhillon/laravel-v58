<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();

        //This is for Mysql
        // DB::statement('ALTER TABLE `customers` AUTO_INCREMENT = 1');

        //This is for sqlite
        // DB::statement("DELETE FROM sqlite_sequence WHERE name = 'customers'");

        factory(Customer::class, 10)->create(['company_id' => 1]);
    }
}
