<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Bảng người dùng';
        $data['txt_search'] = $request->get('txt_search');
        $data['roles'] = Role::all();
        $data['role_id'] = $request->get('role_id');

        $query = User::join('roles', 'users.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.role_name')
            ->where('name', 'like', '%' . $data['txt_search'] . '%');

        if ($data['role_id']) {
            $query->where('role_id', $data['role_id']);
        }

        $data['users'] = $query->paginate(5)->withQueryString();

        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Thêm mới người dùng';
        $data['roles'] = Role::where('id', '!=', 3)->get();

        return view('admin.user.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role_id' => 'required',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'address' => $request->address,
        ]);

        if ($request->image) {
            $file = $_FILES['image']['tmp_name'];
            $path = "img_users/" . $_FILES['image']['name'];
            move_uploaded_file($file, $path);

            $user->image = $_FILES['image']['name'];
        };

        $user->save();

        return redirect()->route('user.index')->with('success', 'Thêm mới người dùng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Sửa người dùng';
        $data['roles'] = Role::where('id', '!=', 3)->get();

        $data['user'] = User::find($id);

        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role_id' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find($id);
       
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = $request->role_id;
            $user->address = $request->address;
       
        if ($request->image) {
            $file = $_FILES['image']['tmp_name'];
            $path = "img_users/" . $_FILES['image']['name'];
            move_uploaded_file($file, $path);

            $user->image = $_FILES['image']['name'];
        };

        $user->save();

        return redirect('/admin/user')->with('success', 'Sửa người dùng thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Xóa người dùng thành công');
    }
}
