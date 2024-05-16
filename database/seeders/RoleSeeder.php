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
        
        Role::findOrCreate('admin');
        Role::findOrCreate('user');

        $role = Role::where('name', 'Admin')->first();
        if (!$role) {
            $role = Role::create(['name' => 'Admin']);
        }

    }
}
