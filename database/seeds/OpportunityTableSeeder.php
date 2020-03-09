<?php

use App\Opportunity;
use Illuminate\Database\Seeder;

class OpportunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opportunity::create([
            'name' => 'Mettre en place un gouvernement mondial',
            'is_disabled' => false,
            'description' => 'Qui sait comment faire, pas vrai ?',
            'budget' => 'Illimité',
            'stage' => '3',
            'is_won' => false,
            'customer_id' => '2'
        ]
        );
    }
}
