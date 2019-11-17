<?php

use App\Company;
use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesWithCustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        
        factory(Company::class, 10)->create()->each(function ($company) {
            // $company->customers()->save(factory(Customer::class)->make());
            $company->customers()->createMany(factory(Customer::class, 10)->make()->toArray());
        });
    }
}
