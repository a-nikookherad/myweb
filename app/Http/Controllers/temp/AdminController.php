<?php

namespace App\Http\Controllers;

use App\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\controller;
class AdminController extends Controller
{
    public function dashboard_login()
    {
        $compare=session::get('admin_email');
        if (empty($compare)) {
            return view('admin/login');
        } else {
            return redirect('admin/dashboard');
        }
    }

    public function dashboard_post(Request $request)
    {
            $admin_password = $request->admin_password;
            $admin_email = $request->admin_email;
            $result = DB::table('tbl_admins')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
            if (!empty($result)) {
                $admin_id = $result->admin_id;
                $admin_name = $result->admin_name;
                session::put('admin_id',$admin_id);
                session::put('admin_name',$admin_name);
                session::put('admin_password',$admin_password);
                session::put('admin_email',$admin_email);
                return view('admin/dashboard');
            } else {
                session::put('msg', 'your username or password is wrong!...');
                return redirect('admin');
            }
    }

    public function dashboard_get()
    {
        //authorize users
        Controller::authorize_user();

        return view('admin.dashboard');

    }

    public function dashboard_logout()
    {
        //authorize users
        Controller::authorize_user();
        Session::flush();
        return redirect('admin');
    }
}
