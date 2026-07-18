<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus cache permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Membuat Role
        $ownerRole = Role::firstOrCreate([
            'name' => 'owner',
        ]);

        $teacherRole = Role::firstOrCreate([
            'name' => 'teacher',
        ]);

        $studentRole = Role::firstOrCreate([
            'name' => 'student',
        ]);

        /*
        |--------------------------------------------------------------------------
        | OWNER
        |--------------------------------------------------------------------------
        */

        $owner = User::updateOrCreate(
            [
                'email' => 'admin@gmail.com',
            ],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'occupation' => 'Owner',
                'avatar' => 'default.png',
            ]
        );

        $owner->syncRoles([$ownerRole]);

        /*
        |--------------------------------------------------------------------------
        | TEACHER
        |--------------------------------------------------------------------------
        */

        $teacher = User::updateOrCreate(
            [
                'email' => 'teacher@gmail.com',
            ],
            [
                'name' => 'Teacher',
                'password' => Hash::make('password'),
                'occupation' => 'Teacher',
                'avatar' => 'default.png',
            ]
        );

        $teacher->syncRoles([$teacherRole]);

        Teacher::firstOrCreate([
            'user_id' => $teacher->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | STUDENT
        |--------------------------------------------------------------------------
        */

        $student = User::updateOrCreate(
            [
                'email' => 'student@gmail.com',
            ],
            [
                'name' => 'Student',
                'password' => Hash::make('password'),
                'occupation' => 'Student',
                'avatar' => 'default.png',
            ]
        );

        $student->syncRoles([$studentRole]);
    }
}