<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\userReq;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('users')->except(['login', 'login_post','log_out']);
//    }

    //

    public function index()
    {
        $users = User::all();
        return view('backend.items.users.list', compact('users'));
    }

    public function login()
    {
        return view('backend.items.users.login');
    }

    public function login_post(Request $request)
    {
        $remember = $request->has('remember');
        if (!Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'),'role'=>'admin'], $remember)) {
            return redirect()->back()->with('errorMsg', 'نام کاربری یا کلمه ی عبور اشتباه است');
        }
        return redirect()->route('dashboard');
    }

    public function register()
    {

        return view('backend.items.users.register');
    }

    public function register_post(userReq $request)
    {
        $active=$request->has('active');
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
            'active' => $active,
        ];
        User::create($data);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.items.users.edit', compact('user'));
    }

    public function edit_post(userReq $request, $id)
    {
        $user = User::find($id);

        $active=$request->has('active');
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
//            'password' => Hash::make($password),
            'role' => $request->input('role'),
            'active' => $active,
        ];
        if (!$request->has('password')) {
            unset($data['password']);
        } else {
            $data['password']= $request->input('password');
        }
        $user->update($data);
        return redirect()->route('users.list')->with('msg', 'کاربر با موفقیت به روزرسانی شد');
    }

    public function log_out()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user instanceof User) {
            $user->delete();
        }
        return redirect()->route('users.list')->with('msg', 'کاربر با موفقیت حذف شد.');
    }
}
