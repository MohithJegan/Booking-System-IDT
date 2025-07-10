@extends('layouts.app')

@section('title', 'Terms & Conditions')

@section('content')
<div class="px-4 sm:px-6 lg:px-8 py-10 bg-white text-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <h1 class="text-2xl sm:text-3xl font-bold text-center mb-6">Terms and Conditions</h1>

        <p class="text-gray-700 mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>


        @for ($i = 1; $i <= 5; $i++)
            <h2 class="text-xl font-semibold mb-2">Title {{ $i }}</h2>
            <p class="text-gray-700 mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo risus vel est faucibus lobortis. 
                Etiam ac purus feugiat, interdum erat nec, ultricies sem. Pellentesque ultricies ultrices molestie
            </p>
        @endfor
    </div>
</div>
@endsection
