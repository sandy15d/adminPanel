<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::where('name', '!=', 'Super Admin')->pluck('name', 'name');
        return view('master.user.index', compact('users', 'roles'));
    }

    public function create(Request $request)
    {
        $roles = Role::where('name', '!=', 'Super Admin')->pluck('name', 'name');
        return view('master.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required|min:4',
        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already exists',
            'role.required' => 'Role is required',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password does not match',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $query = new User();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->password = Hash::make($request->password);
        $query->save();
        $query->assignRole($request->role);
        toastr()->success('User created successfully.');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        toastr()->success('User deleted successfully.');
        return redirect()->back();
    }
}
