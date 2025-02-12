<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'cedula' => '29833955',
            'name' => 'John Doe',
            'phone_number' => '0414018145',
            'email' => 'example32@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2',
        ]);

        User::factory(10)->create();
    }
}
