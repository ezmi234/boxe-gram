@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div id="container">

        <!-- Header -->
        <header class="bg-white">
            <nav class="flex justify-between items-center w-[92%]  mx-auto">
                <div>
                    <img class="w-28 cursor-pointer" src="{{URL('img/logo.svg')}}" alt="logo">
                </div>
                <div class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                    <!--
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                        <li>
                            <a class="hover:text-gray-600" href="#">Products</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Solution</a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#"></a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Developers</a>
                        </li>
                        <li>
                            <a class="text-blue-600" href="">Profile</a>
                        </li>
                    </ul>
                    -->
                </div>
                <div class="flex items-center gap-6">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-orange-400 text-white px-5 py-2 rounded-full hover:bg-orange-600">Edit</button>
                    </form>
                    <img onclick="onToggleMenu(this)" class="w-12 cursor-pointer md:hidden" name="menu"  src="{{URL('img/menu-outline.svg')}}" alt="menu-icon">
                </div>
            </nav>
        <script>
            const navLinks = document.querySelector('.nav-links');
            function onToggleMenu(e){
                e.name = e.name === 'menu' ? 'close' : 'menu'
                e.src = `{{URL('img/${e.name}-outline.svg')}}`
                navLinks.classList.toggle('top-[9%]')
            }
        </script>

        </header>

        <!-- Header Profile -->
        @include('include.header-profile', [
            'user' => $user,
        ])

        @include('include.post', [
            'user' => $user,
        ])

    </div>
@endsection
