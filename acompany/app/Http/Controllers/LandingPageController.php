<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.aibm.my.id/customers');
        $customer = $response['data']['customers'];

        $totalCustomers = count($customer);

        $response = Http::get('https://api.aibm.my.id/products');
        $product = $response['data']['products'];

        $totalProducts = count($product);
        $totalStocks = 0;
        $monthLabels = [];
        $productData = [];

        foreach ($product as $product) {
            if (isset($product['stock'])) {
                $totalStocks += $product['stock'];
            }
            $monthLabels[] = date('M', strtotime($product['last_update']));
        }

        $monthLabels = array_unique($monthLabels);
        // $allMonths = [
        //     'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
        // ];
        // $monthLabels = array_merge($allMonths, array_diff($monthLabels, $allMonths));

        $response = Http::get('https://api.aibm.my.id/sales');
        $sales = $response['data']['sales'];

        $totalPrice = 0;
        $totalProfit = 0;

        foreach ($sales as $sale) {
            $totalPrice += $sale['total_volume'] * $sale['product']['unit_price'];
            foreach ($product as $product) {
                $totalProfit += $totalPrice - ($sale['total_volume'] * $sale['product']['product_cost']);
            }
        }
        return view('landingPage', compact('totalCustomers', 'totalProducts', 'totalStocks', 'totalProfit', 'totalPrice', 'monthLabels', 'productData'));
    }
}
