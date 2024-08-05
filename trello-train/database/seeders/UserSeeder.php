<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Super',
            'name' => 'AdminSuper',
            'email' => 'superadmin@khgc.com',
            'password' => Hash::make('Abcd@1234'),
            'role' => 'admin',
        ]);
    }
}
