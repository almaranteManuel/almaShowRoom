<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_client = Role::create(['name' => 'client']);

        $permission_create_role = Permission::create(['name' => 'create roles']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update roles']);
        $permission_delete_role = Permission::create(['name' => 'delete roles']);

        $permission_create_order = Permission::create(['name' => 'create orders']);
        $permission_read_order = Permission::create(['name' => 'read orders']);
        $permission_update_order = Permission::create(['name' => 'update orders']);
        $permission_delete_order = Permission::create(['name' => 'delete orders']);

        $permission_create_product = Permission::create(['name' => 'create products']);
        $permission_read_product = Permission::create(['name' => 'read products']);
        $permission_update_product = Permission::create(['name' => 'update products']);
        $permission_delete_product = Permission::create(['name' => 'delete products']);

        $permission_create_category = Permission::create(['name' => 'create categories']);
        $permission_read_category = Permission::create(['name' => 'read categories']);
        $permission_update_category = Permission::create(['name' => 'update categories']);
        $permission_delete_category = Permission::create(['name' => 'delete categories']);

        $permission_create_offer = Permission::create(['name' => 'create offers']);
        $permission_read_offer = Permission::create(['name' => 'read offers']);
        $permission_update_offer = Permission::create(['name' => 'update offers']);
        $permission_delete_offer = Permission::create(['name' => 'delete offers']);

        $permissions_admin = [$permission_create_role, $permission_read_role, $permission_update_role, $permission_delete_role,
        $permission_create_order, $permission_read_order, $permission_update_order, $permission_delete_order,
        $permission_create_product, $permission_read_product, $permission_update_product, $permission_delete_product,
        $permission_create_category, $permission_read_category, $permission_update_category, $permission_delete_category,
        $permission_create_offer, $permission_read_offer, $permission_update_offer, $permission_delete_offer,
        ];

        $permissions_client = [
        $permission_create_order, $permission_read_order, $permission_update_order, $permission_delete_order,
        $permission_read_product,
        $permission_read_category,
        $permission_create_offer, $permission_read_offer, $permission_delete_offer,
        ];

        $role_admin->syncPermissions($permissions_admin);
        $role_client->syncPermissions($permissions_client);
    }
}
