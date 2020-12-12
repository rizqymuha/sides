<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Sides',
            'email' => 'admin@sides.test',
            'password' => bcrypt('admin'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');

        return $user;
    }
}
