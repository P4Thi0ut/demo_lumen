<?php

use App\Interaction;
use Illuminate\Database\Seeder;

class InteractionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interaction::create([
            'commentary' => 'Echange téléphonique avec Wally',
            'owner_id' => '4',
            'customer_id' => '2',
            'opportunity_id' => '1'
        ]);
    }
}
