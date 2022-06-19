@extends('admin.layout')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </div>
            <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="label-control">Tên sản phẩm</label>
                            <input type="text" value="{{ $product->name }}" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="label-control">Giá sản phẩm</label>
                            <input type="number" value="{{ $product->price }}" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="label-control">Số lượng</label>
                            <input type="number" value="{{ $product->quantity }}" name="quantity" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="category_id" class="form-control">
                                <option value="">All danh mục</option>
                                @foreach ($categories as $category)
                                @if($product->category_id == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="label-control">Giảm giá</label>
                            <input type="number" value="{{ $product->discount }}" name="discount" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="label-control">Ảnh sản phảm</label>
                            <div class="form-ip-file">
                                <label for="image" class="label-ip-file">
                                    Upload Photo
                                </label>
                                <input type="file" name="image" value="{{ $product->image }}" onchange="uploadFile()" class="custom">
                            </div>
                            <p class="preview-image"><img src=" {{ asset('/images' . '/' . $product->image) }}"
                                    id="previewImage" alt=""></p>
                        </div>
                        <div class="form-check mb-3" style="padding-left: 1.5em">
                            <input class="form-check-input" name="outstanding" type="checkbox" value="1"
                                @if ($product->outstanding == 1) checked @endif>
                            <label class="form-check-label" for="flexCheckDisabled">
                                Nổi bật
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="label-control">Mô tả sản phẩm</label>
                            <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button name="sbm" type="submit" class="btn btn-success">Cập nhật</button>
                    <button type="reset" class="btn btn-warning">Làm mới</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('admin/js/input-file.js') }}"></script>
@endsection
