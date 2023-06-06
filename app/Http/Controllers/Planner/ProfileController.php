<?php

namespace App\Http\Controllers\Planner;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    public function uploadDP(Request $request): RedirectResponse
    {
        $request->validate([
            'dp' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $user = $request->user();

        $file_name = time() . '_' . $request->file('dp')->getClientOriginalName();
        $file_path = $request->file('dp')->storeAs('dp', $file_name);
        $user->dp = $file_path;
        $user->save();

        return Redirect::route('profile.edit');
    }

    public function updateBankInfo(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'bank' => 'required|string',
            'account_name' => 'required|string|regex:/^\w+(\s+\w+){1,2}$/',
            'account_no' => 'required|numeric|digits:10'
        ],[
            'bank' => 'Please check the bank name you entered',
            'bank.required' => 'Your bank name is required',
            'account_name' => 'Please check the account name you entered',
            'account_name.required' => 'Your account name is required',
            'account_no' => 'Your account number is invalid',
            'account_no.required' => 'Your account number is required',
        ]);

        $request->user()->update($validated);

        return Redirect::route('profile.edit');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
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
