<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
   public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        DB::transaction(function () use ($user, $request) {
            // ✅ Update fields in the `users` table
            $user->fill($request->validated());

            // If email changed, reset email verification
            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            // ✅ Prepare data for the `profiles` table
            $profileData = collect($request->validated())->only([
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
            ])->toArray();

            // ✅ Handle profile picture upload if provided
            if ($request->hasFile('profile_picture')) {
                $path = $request->file('profile_picture')->store('profile-pictures', 'public');
                $profileData['profile_picture'] = $path;
            }

            // ✅ Update or create the user's profile
            $user->profile()->updateOrCreate(
                ['user_id' => $user->id],
                $profileData
            );
        });

        return Redirect::back()->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
