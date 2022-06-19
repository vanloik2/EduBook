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
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="name" class="label-control">Tên danh mục</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class=" mt-3">
                        <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                        <button type="reset" class="btn btn-warning">Làm mới</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
