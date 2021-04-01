<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $query = Product::query();
        $query->where('name', 'LIKE', "%{$name}%");
        $products = $query->get();
        return view('ec.search', compact('products'));
    }
}
