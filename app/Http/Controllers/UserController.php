<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = array(
            'title'     => 'Data Tenant',
            'user'      => User::orderBy('role', 'asc')->get(),
            // "menuAdminUser"     => "active",
        );

        return view('admin/user/index', $data);
    }

    public function create() {
        $data = array(
            'title'     => 'Add Data Tenant',
            // "menuAdminUser"     => "active",
        );

        return view('admin/user/create', $data);
    }

    public function store(Request $request) {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|unique:users,email',
            'role'          => 'required',
            'password'      => 'required|confirmed|min:8',
        ],[
            'name.required'         => 'Name has not been entered',
            'email.required'        => 'Email has not been entered',
            'email.unique'          => 'Email already exists',
            'role.required'         => 'Role must be selected',
            'password.required'     => 'Password has not been entered',
            'password.confirmed'    => 'Confirmation password is not the same',
            'password.min'          => 'Password minimum 8 characters',
        ]);

        $user = new User;
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->role         = $request->role;
        $user->password     = Hash::make($request->password);

        if ($request->role === 'Super Admin') {
        $user->active_until = null; // tanpa batas waktu
        } else {
            $user->active_until = now()->addYear(); // aktif 1 tahun
        }
        
        $user->save();

        return redirect()->route('user')->with('success', 'Data Success'); 
    }

    public function edit($id) {
        $data = array(
            'title'     => 'Edit Data Tenant',
            'user'      => User::findOrFail($id),
            // "menuAdminUser"     => "active",
        );

        return view('admin/user/edit', $data);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|unique:users,email,'.$id,
            'role'          => 'required',
            'password'      => 'nullable|confirmed|min:8',
        ],[
            'name.required'         => 'Name has not been entered',
            'email.required'        => 'Email has not been entered',
            'email.unique'          => 'Email already exists',
            'role.required'         => 'Role must be selected',
            'password.confirmed'    => 'Confirmation password is not the same',
            'password.min'          => 'Password minimum 8 characters',
        ]);

        $user = User::findOrFail($id);
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->role         = $request->role;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->role === 'Super Admin') {
            $user->active_until = null; // tidak ada batas waktu
        } else {
            $user->active_until = $request->active_until 
                ? $request->active_until 
                : now()->addYear();
        }
        $user->save();

        return redirect()->route('user')->with('success', 'Data Edited Successfully'); 
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'Data Deleted Successfully');
    }
}
