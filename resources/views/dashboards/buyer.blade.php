@extends('layouts.app')

@section('content')
  <h1 class="text-2xl font-bold text-blue-700 mb-6">Buyer Dashboard</h1>

  <div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-lg font-semibold mb-4">Your Orders</h2>
    <table class="w-full border-collapse">
      <thead>
        <tr class="bg-blue-100">
          <th class="p-2 border">Order ID</th>
          <th class="p-2 border">Total</th>
          <th class="p-2 border">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach(\App\Models\Order::where('buyer_id', auth()->id())->get() as $order)
          <tr class="hover:bg-blue-50">
            <td class="p-2 border">#{{ $order->id }}</td>
            <td class="p-2 border">Rp{{ number_format($order->total, 0, ',', '.') }}</td>
            <td class="p-2 border capitalize">{{ $order->status }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
