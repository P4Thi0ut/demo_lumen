<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'email' => 'auguste@mkdmparner.com',
            'name' => 'Auguste',
            'account_name' => 'Le compte à Auguste',
            'activity_sector' => 'Le Saal',
            'legal_identifier' => '105514562',
            'phone_number' => '+33758696325',
            'headquarters_adress' => '1 rue du Deux',
            'nb_employees' => '149 207',
            'billing_adress' => '2 rue du Trois'
        ]);
        Customer::create([
            'email' => 'wally@mkdmparner.com',
            'name' => 'Wally',
            'account_name' => 'Wallys Inc.',
            'activity_sector' => 'High sound',
            'legal_identifier' => '1',
            'phone_number' => '+33625252525',
            'headquarters_adress' => '393 rue de la rue',
            'nb_employees' => '149',
            'billing_adress' => '145 rue de la Facturation '
        ]);
    }
}
