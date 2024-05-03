@extends('layouts.client')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="{{ route('shop') }}" method="GET">
                                <input type="text" name="query" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach ($categories as $category)
                                                        <li><a href="{{ route('shop', $category->slug) }}">{{ $category->name }}
                                                            </a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    @foreach ($brands as $brand)
                                                        <li><a
                                                                href="{{ route('shop', array_merge(request()->except('brand'), ['brand' => $brand->slug, 'category' => $categorySlug])) }}">{{ $brand->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a
                                                            href="{{ route('shop', array_merge(request()->except('price_range'), ['category' => $categorySlug, 'price_range' => '0-150000'])) }}">0
                                                            - 150,000 VNĐ</a></li>
                                                    <li><a
                                                            href="{{ route('shop', array_merge(request()->except('price_range'), ['category' => $categorySlug, 'price_range' => '150000-270000'])) }}">150,000
                                                            - 270,000 VNĐ</a></li>
                                                    <li><a
                                                            href="{{ route('shop', array_merge(request()->except('price_range'), ['category' => $categorySlug, 'price_range' => '270000-400000'])) }}">270,000
                                                            - 400,000 VNĐ</a></li>
                                                    <li><a
                                                            href="{{ route('shop', array_merge(request()->except('price_range'), ['category' => $categorySlug, 'price_range' => '400000+'])) }}">400,000
                                                            VNĐ +</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Đang xem <b>1–{{ $products->count() }}</b> trên <b>{{ $count }}</b> sản phẩm
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <form action="{{ route('shop', ['category' => $categorySlug]) }}" method="GET">
                                        @if (request('brand'))
                                            <input type="hidden" name="brand" value="{{ request('brand') }}">
                                        @endif

                                        <input type="hidden" name="price_range" value="{{ request('price_range') }}">
                                        <input type="hidden" name="query" value="{{ request('query') }}">
                                        <p>Lọc sản phẩm:</p>
                                        <select name="sort">
                                            <option value="az">A-Z</option>
                                            <option value="za">Z-A</option>
                                            <option value="price_low_high">Giá tăng dần</option>
                                            <option value="price_high_low">Giá giảm dần</option>
                                        </select>
                                        <button class="btn-dark" type="submit">Lọc</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $item)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="{{ $item->hot == 1 ? 'product__item sale' : 'product__item' }}">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ $item->images }}">
                                        {!! $item->hot == 1
                                            ? '<span class="label">Hot</span>'
                                            : ($item->sale_price > 0
                                                ? '<span class="label">Sale</span>'
                                                : '') !!}
                                        <ul class="product__hover">
                                            @if (Auth::check())
                                                <li><a href="{{ route('favorite.add', $item->id) }}"><img
                                                            src="{{ asset('img/icon/heart.png') }}" alt=""></a>
                                                </li>
                                            @else
                                                <li><a onclick="alert('Vui lòng đăng nhập để yêu thích sản phẩm này')"
                                                        href="{{ route('login') }}"><img
                                                            src="{{ asset('img/icon/heart.png') }}" alt=""></a>
                                                </li>
                                            @endif
                                            <li><a href="{{ route('detail', [$item->category->slug, $item->slug]) }}"><img
                                                        src="{{ asset('img/icon/search.png') }}" alt=""></a></li>
                                        </ul>

                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{ $item->name }}</h6>
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5>{{ number_format($item->sale_price) ? number_format($item->sale_price) : number_format($item->price) }}
                                            <del>{{ number_format($item->sale_price) ? number_format($item->price) : null }}
                                            </del> VNĐ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination justify-content-center">
                        {{ $products->appends(request()->all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
