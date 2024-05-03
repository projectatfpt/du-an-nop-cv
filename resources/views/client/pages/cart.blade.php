@extends('layouts.client')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <a href="{{route('shop')}}">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <a href="{{ route('detail', [$item->product->category->slug, $item->product->slug]) }}"><img
                                                        src="{{ $item->product->images }}"
                                                        alt=""></a>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="name">
                                                <h5>{{ $item->product->name }}</h5>
                                                <br> {{$item->color}}<br>{{$item->size}}
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                {{ number_format($item->price) }}
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <form action="{{ route('cart.update', $item) }}" method="get">
                                                <div class="quantity">
                                                    <input type="hidden" name="color" value="{{ $item->color }}">
                                                    <input type="hidden" name="size" value="{{ $item->size }}">
                                                    <div class="pro-qty-2">
                                                        <button style="border: 0; display: inline-block;"
                                                            class="fa fa-angle-left dec qtybtn"></button>
                                                        <input type="text" name="quantity" value="{{ $item->quantity }}"
                                                            style="display: inline-block;">
                                                        <button style="border: 0; display: inline-block;"
                                                            class="fa fa-angle-right inc qtybtn"></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="cart__price">{{ number_format($item->price * $item->quantity) }} VNĐ</td>
                                        <td class="cart__close"><a
                                                onclick="return confirm('Bạn có chắc muốn xóa {{ $item->product->name }} {{$item->color}} {{$item->size}} khỏi giỏ hàng?')"
                                                href="{{ route('cart.delete', $item) }}"><i
                                                    class="fa fa-close"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{route('shop')}}">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Mã giảm giá</h6>
                        <form action="{{ route('cart.apply_coupon') }}" method="POST">
                            @csrf
                            <input type="text" name="coupon_code" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Tổng giỏ hàng</h6>
                        <ul>
                            <li>Tổng tiền <span>{{ number_format($item->subTotal) }} VNĐ</span></li>
                            <li>Ưu Đãi <span>{{ number_format($couponDiscount) }} VNĐ</span></li>
                            <li>Tổng <span>{{ number_format($totalPrice<0 ? 0 : $totalPrice ) }} VNĐ</span></li>
                        </ul>
                        <a href="{{ route('checkout.index') }}" class="primary-btn">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
