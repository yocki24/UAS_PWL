<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;



class IndexController extends Controller
{
    public function index() {
        $products = Product::latest()->paginate(5);
        return view('index', ['products' => $products]);
    }

    
}
