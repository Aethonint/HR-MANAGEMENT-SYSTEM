<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    public function superAdminDashboard() {
        return view('SuperAdmin.dashboard');
    }
    public function profile()
    {
        $user = auth()->user(); // or User::find($id);
        return view("SuperAdmin.profile",compact('user'));
    }
    public function updateProfile(Request $request)
{
    $user = $request->user();

    // ✅ Validate all inputs
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'employee_no' => 'nullable|string|max:50',
        'phone' => 'nullable|string|max:20',
        'dob' => 'nullable|date',
        'country' => 'nullable|string|max:100',
        'address' => 'nullable|string|max:500',
        'employment_type' => 'nullable|string|in:employee,self-employed',
        'emergency_contact_name' => 'nullable|string|max:255',
        'emergency_contact_relation' => 'nullable|string|max:100',
        'emergency_contact_phone' => 'nullable|string|max:20',
        'document_status_percentage' => 'nullable|numeric|min:0|max:100',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    DB::transaction(function () use ($user, $validated, $request) {
        // ✅ Update User Table
        $user->fill($validated);
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
        $user->save();

        // ✅ Profile Data
        $profileData = collect($validated)->only([
            'employee_no','phone','address','dob','employee_status','employment_type',
            'emergency_contact_name','emergency_contact_relation','emergency_contact_phone',
            'document_status_percentage','country'
        ])->toArray();

        // ✅ Handle Profile Picture Upload
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile-pictures', 'public');
            $profileData['profile_picture'] = $path;
        }

        // ✅ Update or Create Profile
        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            $profileData
        );
    });

    return redirect()
        ->back()
        ->with('status', 'profile-updated');
}
}
