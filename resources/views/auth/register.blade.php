@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-white px-4 py-12">
    <div class="w-full max-w-xl bg-white p-6">
        <h2 class="text-2xl font-bold text-center text-black mb-4">Create your account!</h2>
        <p class="text-gray-700 mb-6">Enter your full details to register.</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-4" aria-label="Registration Form">
            @csrf

            {{-- First Name --}}
            <div>
                <label for="first_name" class="block text-black mb-1">First Name</label>
                <input id="first_name" name="first_name" required placeholder="First Name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black"
                    aria-required="true" />
            </div>

            {{-- Last Name --}}
            <div>
                <label for="last_name" class="block text-black mb-1">Last Name</label>
                <input id="last_name" name="last_name" required placeholder="Last Name"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black"
                    aria-required="true" />
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-black mb-1">Email Address</label>
                <input id="email" name="email" type="email" required placeholder="Email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black"
                    aria-required="true" />
            </div>

            {{-- Phone --}}
            <div>
                <label for="phone_number" class="block text-black mb-1">Phone Number</label>
                <input id="phone_number" name="phone_number" placeholder="Phone Number"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black" />
            </div>

            {{-- Address --}}
            <div>
                <label for="address" class="block text-black mb-1">Address</label>
                <input id="address" name="address" placeholder="Address"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black" />
            </div>

            {{-- City --}}
            <div>
                <label for="city" class="block text-black mb-1">City</label>
                <input id="city" name="city" placeholder="City"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black" />
            </div>

            {{-- Province --}}
            <div>
                <label for="province" class="block text-black mb-1">Province</label>
                <input id="province" name="province" placeholder="Province"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black" />
            </div>

            {{-- Postal Code --}}
            <div>
                <label for="postal_code" class="block text-black mb-1">Postal Code</label>
                <input id="postal_code" name="postal_code" placeholder="Postal Code"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black" />
            </div>

            {{-- Subscribe --}}
            <div>
                <label for="subscribe" class="block text-black mb-1">Subscribe to newsletter:</label>
                <select id="subscribe" name="subscribe"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black bg-white">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-black mb-1">Password</label>
                <input id="password" name="password" type="password" required placeholder="Password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black"
                    aria-required="true" />
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password_confirmation" class="block text-black mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="Confirm Password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md text-black"
                    aria-required="true" />
            </div>

            {{-- Submit Button --}}
            <button type="submit"
                class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800 transition duration-200">
                Register
            </button>
        </form>
    </div>
</div>
@endsection
