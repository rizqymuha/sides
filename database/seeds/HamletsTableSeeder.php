<?php

use Illuminate\Database\Seeder;

class HamletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hamlet::class, 10)->create();
    }
}
