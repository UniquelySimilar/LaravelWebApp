<?php

use Illuminate\Database\Seeder;
use App\Customer;
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
        DB::table('customers')->truncate();

        $numRows = 100;

        for ($i = 1; $i <= $numRows; $i++) {
            $state = 'Colorado';
            $zipCode = '80027';
            $phone = '3031111111';
            
            if ($i % 2 == 0) {
                $state = 'Texas';
                $zipCode = '75225';
                $phone = '2142222222';
            }
            else if ($i % 3 == 0) {
                $state = 'Georgia';
                $zipCode = '30601';
                $phone = '2033333333';
            }

            Customer::create([
                'name'          => 'name' . $i,
                'street'        => 'street',
                'city'          => 'city',
                'state'         => $state,
                'zipcode'       => $zipCode,
                'home_phone'    => $phone,
                'work_phone'    => $phone,
                'email'         => 'name' . $i . '@example.com'
            ]);
        }
    }
}
