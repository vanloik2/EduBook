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
                        <a href="{{ route('category.create') }}" class="btn btn-success">Thêm mới</a>
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
                            <th>Tên danh mục</th>
                            <th>Sô lượng sản phẩm</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ count($category->products) }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('category.destroy', $category->id) }}"
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
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
