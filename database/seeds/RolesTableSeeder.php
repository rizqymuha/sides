<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'hamlet',
        ]);

        Role::create([
            'name' => 'neighbour',
        ]);
        
        Role::create([
            'name' => 'user',
        ]);
    }
}
