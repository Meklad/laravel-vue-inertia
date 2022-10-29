<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Ahmed Meklad',
            'email' => 'a.meklad@yoda.market',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_active' => true,
            'remember_token' => 'KstuEfuFl2',
            'stripe_token' => null,
            'role' => "SuperAdmin",
            'avatar' => 'https://www.gravatar.com/avatar/' . md5(strtolower(trim('a.meklad@yoda.market'))) . '?d=identicon'
        ]);

        \App\Models\User::factory(99)->create();
    }
}
