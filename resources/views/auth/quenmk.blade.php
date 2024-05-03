@extends('layouts.client')
@section('content')
    <style>
        .header__menu ul li a {
            text-decoration: none
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Quên Mật Khẩu</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('home') }}">Login</a>
                            <span>Quên mật khẩu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-md mt-5">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills border-0 justify-content-center mb-3">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link pdcatt border-0 active" id="tab-login" data-bs-toggle="tab"
                            data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"
                            style="font-size: 20px;background-color:black">QUÊN MẬT KHẨU</button>
                    </li>
                </ul>

            </div>
            <!-- Tab panes -->
            <div class="tab-content border-0 mt-1">
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mt-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form class="pb-3" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="email" class="form-control p-3"
                                                name="email" placeholder="Nhập Email">
                                            @error('email')
                                                <span style="color: red"><i class="fa-solid fa-circle-exclamation fa-beat"></i>
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="submit" class="btn btn-dark">Xác nhận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3377b5a3db.js" crossorigin="anonymous"></script>
@endsection
