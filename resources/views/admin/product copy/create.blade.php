@extends('admin.layout')
@section('content')
    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="label-control">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="label-control">Giá sản phẩm</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="label-control">Số lượng</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="category_id" class="form-select form-control">
                                <option value="">All danh mục</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="label-control">Giảm giá</label>
                            <input type="number" name="discount" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="label-control">Ảnh sản phảm</label>
                            <div class="form-ip-file">
                                <label for="image" class="label-ip-file">
                                    Upload Photo
                                </label>
                                <input type="file" name="image" onchange="uploadFile()" class="custom">
                            </div>
                            <p class="preview-image"><img src="https://cdn-icons-png.flaticon.com/512/15/15287.png"
                                    id="previewImage" alt=""></p>
                        </div>
                        <div class="form-check mb-3" style="padding-left: 1.5em">
                            <input class="form-check-input" name="outstanding" type="checkbox" value="1">
                            <label class="form-check-label" for="flexCheckDisabled">
                                Nổi bật
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="label-control">Mô tả sản phẩm</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                    <button type="reset" class="btn btn-warning">Làm mới</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('admin/js/input-file.js') }}"></script>
@endsection
