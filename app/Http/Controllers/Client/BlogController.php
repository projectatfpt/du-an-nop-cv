<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->paginate(9);
        return view('client.pages.blog', compact('blogs'));
    }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        if ($blog) {
            $relatedBlog = $blog->where('status', 1)->where('slug', '!=', $slug)->orderBy('id', 'desc')->take(3)->get();
            return view('client.pages.blog-details', compact('blog', 'relatedBlog'));
        }
        return redirect()->route('home')->with('ermsg', 'Không tìm thấy bài viết này');
    }
}
