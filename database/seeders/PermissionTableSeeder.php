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
        $permissions = [
            'role',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user',
            'user-block',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'book',
            'book-list',
            'book-create',
            'book-edit',
            'book-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
