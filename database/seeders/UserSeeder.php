<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Desi Riska',
                'email' => 'desi.blackmamba@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'SUPER_ADMIN'
            ],
            [
                'name' => 'Jodi Akbar',
                'email' => 'jodi.akbar@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'SUPER_ADMIN'
            ],
            [
                'name' => 'Putri Ayu',
                'email' => 'putri.ayu@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'SUPER_ADMIN'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
