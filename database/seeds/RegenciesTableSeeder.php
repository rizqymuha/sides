<?php

use Illuminate\Database\Seeder;

class RegenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Regency::class, 10)->create();
    }
}
