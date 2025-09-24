<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
      // Fillable properties for mass assignment
    protected $fillable = [
        'user_id', // Foreign key linking to the 'users' table
        'employee_no',
        'phone',
        'address',
        'dob',
        'employee_status',
        'employment_type',
        'emergency_contact_name',
        'emergency_contact_relation',
        'emergency_contact_phone',
        'document_status_percentage',
        'country',
        'profile_picture',
    ];

    // Define the one-to-one inverse relationship with User
      public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
