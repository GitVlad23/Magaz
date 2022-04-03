<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class MainController extends Controller
{
    public function main()
    {
        $products = Product::get();
        return view('main', compact('products'));
    }

    public function categories()    
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($category, $product = null)
    {
        return view('product', compact('product'));
    }
}