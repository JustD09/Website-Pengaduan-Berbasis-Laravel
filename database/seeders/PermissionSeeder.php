<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pembuatan Role dan Akses untuk Admin dan User
        $admin = Role::updateOrCreate( [
            'name' => 'admin',
            'guard_name' => 'web',
        ],
            
            ['name' => 'admin','guard_name' => 'web',]
        );

        $atasan = Role::updateOrCreate( [
            'name' => 'atasan',
            'guard_name' => 'web',
        ],
            
            ['name' => 'atasan','guard_name' => 'web',]
        );

        $user = Role::updateOrCreate([
            'name' => 'user',
            'guard_name' => 'web',
        ],
            ['name' => 'user', 'guard_name' => 'web']
    );

        // Hak Akses Admin dan User 
        // $adminRole->givePermissionTo($adminPengaduanPermission);
        // $adminRole->givePermissionTo($adminPermission);
        // $userRole->givePermissionTo($userPermission);
        // $userRole->givePermissionTo($pengaduanPermission);

        // Pemberian Role pada Admin dan User
        $admin = User::find(1);
        $admin->assignRole('admin');
        $atasan = User::find(2);
        $atasan->assignRole('atasan');
        $user = User::find(3);
        $user->assignRole('user');
    }   
}
