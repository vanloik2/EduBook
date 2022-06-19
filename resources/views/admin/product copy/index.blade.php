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
                            <select name="category_id" class="form-select form-control col-md-3">
                                <option value="">All Categories</option>
                                @foreach ($categories as $category)
                                @if($category->id == $category_id)
                                    <option value="{{ $category->id }}" selected >{{ $category->name }}</option>
                                    @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                        <a href="{{ route('product.create') }}" class="btn btn-success">Thêm mới</a>
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
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Sô lượng</th>
                            <th>Giảm giá</th>
                            <th>Danh mục</th>
                            <th>Nổi bật</th>
                            <th>Xử lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price) }} <sup class="text-decoration-underline">đ</sup>
                                </td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->discount }} <span>%</span></td>
                                <td>{{ $product->category_name }}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" @if ($product->outstanding == 1) checked @endif
                                            type="checkbox" name="outstanding" role="switch" id="flexSwitchCheckDefault">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display: inline-block"
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
