<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::updateOrCreate( [
            'name' => 'admin',
            'guard_name' => 'web',
        ],
            
            ['name' => 'admin','guard_name' => 'web',]
        );

        Role::updateOrCreate( [
            'name' => 'atasan',
            'guard_name' => 'web',
        ],
            
            ['name' => 'atasan','guard_name' => 'web',]
        );

        Role::updateOrCreate( [
            'name' => 'user',
            'guard_name' => 'web',
        ],
            
            ['name' => 'user','guard_name' => 'web',]
        );
    }
}
