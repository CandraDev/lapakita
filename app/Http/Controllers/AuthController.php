<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Socialite;
use Illuminate\Support\Str;
use Carbon\Carbon;


class AuthController extends Controller
{
    /**
     * Show login page
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Show register page
     */
    public function showRegister()
    {
        return view('auth.register');
    }
    /**
     * Show profile page
     */
    public function showProfile()
    {
        return view('auth.profile');
    }

    public function showAccount()
    {
        return view('auth.account.index');
    }
    public function showAccountEdit()
    {
        return view('auth.account.edit');
    }

    /**
     * Handle Register
     */
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'     => ['required', 'string', 'max:255'],
                'email'    => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:8', 'confirmed'],
            ],
            [
                // Name
                'name.required' => 'Nama lengkap wajib diisi.',
                'name.string'   => 'Nama lengkap harus berupa teks.',
                'name.max'      => 'Nama lengkap maksimal :max karakter.',

                // Email
                'email.required' => 'Email wajib diisi.',
                'email.email'    => 'Format email tidak valid.',
                'email.unique'   => 'Email sudah terdaftar.',

                // Password
                'password.required'  => 'Kata sandi wajib diisi.',
                'password.min'       => 'Kata sandi minimal :min karakter.',
                'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            ]
        );


        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->sendEmailVerificationNotification();
        Auth::login($user);

        return redirect()->route('verification.notice'); // ganti sesuai kebutuhan
    }

    /**
     * Handle Login
     */
    public function login(Request $request)
    {
        $request->validate(
            [
                'email'    => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required'    => 'Email wajib diisi.',
                'email.email'       => 'Format email tidak valid.',
                'password.required' => 'Kata sandi wajib diisi.',
            ]
        );

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            flash()
                    ->error('Login gagal.');

            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['Email atau kata sandi yang Anda masukkan salah.'],
            ]);
        }


        $request->session()->regenerate();

        return redirect()->route('home');
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();


        $user = User::where('google_id', $googleUser->id)
            ->orWhere('email', $googleUser->email)
            ->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'avatar' => $googleUser->avatar, // FOTO PROFIL
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt(Str::random(16)),
            ]);
        } else {
            // update foto kalau berubah
            $user->update([
                'google_id' => $googleUser->id,
                'avatar' => $googleUser->avatar,
            ]);
        }

        Auth::login($user);

        return redirect(route('home'));
    }


}
