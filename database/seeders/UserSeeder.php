<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder as role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vladimir Kozisck',
            'email' => 'vladimir.kozisck@gmail.com',
            'password' => bcrypt('qweasd123')
        ])->assignRole('Admin');

        User::factory(100)->create();
    }
}
