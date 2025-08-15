<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modern Register Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
  <div class="bg-gray-900 p-8 rounded-2xl shadow-lg w-full max-w-sm border border-gray-700">
    <div class="flex justify-center mb-6">
        <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo/ugnayanloog.png') }}" alt="My Logo" class="h-10 w-auto">
       </a>
    </div>
    <h1 class="text-white text-3xl font-bold mb-6 text-center">Register</h1>
    <form action="{{ route('register') }}" method="POST" class="space-y-5">
      @csrf
      <div>
        <label for="name" class="block text-sm text-gray-400 mb-2">Full Name</label>
        <input id="name" name="name" type="text" required
          class="w-full px-4 py-2 rounded-lg bg-black border border-gray-700 text-white focus:outline-none focus:border-white" />
      </div>
      <div>
        <label for="email" class="block text-sm text-gray-400 mb-2">Email</label>
        <input id="email" name="email" type="email" required
          class="w-full px-4 py-2 rounded-lg bg-black border border-gray-700 text-white focus:outline-none focus:border-white" />
      </div>
      <div>
        <label for="password" class="block text-sm text-gray-400 mb-2">Password</label>
        <input id="password" name="password" type="password" required
          class="w-full px-4 py-2 rounded-lg bg-black border border-gray-700 text-white focus:outline-none focus:border-white" />
      </div>
      <div>
        <label for="password_confirmation" class="block text-sm text-gray-400 mb-2">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required
          class="w-full px-4 py-2 rounded-lg bg-black border border-gray-700 text-white focus:outline-none focus:border-white" />
      </div>
      <button type="submit"
        class="w-full py-3 bg-white text-black font-semibold rounded-xl hover:bg-gray-200 active:bg-gray-300 transition duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-white">
        Sign Up <a href="{{ route('dashboard') }}" class="text-black hover:underline"></a>
      </button>
    </form>
    <p class="text-gray-500 text-sm mt-6 text-center">
      Already have an account? <a href="{{ route('login') }}" class="text-white hover:underline">Sign in</a>
    </p>
  </div>
</body>
</html>
