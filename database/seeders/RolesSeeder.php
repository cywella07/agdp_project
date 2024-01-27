<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'User',
                'guard_name' => 'web',
                
            ],

            [
                'name' => 'Admin',
                'guard_name' => 'web',
                
            ],

            [
                'name' => 'Super Admin',
                'guard_name' => 'web',
                
            ],

        ]);


        $user_permission =Role::find(1);
        $user_permission->givePermissionTo([
            'can.add.userposts',
            'can.edit.userposts',
            'can.view.userposts',
            'can.delete.userposts',
        ]);
    }
}
