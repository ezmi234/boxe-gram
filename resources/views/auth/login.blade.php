@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div id="container">

         <!-- Container -->
        <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10 mx-auto">
            <!-- Login component -->
            <div class="flex shadow-md">
                <!-- Login form -->
                <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
                <div class="w-72">
                    <!-- Heading -->
                    <h1 class="text-xl font-semibold text-orange-500">FoodNation</h1>
                    <small class="text-orange-300">Share and see recipes from all over the world.</small>
                    <!-- Form -->
                    <form method="POST" action="" class="mt-4">
                        @csrf
                        @if(\Session::has('message'))
                        <span class="text-red-500 text-xs">
                            {{\Session::get('message')}}
                        </span>
                        @endif
                        <div class="mb-3">
                            <label for="email" class="mb-2 block text-xs font-semibold">Email</label>
                            <input id="email" name="email" type="email" placeholder="Enter your email" autofocus class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" />
                            @if ($errors->has('email'))
                                <span class="text-red-500 text-xs">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="password" class="mb-2 block text-xs font-semibold">Password</label>
                            <input id="password" name="password" type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" />
                            @if ($errors->has('password'))
                                <span class="text-red-500 text-xs">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="mb-3 flex flex-wrap content-center">
                            <a href="#" class="text-xs font-semibold text-orange-500">Forgot password?</a>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="mb-1.5 block w-full text-center text-white bg-orange-500 hover:bg-orange-700 px-2 py-1.5 rounded-md">Sign in</button>
                        </div>
                    </form>

                    <!-- Footer -->
                    <div class="text-center">
                    <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
                    <a href=""  class=" text-xs font-semibold text-orange-500">Sign up</a>
                    </div>
              </div>
              </div>
              <!-- Login banner -->
              <div class="invisible md:visible md:static absolute flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
                <img alt="image for showing an example homepage of this social network" class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="https://i.imgur.com/9l1A4OS.jpeg">
              </div>

            </div>
        </div>
    </div>
@endsection
