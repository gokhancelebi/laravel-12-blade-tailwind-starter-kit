@extends('layouts.guest')

@section('content')
<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-[#161615] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
    <div class="mb-4 text-sm text-[#706f6c] dark:text-[#A1A09A]">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password" class="block font-medium text-sm text-[#1b1b18] dark:text-[#EDEDEC]">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="block mt-1 w-full rounded-sm border-[#19140035] dark:border-[#3E3E3A] bg-white dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:border-[#f53003] dark:focus:border-[#FF4433] focus:ring focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:ring-opacity-50">
            @error('password')
                <p class="mt-2 text-sm text-[#f53003] dark:text-[#FF4433]">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="inline-flex items-center px-5 py-1.5 bg-[#1b1b18] dark:bg-[#eeeeec] border border-[#1b1b18] dark:border-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-sm text-sm leading-normal hover:bg-black hover:border-black dark:hover:bg-white dark:hover:border-white transition-colors">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</div>
@endsection 