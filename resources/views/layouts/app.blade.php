<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'Marketplace' }}</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- @vite('resources/css/app.css') -->
</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

  {{-- Navbar --}}
  <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between">
    <span class="font-bold">Marketplace</span>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-gray-200">Logout</button>
    </form>
  </nav>

  {{-- Main Content --}}
  <main class="flex-grow p-6">
    @yield('content')
  </main>

</body>
</html>
