<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            //role
            ['name' => 'Create Role', 'group_name' => 'Role'],
            ['name' => 'Read Role', 'group_name' => 'Role'],
            ['name' => 'Update Role', 'group_name' => 'Role'],
            ['name' => 'Delete Role', 'group_name' => 'Role'],
        ];

        foreach($permissions as $permission){
            Permission::firstOrCreate(['name' => $permission['name']], ['group_name' => $permission['group_name']]);
        }
    }
}
