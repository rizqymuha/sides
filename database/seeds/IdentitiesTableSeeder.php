<?php

use Illuminate\Database\Seeder;

class IdentitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Identity::class, 10)->create();
    }
}
