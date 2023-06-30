<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user_types')->insert([
             'type' => 'Admin',
         ]);
          DB::table('user_types')->insert([
             'type' => 'Employer',
         ]);
         DB::table('user_types')->insert([
             'type' => 'Candidate',
         ]);

        $user = User::create([
            'name' => 'sohaila',
            'email' => 'sohaila5@yahoo.com',
            'password' => bcrypt('123456'),
            'roles_name' => ["Admin"],
            'status' => 'مفعل',
            'type_id'=>'1'

            ])->assignRole('Admin');;


        // $role = Role::create(['name' => 'Admin']);

        // $permissions = Permission::pluck('id','id')->all();

        // $role->syncPermissions($permissions);

        // $user->assignRole([$role->id]);


        $user = User::create([
            'name' => 'marina',
            'email' => 'marina5@yahoo.com',
            'password' => bcrypt('123456'),
            'roles_name' => ["Employer"],
            'status' => 'مفعل',
            'type_id'=>'2',
            ])->assignRole('Admin');;


        // $role = Role::create(['name' => 'Employer']);

        // $permissions = Permission::pluck('id','id')->all();

        // $role->syncPermissions($permissions);

        // $user->assignRole([$role->id]);
    }
}
