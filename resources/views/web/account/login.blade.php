@extends('web.account.layout-account')
@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Chào mừng trở lại!</h1>
                                </div>
                                <div>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger">
                                                {{ $error }}
                                            </p>
                                        @endforeach
                                    @endif
                                    @if (session('errorLogin'))
                                        <p class="alert alert-danger">
                                            {{ session('errorLogin') }}
                                        </p>
                                    @endif
                                    @if (session('success'))
                                        <p class="alert alert-success">
                                            {{ session('success') }}
                                        </p>
                                    @endif
                                </div>
                                <form class="user" method="post" action="{{ route('login_action') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Nhớ tôi</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Đăng nhập
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Đăng nhập với tài khoản Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Đăng nhập với tài khoản Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('forgot_password') }}">Quên mật khẩu?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Tạo mới tài khoản!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
