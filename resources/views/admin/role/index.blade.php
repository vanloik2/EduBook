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
                        <input type="text" name="txt_search" placeholder="Nhập từ khóa tìm kiếm..." value="{{ $txt_search }}"
                            class="form-control">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                    <div class="">
                        <a href="{{ route('role.create') }}" class="btn btn-success">Thêm mới</a>
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
                            <th>Tên quyền</th>
                            <th>Sô lượng</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $index => $role)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $role->role_name }}</td>
                                <td>{{ count($role->users) }}</td>
                                <td>
                                    <a href="{{ route('role.edit', $role->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('role.destroy', $role->id) }}"
                                        style="display: inline-block" method="post"
                                        onsubmit="return confirm('Xác nhận xóa !')">
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
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
