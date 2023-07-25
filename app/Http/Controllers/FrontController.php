<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'PUBLISHED')->inRandomOrder()->take(8)->get();
        $banners = Post::where('category_id', 1)->where('status', 'PUBLISHED')->latest('created_at')->take(4)->get();
        $posts = Post::where('category_id', 2)->where('status', 'PUBLISHED')->inRandomOrder()->take(8)->get();
        return view('front.index', [
            'products' => $products,
            'banners' => $banners,
            'posts' => $posts,
        ]);
    }

    /** --------------- Start products controller ---------------- */
    public function products()
    {
        $data = Product::where('status', 'PUBLISHED')->get();

        return view('front.product.browse', [
            'data' => $data,
        ]);
    }
    public function product(Product $slug)
    {
        $product = $slug;
        $suggestion = Product::where('status', 'PUBLISHED')->inRandomOrder()->take(8)->get();
        return view('front.product.read', [
            'data' => $product,
            'suggestion' => $suggestion
        ]);
    }
    /** --------------- End products controller ---------------- */


    /** --------------- Start posts controller ---------------- */
    public function posts()
    {
        $data = Post::where('status', 'PUBLISHED')->where('category_id', 2)->get();

        return view('front.post.browse', [
            'data' => $data,
        ]);
    }
    public function post(Post $slug)
    {
        $post = Post::find($slug);
        $suggestion = Post::where('status', 'PUBLISHED')->inRandomOrder()->take(8)->get();
        return view('front.post.read', [
            'data' => $post[0],
            'suggestion' => $suggestion
        ]);
    }
    /** --------------- End posts controller ---------------- */


    /** --------------- Start contact-us controller ---------------- */
    public function contactUs()
    {
        return view('front.contactUs.index');
    }

    /** --------------- End contact-us controller ---------------- */
}
