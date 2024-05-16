<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Role::create(['name'=> 'Admin']);
        Role::create(['name'=> 'User']);

        $role = Role::where('name', 'Admin')->first();
        if (!$role) {
            $role = Role::create(['name' => 'Admin']);
        }

    }
}
