@extends('layouts.client')
@section('content')
    <style>
        .hero__social {
            margin-top: 130px
        }
    </style>
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach ($sliders as $slider)
                <div class="hero__items set-bg" data-setbg="{{ $slider->image }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-8">
                                <div class="hero__text">
                                    <h6>{{ $slider->event }}</h6>
                                    <h2>{{ $slider->title }}</h2>
                                    <p>{{ $slider->summary }}</p>
                                    <a href="{{ route('shop') }}" class="primary-btn">Mua ngay <span
                                            class="arrow_right"></span></a>
                                    <div class="hero__social">
                                        @foreach ($socials as $social)
                                        <a href="{{$social->link}}"><i class="{{$social->class}}"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{ $bannerTop->image }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $bannerTop->name }}</h2>
                            <a href="{{ $bannerTop->link }}">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{ $bannerMiddle->image }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $bannerMiddle->name }}</h2>
                            <a href="{{ $bannerMiddle->link }}">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{ $bannerLast->image }}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>{{ $bannerLast->name }}</h2>
                            <a href="{{ $bannerLast->link }}">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản phẩm thịnh hành</li>
                        <li data-filter=".new-arrivals">Sản phẩm hot</li>
                        <li data-filter=".hot-sales">Sản phẩm giảm giá</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach ($products as $product)
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{ $product->hot == 1 ? 'new-arrivals' : 'hot-sales' }}">
                        <div class="{{ $product->hot == 1 ? 'product__item sale' : 'product__item' }}">
                            <div class="product__item__pic set-bg" data-setbg="{{ $product->images }}">
                                <span class="label">{{ $product->hot == 1 ? 'Hot' : 'Sale' }}</span>
                                <ul class="product__hover">
                                    @if (Auth::check())
                                        <li><a href="{{ route('favorite.add', $product->id) }}"><img
                                                    src="{{ asset('img/icon/heart.png') }}" alt=""></a>
                                        </li>
                                    @else
                                        <li><a onclick="alert('Vui lòng đăng nhập để yêu thích sản phẩm này')"
                                                href="{{ route('login') }}"><img src="{{ asset('img/icon/heart.png') }}"
                                                    alt=""></a>
                                        </li>
                                    @endif

                                    <li><a href="{{ route('detail', [$product->category->slug, $product->slug]) }}"><img
                                                src="{{ asset('img/icon/search.png') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $product->name }}</h6>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>{{ number_format($product->sale_price) ? number_format($product->sale_price) : number_format($product->price) }}
                                    <del>{{ number_format($product->sale_price) ? number_format($product->price) : null }}
                                    </del> VNĐ
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Thịnh Hành <br /> <span>{{ $banner->category }}</span> <br /> Giảm Giá</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{ $banner->image }}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Giảm Đến</span>
                            <h5>{{ number_format($banner->sale) }} VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Giảm giá trong tháng</span>
                        <h2>{{ $banner->name }}</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="{{ $banner->link }}" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{ $blog->image }}"></div>
                            <div class="blog__item__text">
                                <span><img src="{{ asset('img/icon/calendar.png') }}" alt="">
                                    {{ $blog->created_at->format('d F Y') }}</span>
                                <h5>{{ $blog->name }}</h5>
                                <a href="{{ route('blog.detail', $blog->slug) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
