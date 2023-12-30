<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acompany</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/customer.css') }}">
    @vite('resources/css/css/customer.css')
</head>

<body style="font-family: 'Maven Pro';">
    <!-- SideBar -->
    @extends('component/sideBar')

    @section('content')
      <h1> class="heading-title">Tambah Produk</h1>

      <form action="#" method="POST" enctype="multipart/form-data" class="form">
    
      <div class="form-group">
        <label for="name" class="form-label">Nama Produk</label>
        <input type="text" id="name" name="name" class="form-input">
    </div>
    
    <div class="form-group">
        <label for="image" class="form-label">Foto Produk</label>
        <input type="file" id="image" name="image" class="form-input-file">

    <div class="form-group">
        <label for="price" class="form-label">Harga Produk</label>
        <input type="number" id="price" name="price" class="form-input">
    </div>

    <div class="form-group">
        <label for="qty" class="form-label">Stok Produk</label>
        <input type="number" id="qt" name="qty" class="form-input">
    </div>

    <div class="form-group">
        <label for="description" class="form=label">Deskripsi Produk</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group-button">
        <button type="submit" class="form-button">Tambah Produk</button>
    </div>
</form>
@endsection
    