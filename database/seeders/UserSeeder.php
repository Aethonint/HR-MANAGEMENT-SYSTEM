<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Profile;// Assuming you have the User model
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
        $superAdmin = User::create([
            'first_name' => 'Super',  // First name
            'last_name' => 'Admin',   // Last name
            'email' => 'superadmin@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'SuperAdmin',   // Enum Role
            'status' => 'active',     // Enum Status
            'permissions' => json_encode(['all_access' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 1,
            'joining_date' => now(),
        ]);

        // Create profile for Super Admin
        Profile::create([
            'user_id' => $superAdmin->id,  // Linking to the Super Admin user
            'employee_no' => 'EMP001',
            'phone' => '123-456-7890',
            'address' => '123 Admin Street, City',
            'dob' => '1980-01-01',
            'employee_status' => 'active',
            'employment_type' => 'employee',
            'emergency_contact_name' => 'John Admin',
            'emergency_contact_relation' => 'Brother',
            'emergency_contact_phone' => '987-654-3210',
            'document_status_percentage' => 100.00,
            'country' => 'Country Name',
            'profile_picture' => 'path/to/super_admin_picture.jpg',
        ]);

        // HR Manager User
        $hrManager = User::create([
            'first_name' => 'HR',  // First name
            'last_name' => 'Manager', // Last name
            'email' => 'hrmanager@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'HRManager', // Enum Role
            'status' => 'active',  // Enum Status
            'permissions' => json_encode(['view_hr_data' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 2,
            'joining_date' => now(),
        ]);

        // Create profile for HR Manager
        Profile::create([
            'user_id' => $hrManager->id,  // Linking to the HR Manager user
            'employee_no' => 'EMP002',
            'phone' => '123-555-7890',
            'address' => '456 HR Road, City',
            'dob' => '1990-02-01',
            'employee_status' => 'active',
            'employment_type' => 'employee',
            'emergency_contact_name' => 'Jane HR',
            'emergency_contact_relation' => 'Sister',
            'emergency_contact_phone' => '987-654-9876',
            'document_status_percentage' => 85.00,
            'country' => 'Country Name',
            'profile_picture' => 'path/to/hr_manager_picture.jpg',
        ]);

        // Accounts Manager User
        $accountsManager = User::create([
            'first_name' => 'Accounts',  // First name
            'last_name' => 'Manager',    // Last name
            'email' => 'accountsmanager@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'AccountsManager', // Enum Role
            'status' => 'active',        // Enum Status
            'permissions' => json_encode(['view_financial_data' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 3,
            'joining_date' => now(),
        ]);

        // Create profile for Accounts Manager
        Profile::create([
            'user_id' => $accountsManager->id,  // Linking to the Accounts Manager user
            'employee_no' => 'EMP003',
            'phone' => '123-777-7890',
            'address' => '789 Accounts Ave, City',
            'dob' => '1985-05-05',
            'employee_status' => 'active',
            'employment_type' => 'employee',
            'emergency_contact_name' => 'Michael Accounts',
            'emergency_contact_relation' => 'Friend',
            'emergency_contact_phone' => '987-654-6543',
            'document_status_percentage' => 90.00,
            'country' => 'Country Name',
            'profile_picture' => 'path/to/accounts_manager_picture.jpg',
        ]);

        // Admin User
        $admin = User::create([
            'first_name' => 'Admin',  // First name
            'last_name' => 'User',    // Last name
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'Admin',         // Enum Role
            'status' => 'active',      // Enum Status
            'permissions' => json_encode(['view_dashboard' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 4,
            'joining_date' => now(),
        ]);

        // Create profile for Admin
        Profile::create([
            'user_id' => $admin->id,  // Linking to the Admin user
            'employee_no' => 'EMP004',
            'phone' => '123-888-7890',
            'address' => '101 Admin Lane, City',
            'dob' => '1995-07-07',
            'employee_status' => 'active',
            'employment_type' => 'employee',
            'emergency_contact_name' => 'Sarah Admin',
            'emergency_contact_relation' => 'Wife',
            'emergency_contact_phone' => '987-654-3211',
            'document_status_percentage' => 95.00,
            'country' => 'Country Name',
            'profile_picture' => 'path/to/admin_picture.jpg',
        ]);

        // Staff User
        $staff = User::create([
            'first_name' => 'Staff',  // First name
            'last_name' => 'User',    // Last name
            'email' => 'staff@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'Staff',        // Enum Role
            'status' => 'active',     // Enum Status
            'permissions' => json_encode(['view_basic_info' => true]),
            'department_id' => null,  // Assuming no department for now
            'last_login' => now(),
            'start_date' => now(),
            'employee_id' => 5,
            'joining_date' => now(),
        ]);

        // Create profile for Staff
        Profile::create([
            'user_id' => $staff->id,  // Linking to the Staff user
            'employee_no' => 'EMP005',
            'phone' => '123-999-7890',
            'address' => '202 Staff Blvd, City',
            'dob' => '2000-09-09',
            'employee_status' => 'active',
            'employment_type' => 'employee',
            'emergency_contact_name' => 'Tom Staff',
            'emergency_contact_relation' => 'Friend',
            'emergency_contact_phone' => '987-654-1111',
            'document_status_percentage' => 80.00,
            'country' => 'Country Name',
            'profile_picture' => 'path/to/staff_picture.jpg',
        ]);
    }
}
