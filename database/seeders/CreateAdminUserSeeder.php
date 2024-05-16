<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminuser = User::create([
            'name' => 'youmna',
            'email' => 'youmna@gmail.com',
            'password' => bcrypt('1234'),
            'role_name' => ['Admin'],
            'status' => '1',

        ]);

        $role = Role::findByName('Admin');
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $adminuser->assignRole([$role->id]);

    }
}
