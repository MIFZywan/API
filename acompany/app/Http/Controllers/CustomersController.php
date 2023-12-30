<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class CustomersController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.aibm.my.id/customers');
        $customer = $response['data']['customers'];

        return view('customer', ['customers' => $customer]);
    }
}
