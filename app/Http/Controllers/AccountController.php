<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function register()
    {
        return view('web.account.register');
    }

    public function registerAction(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3,
            'address' => $request->address,
        ]);

        if ($request->image) {
            $file = $_FILES['image']['tmp_name'];
            $path = "img_users/" . $_FILES['image']['name'];
            move_uploaded_file($file, $path);

            $user->image = $_FILES['image']['name'];
        };

        $user->save();

        return redirect('/login')->with('success', 'Đăng ký thành công');
    }
}
