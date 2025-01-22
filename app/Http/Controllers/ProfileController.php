<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\SupporterUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Age;
use App\Models\Work;
use App\Models\Condition;
use App\Models\Area;
use App\Models\Supporter;



class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, Age $age, Work $work, Condition $condition, Area $area): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
            'ages' => $age->get(),
            'works' => $work->get(),
            'conditions' => $condition->get(),
            'areas' => $area->get(),
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

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function supporterUpdate(Request $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());
        $user=Auth::user();
        $user->works()->attach($request->supporter['work_id']);
        $user->areas()->attach($request->supporter['area_id']);
        $user->conditions()->attach($request->supporter['condition_id']);
        
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
