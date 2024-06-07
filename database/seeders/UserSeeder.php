<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\User::factory(9)->create();

       $user = User::factory()->create([
            'name' => 'Admin Sandi',
            'email' => 'raisandika777@gmail.com',
            'password' => Hash::make('sandipwkodok'),
            'phone' => '081234567890',
            'roles' => 'ADMIN',
        ]);
    }
}
