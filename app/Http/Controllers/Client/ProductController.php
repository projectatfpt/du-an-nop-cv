<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, $categorySlug = null)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::query();
        $count = Product::count();
        $query = $request->input('query');
        $products = $product->where('name', 'like', '%' . $query . '%');

        if ($categorySlug) {
            $cate = Category::where('slug', $categorySlug)->firstOrFail();
            $product->where('category_id', $cate->id);
        }
        if ($request->has('price_range')) {
            $priceRange = explode('-', $request->input('price_range'));
            if (count($priceRange) == 2) {
                $product->whereBetween('price', [$priceRange[0], $priceRange[1]]);
            } elseif ($priceRange[0] == '400000+') {
                $product->where('price', '>=', '400000');
            }
        }
        if ($request->has('brand')) {
            $brand = Brand::where('slug', $request->input('brand'))->first();
            $product->where('brand_id', $brand->id);
        }
        if ($request->has('sort')) {
            switch ($request->input('sort')) {
                case 'az':
                    $product->orderBy('name', 'asc');
                    break;
                case 'za':
                    $product->orderBy('name', 'desc');
                    break;
                case 'price_low_high':
                    $product->orderByRaw('IFNULL(sale_price, price) ASC');
                    break;
                case 'price_high_low':
                    $product->orderByRaw('IFNULL(sale_price, price) DESC');
                    break;
                default:
                    $product->orderBy('id', 'desc');
                    break;
            }
        }

        $products = $product->where('status',1)->paginate(9);
        return view('client.pages.shop', compact('products', 'brands', 'categories', 'count', 'query', 'categorySlug'));
    }

    public function show($categorySlug, $productSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $products = Product::with('colors', 'sizes', 'tags')
            ->where('slug', $productSlug)
            ->where('category_id', $category->id)
            ->firstOrFail();
        $comments = Comment::where('product_id', $products->id)->orderBy('id', 'DESC')->get();
        $categoryId = $products->category_id;
        $relatedProducts = $this->relatedProductsByCategory($categoryId, $products->id);
        return view('client.pages.detail', compact('products', 'category', 'comments', 'relatedProducts'));
    }
    public function comment($proId)
    {
        $data = request()->all('comment');
        $data['product_id'] = $proId;
        $data['user_id'] = auth()->id();
        if (Comment::create($data)) {
            return redirect()->back()->with('ssmsg', 'Đã gửi');
        }
        return redirect()->back();
    }
    public function deleteComment($id)
    {
        $delcom = Comment::find($id);
        if ($delcom) {
            $delcom->delete();
            return redirect()->back()->with('ssmsg', 'Đã xóa bình luận');
        }
        return redirect()->back()->with('ermsg', 'Xóa bình luận thất bại');
    }
    public function relatedProductsByCategory($categoryId, $productId)
    {
        $relatedProducts = Product::where('category_id', $categoryId)
            ->where('status', 1)
            ->where('id', '!=', $productId)
            ->take(4)
            ->get();
        return $relatedProducts;
    }
}
