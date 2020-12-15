<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function($user) {
            $user->assignRole('neighbour');
        });

        factory(App\User::class, 5)->create()->each(function($user) {
            $user->assignRole('hamlet');
        });

        factory(App\User::class, 5)->create()->each(function($user) {
            $user->assignRole('user');
        });
    }
}
