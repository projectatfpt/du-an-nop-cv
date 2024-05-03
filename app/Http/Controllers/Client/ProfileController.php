<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangPassRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $users = auth()->user();
        return view('client.pages.accounts.profile', compact('users'));
    }
    public function hoadon()
    {
        $users = auth()->user();
        $orders = Order::where('user_id', $users->id)->paginate(6);
        return view('client.pages.accounts.hoadon', compact('orders'));
    }
    public function showhoadon($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return redirect()->route('account.profile')->with('ermsg', 'Không tìm thấy hóa đơn');
        }
        return view('client.pages.accounts.hoadonchitiet', compact('order'));
    }
    public function update()
    {
        $users = auth()->user();
        return view('client.pages.accounts.update', compact('users'));
    }
    public function check_update(ProfileRequest $request)
    {
        $users = auth()->user();
        $data = $request->only('name', 'phone', 'email', 'address');
        $check = User::where('id', $users->id)->update($data);
        if ($check) {
            return redirect()->route('account.profile')->with('ssmsg', 'Cập nhật thông tin thành công');
        }
        return redirect()->route('account.update')->with('ermsg', 'Cập nhật thông tin thất bại');
    }
    public function updatePass()
    {
        $users = auth()->user();
        return view('client.pages.accounts.doimatkhau', compact('users'));
    }
    public function check_updatePass(ChangPassRequest $request)
    {
        $users = auth()->user();
        $data['password'] = bcrypt($request->password);
        if (User::where('id', $users->id)->update($data)) {
            return redirect()->route('account.profile')->with('ssmsg', 'Đổi mật khẩu thành công');
        }
        return redirect()->route('account.update')->with('ermsg', 'Đổi mật khẩu thất bại');
    }
}
