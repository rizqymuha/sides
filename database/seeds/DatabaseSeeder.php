<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HamletsTableSeeder::class);
        $this->call(NeighboursTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(RegenciesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(IdentitiesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
    }
}
