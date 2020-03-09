<?php

use App\Owner;
use Illuminate\Database\Seeder;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'owner_name' => 'Alaric Baraou',
            'owner_email' => 'alaric@mkdmpartner.com',
            'can_own' => true
        ]);
        
        Owner::create([
            'owner_name' => 'Imad Moqaddem',
            'owner_email' => 'imad@mkdmpartner.com',
            'can_own' => true
        ]);
        Owner::create([
            'owner_name' => 'Pierre-Alain Thiout',
            'owner_email' => 'pa@mkdmpartner.com',
            'can_own' => true
        ]);
        Owner::create([
            'owner_name' => 'Auguste de Rotalier',
            'owner_email' => 'auguste@mkdmpartner.com',
            'can_own' => false
        ]);
    }
}
