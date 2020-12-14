<?php

use Illuminate\Database\Seeder;

class NeighboursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Neighbour::class, 10)->create();
    }
}
