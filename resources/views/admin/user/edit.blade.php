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
            <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name"  class="label-control">Họ & Tên <span class="text-danger">*</span></label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email"  class="label-control">Email <span class="text-danger">*</span></label>
                            <input type="text" value="{{ $user->email }}" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="label-control">Mật khẩu <span class="text-danger">*</span></label>
                            <input type="password" placeholder="*********" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="c_password" class="label-control">Xác nhận mật khẩu <span
                                    class="text-danger">*</span></label>
                            <input type="password" placeholder="*********" name="password_confirmation" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Vai trò</label>
                            <select name="role_id" class="form-select form-control">
                                <option value="">All vai trò</option>
                                @foreach ($roles as $role)
                                @if($user->role_id == $role->id)
                                    <option value="{{ $role->id }}" selected>{{ $role->role_name }}</option>
                                @else
                                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                @endif
                                @endforeach
                            </select>
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
                            <p class="preview-image"><img src="@if($user->image) {{ asset('img_users/' . $user->image) }} @else {{ 'https://cdn-icons-png.flaticon.com/512/15/15287.png' }} @endif"
                                    id="previewImage" alt=""></p>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="label-control">Địa chỉ</label>
                            <input type="text" value="{{ $user->address }}" name="address" class="form-control">
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
