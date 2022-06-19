<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Bảng phân quyền';
        $data['txt_search'] = $request->get('txt_search');

        $data['roles'] = Role::where('role_name', 'like' , '%' . $data['txt_search'] . '%')->paginate(5)->withQueryString();

        return view('admin.role.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Thêm quyền';
        
        return view('admin.role.create', $data);
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
            'role_name' => 'required|unique:roles',
        ]);

        $role = new Role($request->all());
        $role->save();

        return redirect('/role')->with('success', 'Thêm mới quyền người dùng thành công !');
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
        $data['title'] = 'Sửa quyền';
        
        $data['role'] = Role::find($id);

        return view('admin.role.edit', $data);

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
            'role_name' => 'required|unique:roles,role_name,' . $id,
        ]);

        $role = Role::find($id);
        $role->role_name = $request->role_name;
        $role->save();

        return redirect('/role')->with('succes', 'Sửa quyền người dùng thành công !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect('/role')->with('success', 'Xóa quyền người dùng thành công !');
    }
}
