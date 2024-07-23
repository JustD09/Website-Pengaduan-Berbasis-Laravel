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
       $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'jabatan'=> 'SuperAdmin',
            'password' => Hash::make('admin')
        ]);

        $admin->assignRole('admin');

        $atasan = User::create([
            'name' => 'Atasan',
            'email' => 'atasan@atasan.com',
            'jabatan'=> 'Atasan',
            'password' => Hash::make('atasan')
        ]);

        $atasan->assignRole('atasan');

        $user = User::create([
            'name' => 'Masyarakat',
            'email' => 'user@user.com',
            'jabatan'=> 'Masyarakat',
            'password' => Hash::make('user')
        ]);

        $user->assignRole('user');
    }
}
