<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- @vite('resources/css/app.css') -->
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold text-blue-600 mb-6 text-center">Login</h2>

    @if ($errors->any())
      <div class="mb-4 p-3 bg-red-100 text-red-600 rounded">
        {{ $errors->first() }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
      @csrf
      <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
      <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Login</button>
    </form>

    <p class="text-center text-gray-600 mt-4">
      Don’t have an account? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
    </p>
  </div>

</body>
</html>
