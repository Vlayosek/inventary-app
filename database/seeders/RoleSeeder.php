<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.area.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.area.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.area.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.area.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.article.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.article.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.article.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.article.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.category.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.category.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.category.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.category.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.marca.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.marca.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.marca.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.marca.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.modelo.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.modelo.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.modelo.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.modelo.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.product.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.product.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.product.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.product.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.type.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.type.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.type.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.type.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'admin.user.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.user.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.user.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'admin.user.destroy'])->syncRoles([$role1,$role2]);

    }
}
