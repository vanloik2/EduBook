@extends('admin.layout')
@section('content')
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="" method="get">
                <div class="row row-cols-auto">
                    <div class="col">
                        <div class="input-group">
                            <select name="role_id" class="form-select form-control col-md-3">
                                <option value="">Vai trò</option>
                                @foreach ($roles as $role)
                                @if($role->id == $role_id)
                                    <option value="{{ $role->id }}" selected >{{ $role->role_name }}</option>
                                    @else
                                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                @endif
                                @endforeach
                            </select>

                            <input type="text" name="txt_search" placeholder="Nhập từ khóa tìm kiếm..."
                                value="{{ $txt_search }}" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                    <div class="">
                        <a href="{{ route('user.create') }}" class="btn btn-success">Thêm mới</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Họ & Tên</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Vai trò</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->role_name }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post" style="display: inline-block"
                                        onsubmit=" return confirm('Xác nhận xóa !')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
