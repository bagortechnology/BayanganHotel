<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index() 
    {
        return view ('admin.profile');
    }

    public function profile_submit(Request $request)
    {

        $admin_data = Admin::where('email',Auth::guard('admin')->user()->email)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        if($request->password!='') {
            $request->validate([
                'password' => 'required',
                'confirmed_password' => 'required|same:password'
            ]); 

            $admin_data->password = Hash::make($request->password);
        }

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$admin_data->photo));

            $mimeType = $request->file('photo')->extension();
            $file_name = 'admin'. '.'.$mimeType;

            $request->file('photo')->move(public_path('uploads/'),$file_name);

            $admin_data->photo = $file_name;
        }

        $admin_data->name = $request->name;
        $admin_data->email = $request->email;
        $admin_data->update();

        return redirect()->back()->with('success', 'Profile information saved successfully!');
    }
}
