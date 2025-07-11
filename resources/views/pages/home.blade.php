@extends('layouts.app')

@section('content')
    <div class="flex items-center pt-[78px]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column - Content -->
                <div class="space-y-6">
                    <h1 class="text-5xl font-semibold text-black">Intro</h1>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Black Button -->
                        <a href="{{ route('register') }}"
                            class="bg-black text-white px-8 py-3 font-medium hover:bg-gray-800 transition-colors"
                            style="border-radius: 7px; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                            Sign up
                        </a>
                        <!-- White Button with Border -->
                        <a href="{{ route('about') }}"
                            class="bg-white text-black px-8 py-3 rounded-lg font-medium border-2 border-black hover:bg-gray-50 transition-colors"
                            style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="flex justify-center lg:justify-end">
                    <div class="w-full max-w-md">
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                            alt="Calendar booking system" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection