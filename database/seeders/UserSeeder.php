<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Assuming you have the User model
use Illuminate\Support\Facades\Hash;
use App\Models\Role; // Assuming you have the Role model

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Super Admin User
        User::create([
            'first_name' => 'Super',  // First name
            'last_name' => 'Admin',   // Last name
            'email' => 'superadmin@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'SuperAdmin',   // Enum Role
            'status' => 'active',     // Enum Status
            'profile_picture' => 'Null',
            'permissions' => json_encode(['all_access' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 1,
            'address' => '123 Admin St, Admin City, Admin Country',
            'joining_date' => now(),
        ]);

        // HR Manager User
        User::create([
            'first_name' => 'HR',  // First name
            'last_name' => 'Manager', // Last name
            'email' => 'hrmanager@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'HRManager', // Enum Role
            'status' => 'active',  // Enum Status
            'profile_picture' => 'Null',
            'permissions' => json_encode(['view_hr_data' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 2,
            'address' => '124 HR St, HR City, Admin Country',
            'joining_date' => now(),
        ]);

        // Accounts Manager User
        User::create([
            'first_name' => 'Accounts',  // First name
            'last_name' => 'Manager',    // Last name
            'email' => 'accountsmanager@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'AccountsManager', // Enum Role
            'status' => 'active',        // Enum Status
            'profile_picture' => 'Null',
            'permissions' => json_encode(['view_financial_data' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 3,
            'address' => '125 Accounts St, Finance City, Admin Country',
            'joining_date' => now(),
        ]);

        // Admin User
        User::create([
            'first_name' => 'Admin',  // First name
            'last_name' => 'User',    // Last name
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin',         // Enum Role
            'status' => 'active',      // Enum Status
            'profile_picture' => 'Null',
            'permissions' => json_encode(['view_dashboard' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 4,
            'address' => '126 Admin St, Admin City, Admin Country',
            'joining_date' => now(),
        ]);

        // Staff User
        User::create([
            'first_name' => 'Staff',  // First name
            'last_name' => 'User',    // Last name
            'email' => 'staff@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'Staff',        // Enum Role
            'status' => 'active',     // Enum Status
            'profile_picture' => 'Null',
            'permissions' => json_encode(['view_basic_info' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 5,
            'address' => '127 Staff St, Staff City, Admin Country',
            'joining_date' => now(),
        ]);
    }
}
