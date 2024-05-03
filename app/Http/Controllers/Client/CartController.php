<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Color;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', auth()->id())->get();
        $couponDiscount = session()->get('discount', 0);
        $couponId = null;

        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item->price * $item->quantity;
        }

        $totalPrice = $subTotal - $couponDiscount;
        if ($cart->isEmpty()) {
            return redirect()->route('home')->with('ermsg', 'Giỏ hàng trống');
        }
        return view('client.pages.cart', compact('cart', 'couponDiscount','totalPrice'));
    }
    public function add(Product $product, Request $request)
    {
        $quantity = $request->quantity ? floor($request->quantity) : 1;
        $size = Size::findOrFail($request->size_id)->name;
        $color = Color::findOrFail($request->color_id)->name;
        $user_id = auth()->id();
        $cartExist = Cart::where([
            'user_id' => $user_id,
            'product_id' => $product->id,
            'color' => $color,
            'size' => $size,
        ])->first();

        if ($cartExist) {
            $cartExist->increment('quantity', $quantity);
            return redirect()->route('cart.index')->with('ssmsg', 'Thêm vào giỏ hàng thành công');
        } else {
            $data = [
                'user_id' => $user_id,
                'product_id' => $product->id,
                'size' => $size,
                'color' =>  $color,
                'quantity' => $quantity,
            ];
            if (Cart::create($data)) {
                return redirect()->route('cart.index')->with('ssmsg', 'Thêm vào giỏ hàng thành công');
            }
        }
        return redirect()->route('home')->with('ermsg', 'Thêm vào giỏ hàng thất bại, vui lòng thử lại');
    }
    public function update($id, Request $request)
    {
        $quantity = $request->quantity;
        $carts = Cart::find($id);

        if ($carts) {
            $carts->update([
                'quantity' => $quantity
            ]);
            return redirect()->route('cart.index')->with('ssmsg', 'Cập nhật giỏ hàng thành công');
        }
        return redirect()->route('cart.index')->with('ermsg', 'Cập nhật giỏ hàng thất bại');
    }

    public function delete($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
            return redirect()->route('cart.index')->with('ssmsg', 'Đã xóa sản phẩm khỏi giỏ hàng');
        }
        return redirect()->route('cart.index')->with('ermsg', 'Xóa sản phẩm khỏi giỏ hàng thất bại');
    }

    public function applyCoupon(Request $request)
    {
        $couponCode = $request->input('coupon_code');
        $cart = Cart::where('user_id', auth()->id())->get();
        
        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item->price * $item->quantity;
        }
        $coupon = Coupon::where('code', $couponCode)
            ->whereDate('start_date', '<=', now())
            ->whereDate('end_date', '>=', now())
            ->first();

        if ($coupon) {
            if ($subTotal < $coupon->min_price) {
                return redirect()->back()->with('ermsg', 'Mã giảm giá không áp dụng với đơn hàng bé hơn ' . number_format($coupon->min_price));
            }
            session()->put('discount', $coupon->discount);
            session()->put('applied_coupon_code', $couponCode);

            return redirect()->back()->with('ssmsg', 'Đã áp dụng mã giảm giá');
        }else {
            return redirect()->back()->with('ermsg', 'Mã giảm giá không hợp lệ');
        }
    }
}
