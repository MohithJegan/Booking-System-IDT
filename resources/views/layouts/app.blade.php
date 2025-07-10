<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">

    {{-- Navbar --}}
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-purple-600">Booking System</a>

            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-purple-600">Home</a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-purple-600">Services</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-purple-600">About Us</a>
                <a href="{{ route('privacy') }}" class="text-gray-700 hover:text-purple-600">Privacy</a>
                <a href="{{ route('terms') }}" class="text-gray-700 hover:text-purple-600">Terms</a>

                @guest
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-purple-600">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-purple-600">Register</a>
                @else
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-purple-600">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-purple-600">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="container mx-auto px-4 py-4">
        @yield('content')
    </main>

</body>
</html>
