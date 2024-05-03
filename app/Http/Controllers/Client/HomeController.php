<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\BannerBottom;
use App\Models\BannerTop;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->orderBy('id', 'desc')->get();
        $socials = SocialNetwork::all();
        $bannerTop = BannerTop::first();
        $bannerMiddle = BannerTop::skip(1)->first();
        $bannerLast = BannerTop::skip(2)->first();
        $hotProducts = Product::where('status', 1)->where('hot', 1)->take(4)->get();
        $saleProducts = Product::where('status', 1)->where('sale_price', '>', 0)->take(4)->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->take(3)->get();
        $products = $this->interleave($hotProducts, $saleProducts);
        $banner= BannerBottom::where('status', 1)->first();

        return view('client.pages.home', compact('products', 'blogs', 'sliders','socials','bannerTop', 'bannerMiddle', 'bannerLast','banner'));
    }

    private function interleave($array1, $array2)
    {
        $result = [];
        $length = max(count($array1), count($array2));
        for ($i = 0; $i < $length; $i++) {
            if (isset($array1[$i])) {
                $result[] = $array1[$i];
            }
            if (isset($array2[$i])) {
                $result[] = $array2[$i];
            }
        }
        return $result;
    }
}
