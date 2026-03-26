<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    // 🔹 Register
    public function register(Request $request)
{
    $request->merge([
        'password' => trim($request->password),
        'password_confirmation' => trim($request->password_confirmation),
    ]);
    

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required',
        'password' => 'required|min:6|confirmed',
        'terms' => 'required',
    ]);

//     dd($request->all(), $request->validate([
//     'name' => 'required|string|max:255',
//     'email' => 'required|email|unique:users',
//     'phone' => 'required',
//     'password' => 'required|min:6|confirmed',
//     'terms' => 'required',
// ]));

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect()->route('user.dashboard');
}

    // 🔹 Login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    // 🔹 Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }
}