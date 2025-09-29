<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Marketplace Home</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- @vite('resources/css/app.css') -->
</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

  {{-- Navbar --}}
  <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between">
    <span class="font-bold text-xl">My Marketplace</span>
    <div>
      <a href="{{ route('login') }}" class="px-4 py-2 bg-white text-blue-600 rounded-lg hover:bg-gray-100">Login</a>
    </div>
  </nav>

  {{-- Hero Section --}}
  <main class="flex-grow flex flex-col items-center justify-center text-center p-8">
    <h1 class="text-4xl font-bold text-blue-700 mb-4">Welcome to My Marketplace</h1>
    <p class="text-gray-600 mb-6 max-w-2xl">
      A simple multi-role e-commerce platform built with Laravel 12 + Tailwind. 
      Admins manage the system, Sellers list products, and Buyers shop with ease.
    </p>
    <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-lg">
      Get Started
    </a>
  </main>

  {{-- Footer --}}
  <footer class="bg-blue-600 text-white text-center py-3">
    © {{ date('Y') }} My Marketplace. All rights reserved.
  </footer>

</body>
</html>
