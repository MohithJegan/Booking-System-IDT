@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-white px-4 py-12">
    <div class="w-full max-w-md bg-white p-6">
        <h1 class="text-2xl font-bold text-center text-black mb-6">Log in to your account</h1>

        @if (session('status'))
            <div class="mb-4 text-green-600 font-medium">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4" aria-label="Login Form">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-black mb-1">Email Address</label>
                <input id="email" name="email" type="email" required autofocus placeholder="Enter your email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black focus:outline-none focus:ring-1 focus:ring-gray-500"
                    aria-required="true" />
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-black mb-1">Password</label>
                <input id="password" name="password" type="password" required placeholder="Enter your password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black focus:outline-none focus:ring-1 focus:ring-gray-500"
                    aria-required="true" />
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Forgot Password --}}
            @if (Route::has('password.request'))
                <div class="text-center">
                    <a href="{{ route('password.request') }}"
                       class="text-sm text-gray-600 hover:text-gray-900 underline focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Forgot your password?
                    </a>
                </div>
            @endif

            {{-- Login Button --}}
            <div>
                <button type="submit"
                    class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800 transition duration-200">
                    Log in
                </button>
            </div>
        </form>

        {{-- Sign up link --}}
        <div class="mt-6 text-center">
            <p class="text-sm text-black">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-dark-600 hover:underline">Sign up</a>
            </p>
        </div>
    </div>
</div>
@endsection
