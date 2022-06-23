@extends('web.account.layout-account')
@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Quên mật khẩu?</h1>
                                    <p class="mb-4">Nhập Email của bạn để đổi lại mật khẩu mới!</p>
                                </div>
                                @if($errors->any())
                                    @foreach ($errors->all() as $err)
                                        <div class="alert alert-danger">
                                            {{$err}}
                                        </div>
                                    @endforeach
                                @endif
                                <form class="user" method="post" action="{{ route('reset_password.action', $user->id) }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputEmail"
                                            aria-describedby="emailHelp" name="password" placeholder="New Password...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputEmail"
                                            aria-describedby="emailHelp" name="password_confirmation" placeholder="Password confirmation...">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Xác nhận    
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Tạo tài khoản!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Đã có tài khoản? Đăng nhập!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
