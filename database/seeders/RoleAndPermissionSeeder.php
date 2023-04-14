<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'create-job-posts']);
        Permission::create(['name' => 'edit-job-posts']);
        Permission::create(['name' => 'delete-job-posts']);

        Permission::create(['name' => 'approve-job']);
        Permission::create(['name' => 'apply-job']);

        $adminRole = Role::create(['name' => 'Admin']);
        $candidateRole = Role::create(['name' => 'Candidate']);
        $employerRole = Role::create(['name' => 'Employer']);

        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-job-posts',
            'edit-job-posts',
            'delete-job-posts',
            'approve-job'
        ]);

        $employerRole->givePermissionTo([
            'create-job-posts',
            'edit-job-posts',
            'delete-job-posts',
        ]);

        $candidateRole->givePermissionTo([
            'apply-job',
        ]);
    }
}
