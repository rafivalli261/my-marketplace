@extends('layouts.app')

@section('content')
  <h1 class="text-2xl font-bold text-blue-700 mb-6">Seller Dashboard</h1>

  <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">+ Add Product</a>

  <div class="mt-6 bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold mb-4">Your Products</h2>
    <table class="w-full border-collapse">
      <thead>
        <tr class="bg-blue-100">
          <th class="p-2 border">Name</th>
          <th class="p-2 border">Price</th>
          <th class="p-2 border">Stock</th>
        </tr>
      </thead>
      <tbody>
        @foreach(\App\Models\Product::where('seller_id', auth()->id())->get() as $product)
          <tr class="hover:bg-blue-50">
            <td class="p-2 border">{{ $product->name }}</td>
            <td class="p-2 border">Rp{{ number_format($product->price, 0, ',', '.') }}</td>
            <td class="p-2 border">{{ $product->stock }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
