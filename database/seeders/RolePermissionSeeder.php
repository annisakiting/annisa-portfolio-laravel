<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);

        $userOwner = User::create([
            'name' => 'ANNISA',
            'occupation' => 'Educator',
            'avatar' => 'images/default-avatar.png',
            'email' => 'ichakiting21@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        $userOwner->assignRole($studentRole);
    }
}