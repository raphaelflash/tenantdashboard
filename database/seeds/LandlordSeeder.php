<?php

use Illuminate\Database\Seeder;

class LandlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tenant::create([
            'name' => 'Amber',
            'domain' => 'vc3-amber.test',
            'database' => database_path('amber.sqlite'),
        ]);

        \App\Tenant::create([
            'name' => 'Bauerladen',
            'domain' => 'vc3-bauer',
            'database' => database_path('bauer.sqlite'),
        ]);

        \App\Tenant::create([
            'name' => 'Moonshiner',
            'domain' => 'vc3-moonshiner.test',
            'database' => database_path('moonshiner.sqlite'),
        ]);
    }
}
