<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $Permissions = [
            
            'post-create',
            'post-edit' ,
            'post-delete' ,
            'post-show',
            'user-edit',
            'user-delete',
            'user-create' ,

        ];

        foreach($Permissions as $permission){
            
            Permission::findOrCreate($permission);
        }

    }
}
