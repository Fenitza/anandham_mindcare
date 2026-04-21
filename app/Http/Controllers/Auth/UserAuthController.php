<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Group;

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
       return redirect()->intended(route('admin.dashboard'));
    }

    // 🔹 Try User Login
    if (Auth::guard('web')->attempt($credentials)) {
        return redirect()->intended(route('user.dashboard'));
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

public function show($id)
{
    $user = User::with(['courses', 'appointments'])->findOrFail($id);

    return view('pages.dasboard.admin.users_show', compact('user'));
}
public function edit($id)
{
    $user = User::findOrFail($id);
    return view('pages.dasboard.admin.add_user', compact('user'));
}


public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'role' => $request->role,
        'specialization' => $request->specialization,
        'license_number' => $request->license_number,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip,
        'status' => $request->status ?? 1,
    ]);

    return redirect()->route('admin.users')
        ->with('success', 'User updated successfully');
}

public function toggle($id)
{
    $user = User::findOrFail($id);

    $user->status = !$user->status;
    $user->save();

    return back()->with('success', 'User status updated');
}

public function usersIndex()
{
    $users = User::with(['enrollments', 'appointments'])->paginate(10);

$users->getCollection()->transform(function ($user) {

    $lastEnrollment = $user->enrollments->sortByDesc('created_at')->first();
    $lastAppointment = $user->appointments->sortByDesc('created_at')->first();

    $latestActivity = collect([
        optional($lastEnrollment)->created_at,
        optional($lastAppointment)->created_at
    ])->filter()->sortDesc()->first();

    $user->last_activity = $latestActivity;

    return $user;
});

    $totalUsers = User::count();
    $activeUsers = User::where('status', 1)->count();
    $inactiveUsers = User::where('status', 0)->count();

    return view('pages.dasboard.admin.users', [
        'users' => $users,
        'totalUsers' => $totalUsers,
        'activeUsers' => $activeUsers,
        'inactiveUsers' => $inactiveUsers,
    ]);
}

public function toggleStatus($id)
{
    $user = User::findOrFail($id);
    $user->status = !$user->status;
    $user->save();

    return back();
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

    public function assignCourses()
{
    $users = User::where('status', 1)->get(); // only active users

    $courses = Course::where('course_type', 'specialised') // 🔥 important
        ->orderBy('title')
        ->get();

    $groups = Group::with('users')->get();


    return view('pages.dasboard.admin.assign_courses', compact('users', 'courses', 'groups'));
}



public function assignCoursesToUser(Request $request)
{
    $request->validate([
        'user_ids'   => 'array|nullable',
        'group_ids'  => 'array|nullable',
        'role'       => 'nullable|string',
        'course_ids' => 'array'
    ]);

    $courseIds = $request->course_ids ?? [];

    $users = collect();

    // 1. Direct users
    if (!empty($request->user_ids)) {
        $users = $users->merge(
            User::whereIn('id', $request->user_ids)->get()
        );
    }

    // 2. Role-based users
    if (!empty($request->role)) {
        $users = $users->merge(
            User::where('role', $request->role)
                ->where('status', 1)
                ->get()
        );
    }

    // 3. Group-based users 🔥 NEW
    if (!empty($request->group_ids)) {
        $groupUsers = User::whereHas('groups', function ($q) use ($request) {
            $q->whereIn('groups.id', $request->group_ids);
        })->get();

        $users = $users->merge($groupUsers);
    }

    // remove duplicates
    $users = $users->unique('id');

    if ($users->isEmpty()) {
        return back()->with('error', 'Select users, role, or groups');
    }

    foreach ($users as $user) {

        Enrollment::where('user_id', $user->id)
            ->whereNotIn('course_id', $courseIds)
            ->update(['status' => 'inactive']);

        foreach ($courseIds as $courseId) {

            Enrollment::updateOrCreate(
                [
                    'user_id'   => $user->id,
                    'course_id' => $courseId,
                ],
                [
                    'user_name' => $user->name,
                    'email'     => $user->email,
                    'status'    => 'approved'
                ]
            );
        }
    }

    return back()->with('success', 'Courses assigned successfully');
}

public function manageGroups()
{
    $groups = Group::with('users')->latest()->get();
    $users = User::whereNull('group_id')->get(); // unassigned users

    return view('pages.dasboard.admin.manage_groups', compact('groups', 'users'));
}

public function storeGroup(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255'
    ]);

    Group::create([
        'name' => $request->name
    ]);

    return back()->with('success', 'Group created');
}

public function assignUsersToGroup(Request $request, $groupId)
{
    $request->validate([
        'user_ids' => 'array'
    ]);

    $group = Group::findOrFail($groupId);

    if (!empty($request->user_ids)) {
        $group->users()->syncWithoutDetaching($request->user_ids);
    }

    return back()->with('success', 'Users assigned');
}

public function updateGroup(Request $request, $id)
{
    $group = Group::findOrFail($id);

    $group->update([
        'name' => $request->name
    ]);

    return back()->with('success', 'Group updated');
}

public function deleteGroup($id)
{
    $group = Group::findOrFail($id);

    // remove users from group
    User::where('group_id', $group->id)->update(['group_id' => null]);

    $group->delete();

    return back()->with('success', 'Group deleted');
}

public function removeUserFromGroup($groupId, $userId)
{
    $group = Group::findOrFail($groupId);

    $group->users()->detach($userId);

    return back()->with('success', 'User removed from group');
}
}
