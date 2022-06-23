<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function register()
    {
        return view('web.account.register');
    }

    public function registerAction(Request $request)
    {
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

    public function login()
    {

        return view('web.account.login');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();

            if (Auth::user()->role_id == 3) {
                return redirect('/');
            } else {
                return redirect('/admin/product');
            }
        }

        return back()->with('errorLogin', 'Tài khoản hoặc mật khẩu không đúng');
    }

    public function changePassword()
    {

        return view('web.account.change-password');
    }

    public function changePasswordAction(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $user = User::find(Auth::user()->id);

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();

            $request->session()->regenerate();

            return redirect('/')->with('success', 'Đổi mật khẩu thành công');
        }
    }

    public function forgotPassword()
    {

        return view('web.account.forgot-password');
    }

    public function checkPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            return redirect('/reset-password' . '/' . $user->id);
        }

        return back()->with('error', 'Email không tồn tại');
    }

    public function resetPassword($id){

        $user = User::find($id);

        return view('web.account.reset-password', compact('user'));
    }

    public function resetPasswordAction(Request $request, $id)
    {

        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find($id);

        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->regenerate();

        return redirect('/login')->with('success', 'Đổi mật khẩu thành công');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
