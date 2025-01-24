<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all(); // Get all permissions
        return view('role.list', compact('roles', 'permissions'));
    }

    public function create()
    {
        $permissions = Permission::all(); // Get all permissions for selection
        return view('role.add', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name',
            'permissions' => 'array|exists:permissions,id', // Validate permissions
        ]);

        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions); // Assign selected permissions to role
        return redirect()->route('role.index')->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $role->id,
            'permissions' => 'exists:permissions,id',
        ]);
        
        $role->update(['name' => $request->name]);
        // $role->syncPermissions($request->permissions);
        // dd($request->input('permissions'));

        return redirect()->route('role.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index')->with('success', 'Role deleted successfully.');
    }

    // Permissions
    public function permissionIndex()
    {
        $permissions = Permission::all();
        return view('permission.index', compact('permissions'));
    }

    public function permissionCreate()
    {
        return view('permission.create');
    }

    public function permissionStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->name]);

        return redirect()->route('permission.index')->with('success', 'Permission created successfully.');
    }

    public function permissionEdit(Permission $permission)
    {
        return view('permission.edit', compact('permission'));
    }

    public function permissionUpdate(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => $request->name]);

        return redirect()->route('permission.index')->with('success', 'Permission updated successfully.');
    }

    public function permissionDestroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permission.index')->with('success', 'Permission deleted successfully.');
    }
}
