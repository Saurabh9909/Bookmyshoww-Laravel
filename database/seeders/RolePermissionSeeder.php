<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create Roles
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'User']);

        // Create Permissions
        $permissions = [
            'view dashboard',
            'manage users',
            'manage movies',
            'manage multiplexes',
            'manage ticket prices',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign Permissions to Roles
        $superAdmin->givePermissionTo(Permission::all());
        $admin->givePermissionTo(['view dashboard', 'manage movies']);
        $user->givePermissionTo(['view dashboard']);
    }
}
