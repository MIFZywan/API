<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Acompany</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;900&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
  @vite('resources/css/css/customer.css')
</head>

<body style="font-family: 'Maven Pro';" id="sales">
  <!-- SideBar -->
  @extends('component/sideBar')
  <div class="flex flex-col ml-64 p-4">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="bg-gray-100 border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  No
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Customer Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Date
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Product Name
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Total Volume
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Price
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Total Price
                </th>
              </tr>
            </thead>
            <tbody>
              @php
              $totalIncome = 0;
              @endphp

              @foreach ($sales as $index => $sale)

              @php
              $totalPrice = $sale['total_volume'] * $sale['product']['unit_price'];
              $totalIncome += $totalPrice;
              @endphp

              <tr class="bg-white-100 border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                  {{ $index + 1 }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $sale['customer']['name_customer'] }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ date('Y-m-d', strtotime($sale['invoice_date'])) }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $sale['product']['name_product'] }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{ $sale['total_volume'] }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Rp {{ number_format($sale['product']['unit_price'], 2, ',', '.') }}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Rp {{ number_format($totalPrice, 2, ',', '.') }}
                </td>
              </tr>

              <tr class="bg-gray-100 border-b">
                <td colspan="6" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left">
                  Total Income
                </td>
                <td colspan="6" class="text-sm text-gray-900 bg-white-100 font-light px-6 py-4 whitespace-nowrap text-center">
                  Rp {{ number_format($totalIncome, 2, ',', '.') }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</html>