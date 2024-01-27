<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'name' => 'can.add.userposts',
                'display_name' => 'View', 
                'guard_name' => 'web',
                'is_menu' => true,
                'module_name' => 'Staff',
                'parenting' => 1,
            ],
            [
                'name' => 'can.edit.userposts',
                'display_name' => 'View', 
                'guard_name' => 'web',
                'is_menu' => true,
                'module_name' => 'Staff',
                'parenting' => 1,
            ],

            [
                'name' => 'can.view.userposts',
                'display_name' => 'View', 
                'guard_name' => 'web',
                'is_menu' => true,
                'module_name' => 'Staff',
                'parenting' => 1,
            ],

            [
                'name' => 'can.delete.userposts',
                'display_name' => 'View', 
                'guard_name' => 'web',
                'is_menu' => true,
                'module_name' => 'Staff',
                'parenting' => 1,
            ],
        ]);
    }
}
