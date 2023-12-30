<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ProductsController extends Controller
{
    public function index() {
        $response = Http::get('https://api.aibm.my.id/products');
        $product = $response['data']['products'];
        return view('products', ['products' => $product]);
    }
}