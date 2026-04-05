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
    // $request->merge([
    //     'password' => trim($request->password),
    //     'password_confirmation' => trim($request->password_confirmation),
    // ]);
    

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

        // 🔹 Try Admin Login First
    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('admin.dashboard');
    }

    // 🔹 Try User Login
    if (Auth::guard('web')->attempt($credentials)) {
        return redirect()->route('user.dashboard');
    }

        return back()->with('error', 'Invalid credentials');
    }

    public function storeUser(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
    ]);

    $defaultPassword = 'Welcome@123'; // 🔐 default password

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,

        // 👇 default password used
        'password' => Hash::make($defaultPassword),

        'role' => $request->role,
        'specialization' => $request->specialization,
        'license_number' => $request->license_number,

        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip,

        'status' => $request->status ?? 1,
    ]);

    return back()->with('success', 'User created with default password: '.$defaultPassword);
}

    // 🔹 Logout
    public function logout(Request $request)
    {
        // 🔹 Logout Admin
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }

        // 🔹 Logout User (web)
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        // 🔹 Invalidate session (IMPORTANT)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('signin');
    }
}