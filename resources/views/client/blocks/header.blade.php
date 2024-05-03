<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            @if (!Auth::check())
                <a href="{{ route('login') }}">Vui Lòng Đăng Nhập</a>
            @endif

            @if (Auth::check())
                <a href="#">Chào, {{ Auth::user()->name }}</a>
            @endif
        </div>

    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{ asset('img/icon/search.png') }}" alt=""></a>
        <a href="{{ route('favorite.index') }}"><img src="{{ asset('img/icon/heart.png') }}" alt=""></a>
        <a href="{{ route('cart.index') }}"><img src="{{ asset('img/icon/cart.png') }}" alt="">
            <span>{{ $cart->sum('quantity') }}</span></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            @if (!Auth::check())
                                <a href="{{ route('login') }}">Vui Lòng Đăng Nhập</a>
                            @endif
                            @if (Auth::check())
                                <a href="#">Chào, {{ Auth::user()->name }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                        <li><a href="{{ route('blog') }}">Bài viết</a></li>
                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('img/icon/search.png') }}"
                            alt=""></a>
                    <a href="{{ route('favorite.index') }}"><img src="{{ asset('img/icon/heart.png') }}"
                            alt=""></a>
                    <a href="{{ route('cart.index') }}"><img src="{{ asset('img/icon/cart.png') }}" alt="">
                        <span>{{ $cart->sum('quantity') }}</span></a>
                </div>
            </div>
            <div class="col-lg-1 col-md-1">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i></a>
                            <ul class="dropdown">
                                @if (!Auth::check())
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                @endif
                                @if (Auth::check())
                                    <li><a href="{{ route('account.profile') }}">Xem Tài khoản</a></li>
                                    @if (Auth::user()->role == 0)
                                        <li><a href="{{ route('admin.home') }}">Vào Admin</a></li>
                                    @endif
                                    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
