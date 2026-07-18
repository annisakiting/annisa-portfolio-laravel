<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage; // Tambahkan ini untuk hapus foto lama
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
        
        // 1. Isi data Name dan Email dari validasi
        $user->fill($request->validated());

        // 2. Isi data Occupation secara manual (karena di Request belum tentu masuk otomatis)
        $user->occupation = $request->occupation;

        // 3. Logika Upload/Update Avatar
        if ($request->hasFile('avatar')) {
            // Hapus foto profil lama jika ada, biar storage tidak penuh
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            
            // Simpan foto profil baru ke folder 'avatars' di storage/app/public
            $user->avatar = $request->file('avatar')->store('avatars', 'public');
        }

        // 4. Cek jika email berubah, maka reset verifikasi email
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // 5. Simpan semua perubahan ke database
        $user->save();

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

        // Hapus foto avatar dari storage sebelum user dihapus (opsional tapi bagus)
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}