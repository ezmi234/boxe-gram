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
                            <a class="hover:text-gray-600" href="#"></a>
                        </li>
                        <li>
                            <a class="hover:text-gray-600" href="#">Developers</a>
                        </li>
                        <li>
                            <a class="text-blue-600" href="">Profile</a>
                        </li>
                    </ul>
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

        <!-- component -->
        <div class="relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-16">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full flex justify-center">
                        <div class="relative">
                            <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                        </div>
                    </div>
                    <div class="w-full text-center mt-20">
                        <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                            <div class="p-3 text-center">
                                <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">3,360</span>
                                <span class="text-sm text-slate-400">Photos</span>
                            </div>
                            <div class="p-3 text-center">
                                <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">2,454</span>
                                <span class="text-sm text-slate-400">Followers</span>
                            </div>

                            <div class="p-3 text-center">
                                <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">564</span>
                                <span class="text-sm text-slate-400">Following</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{{ $user->name }}</h3>
                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                        <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Paris, France
                    </div>
                </div>
                <div class="mt-6 py-6 border-t border-slate-200 text-center">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4">
                            <p class="font-light leading-relaxed text-slate-600 mb-4">An artist of considerable range, Mike is the name taken by Melbourne-raised, Brooklyn-based Nick Murphy writes, performs and records all of his own music, giving it a warm.</p>
                            <a href="#" class="font-normal text-slate-700 hover:text-slate-400">Follow Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
