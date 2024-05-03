<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index()
    {
        $users = auth()->user();
        $couponDiscount = session()->get('discount', 0);
        return view('client.pages.checkout', compact('users', 'couponDiscount'));
    }
    public function checkout(Request $request)
    {
        $user = auth()->user();
        $data = $request->only('name', 'email', 'phone', 'address');
        $data['user_id'] = $user->id;

        $couponDiscount = session()->get('discount', 0);
        $couponId = null;

        if ($couponDiscount > 0) {
            $coupon = Coupon::where('code', session()->get('applied_coupon_code'))->first();
            if ($coupon) {
                $couponId = $coupon->id;
            }
        }

        $data['coupon_id'] = $couponId;

        if ($order = Order::create($data)) {
            $token = Str::random(40);
            foreach ($user->carts as $cart) {
                $orderDetailData = [
                    'order_id' => $order->id,
                    'product_id' => $cart->product_id,
                    'price' => $cart->price,
                    'quantity' => $cart->quantity,
                ];
                OrderDetail::create($orderDetailData);
            }

            Cart::where('user_id', $user->id)->delete();
            session()->forget('discount');
            session()->forget('applied_coupon_code');
            $order->token = $token;
            $order->save();
            Mail::to($user->email)->send(new OrderMail($order, $token));
            return redirect()->route('account.hoadon')->with('ssmsg', 'Vui lòng check mail để xác thực đơn hàng');
        }
    }
    public function verify($token)
    {
        $order = Order::where('token', $token)->first();
        if ($order) {
            $order->token = null;
            $order->status = 1;
            $order->save();
            return redirect()->route('account.hoadon')->with('ssmsg', 'Xác thực đơn hàng thành công');
        }
        return redirect()->route('home')->with('ermsg', 'Đừng spam lỗi đấy');
    }
}
