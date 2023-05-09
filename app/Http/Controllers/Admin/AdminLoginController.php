<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function forget_password()
    {
        return view('admin.forget_password');
    }



    public function forget_password_submit(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email'
        ])->validate();
    
        $admin_data = Admin::where('email', $request->email)->first();
    
        if (!$admin_data) {
            return redirect()->route('admin_forget_password')->with('error', 'Email address not found!');
        }
    
        $token = hash('sha256', time());
    
        $admin_data->token = $token;
        $admin_data->save();
    
        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Admin Password';
        $message = 'Please click on the following link to reset your password: <br>';
        $message .= '<a href="'.$reset_link.'">Reset Password</a>';
    
        Mail::to($request->email)->send(new Websitemail($subject,$message));
    
        return redirect()->route('admin_login')->with('success', 'Please check your email for the reset password link and follow the instructions.');
    }
    


    public function login_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin_login')->withErrors($validator)->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication successful
            return redirect()->route('admin_home');
        } else {
            // Authentication failed
            return redirect()->route('admin_login')->with('error', 'Your email or password is not correct!');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

    public function reset_password($token,$email)
    {
        $admin_data = Admin::where('token', $token)->where('email', $email)->first();
        if(!$admin_data) {
            return redirect()->route('admin_login');
        }

        return view ('admin.reset_password');
    }

    public function reset_password_submit(Request $request)
    {
        Validator::make($request->all(), [
            'password' => 'required',
            'confirmed_password' => 'required|same:password'
        ])->validate();

        Hash::make($request->password);

        
        return redirect()->route('admin_login')->with('success', 'Successfully reset password!');

    }
}
