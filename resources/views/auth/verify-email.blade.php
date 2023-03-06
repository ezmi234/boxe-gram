@extends('layouts.app')

@section('title', 'verify-email')

@section('content')


    <div id="app">

        <!-- Header -->
        <header class="bg-white">
            <nav class="flex justify-between items-center w-[92%]  mx-auto">
                <div>
                    <img class="w-24 cursor-pointer" src="{{URL('img/logo.svg')}}" alt="logo">
                </div>
                <div
                    class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                        <li>
                            <a class="hover:text-gray-600" href="#">Products</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Solution</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Resource</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Developers</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <button class="bg-blue-500 text-white px-5 py-2 rounded-full hover:bg-blue-700">Sign in</button>
                    <img onclick="onToggleMenu(this)" class="w-12 cursor-pointer md:hidden" name="menu"  src="{{URL('img/menu-outline.svg')}}" alt="menu-icon">
                </div>
            </nav>
        </header>

        <div class="flex mt-8 md:mt-32 flex-col items-center justify-center py-6 sm:py-12">
            <div class="w-full text-center">
            <h3 class="mb-2 text-[42px] font-bold text-zinc-800">Check your inbox</h3>
            <p class="mb-2 text-lg text-zinc-500">We are glad, that you’re with us! We’ve sent you a verification link to the email address <span class="font-medium text-indigo-500">{{ Auth::user()->email }}</span>.</p>
            <a href="/login" class="mt-3 inline-block w-80 rounded bg-indigo-600 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">Open the App →</a>
            </div>
        </div>

    </div>
@endsection
