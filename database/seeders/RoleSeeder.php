<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $permissions = ['create', 'read', 'update', 'delete'];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $roles = ['Admin', 'User'];

        foreach ($roles as $roleName) {
            $role = Role::create(['name' => $roleName]);

            if ($roleName === 'Admin') {
                $role->givePermissionTo(Permission::all());
            } 
            else {
                $role->givePermissionTo(['read']);
            }
        }
    }
}
