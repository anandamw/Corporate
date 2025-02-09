<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Sekretaris User',
                'email' => 'sekretaris@gmail.com',
                'password' => Hash::make('sekretaris'),
                'role' => 'sekretaris',
            ],
            [
                'name' => 'PKKMD User',
                'email' => 'pkkmd@gmail.com',
                'password' => Hash::make('pkkmd'),
                'role' => 'pkkmd',
            ],
            [
                'name' => 'Pemdes User',
                'email' => 'pemdes@gmail.com',
                'password' => Hash::make('pemdes'),
                'role' => 'pemdes',
            ],
            [
                'name' => 'Peukd User',
                'email' => 'peukd@gmail.com',
                'password' => Hash::make('peukd'),
                'role' => 'peukd',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
