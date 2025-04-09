<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProfileController extends Controller
{
    const IMAGE_DIRECTORY = 'user-images';

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('auth.profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
   /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        $user->fill($request->safe()->except('image'));

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if ($request->hasFile('image')) {
            $this->updateUserImage($user, $request->file('image'));
        }

        $user->save();

        return Redirect::route('profile.edit')->with('success', 'Profile has been updated!');
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

        // Delete user's image if exists
        $this->deleteUserImage($user);

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Handle image upload (saves ONLY filename in DB).
     */
    protected function updateUserImage($user, $image_file): void
    {
        // Delete old image if exists
        $this->deleteUserImage($user);

        // Generate filename
        $filename = $this->generateFilename($user, $image_file);

        // Process image
        $manager = new ImageManager(new Driver());
        $image = $manager->read($image_file);
        $image->scale(height: 150);

        // Save to storage (in 'public/user-images')
        Storage::disk('public')->put(
            self::IMAGE_DIRECTORY . '/' . $filename,
            $image->encode()
        );

        // Store ONLY filename in DB
        $user->image = $filename;
    }

    /**
     * Delete old image (handles full path resolution).
     */
    protected function deleteUserImage($user): void
    {
        if (!empty($user->image)) {
            // Construct full path for deletion
            $fullPath = self::IMAGE_DIRECTORY . '/' . $user->image;
            Storage::disk('public')->delete($fullPath);
        }
    }

    /**
     * Generate unique filename.
     */
    protected function generateFilename($user, $image_file): string
    {
        $slug = Str::slug($user->first_name . '-' . $user->last_name);
        $ext = $image_file->getClientOriginalExtension();
        return $slug . '-' . Str::random(6) . '.' . $ext;
    }
}
