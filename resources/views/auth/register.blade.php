@extends('layouts.guest')

@section('content')
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-[#161615] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
    <div class="mb-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
        {{ __('Create a new account to get started.') }}
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-[#1b1b18] dark:text-[#EDEDEC]">{{ __('Name') }}</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                class="block mt-1 w-full rounded-sm border-[#19140035] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:border-[#f53003] dark:focus:border-[#FF4433] focus:ring focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:ring-opacity-50">
            @error('name')
                <p class="mt-2 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-[#1b1b18] dark:text-[#EDEDEC]">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                class="block mt-1 w-full rounded-sm border-[#19140035] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:border-[#f53003] dark:focus:border-[#FF4433] focus:ring focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:ring-opacity-50">
            @error('email')
                <p class="mt-2 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-[#1b1b18] dark:text-[#EDEDEC]">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="new-password"
                class="block mt-1 w-full rounded-sm border-[#19140035] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:border-[#f53003] dark:focus:border-[#FF4433] focus:ring focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:ring-opacity-50">
            @error('password')
                <p class="mt-2 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-[#1b1b18] dark:text-[#EDEDEC]">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                class="block mt-1 w-full rounded-sm border-[#19140035] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:border-[#f53003] dark:focus:border-[#FF4433] focus:ring focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:ring-opacity-50">
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-[#706f6c] dark:text-[#A1A09A] hover:underline" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="ml-4 inline-flex items-center px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] border border-[#1b1b18] dark:border-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-sm text-sm leading-normal hover:bg-black hover:border-black dark:hover:bg-white dark:hover:border-white transition-colors">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</div>
@endsection 