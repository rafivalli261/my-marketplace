@extends('layouts.app')

@section('content')
  <h1 class="text-2xl font-bold text-blue-700 mb-6">Admin Dashboard</h1>

  <div class="grid grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow">
      <h2 class="text-lg font-semibold">Total Users</h2>
      <p class="text-3xl text-blue-600">{{ \App\Models\User::count() }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
      <h2 class="text-lg font-semibold">Total Products</h2>
      <p class="text-3xl text-blue-600">{{ \App\Models\Product::count() }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
      <h2 class="text-lg font-semibold">Total Orders</h2>
      <p class="text-3xl text-blue-600">{{ \App\Models\Order::count() }}</p>
    </div>
  </div>
@endsection
