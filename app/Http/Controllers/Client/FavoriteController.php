<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorite = Favorite::where('user_id', auth()->id())->get();
        if ($favorite->isEmpty()) {
            return redirect()->route('home')->with('ermsg', 'Bạn chưa yêu thích sản phẩm nào!');
        }
        return view('client.pages.favorite', compact('favorite'));
    }
    public function add(Product $product)
    {
        $user_id = auth()->id();
        $favoriteExist = Favorite::where([
            'user_id' => $user_id,
            'product_id' => $product->id,
        ])->first();

        if ($favoriteExist) {
            return redirect()->route('home')->with('ermsg', 'Đã có sản phẩm trong yêu thích');
        } else {
            $data = [
                'user_id' => $user_id,
                'product_id' => $product->id,
            ];
            if (Favorite::create($data)) {
                return redirect()->route('favorite.index')->with('ssmsg', 'Thêm vào yêu thích thành công');
            }
        }
        return redirect()->route('home')->with('ermsg', 'Thêm vào yêu thích thất bại, vui lòng thử lại');
    }
    
    public function delete($product_id)
    {
        Favorite::where([
            'user_id' => auth()->id(),
            'product_id' => $product_id
        ])->delete();
        return redirect()->route('favorite.index')->with('ssmsg', 'Đã xóa sản phẩm khỏi yêu thích');
    }
}
