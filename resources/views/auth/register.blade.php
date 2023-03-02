<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
    
    <title>FoodNation</title>
</head>
<body class="font-[Poppins] bg-gray-200 h-screen">
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
                    <button class="bg-orange-400 text-white px-5 py-2 rounded-full hover:bg-orange-600">Sign in</button>
                    <img onclick="onToggleMenu(this)" class="w-12 cursor-pointer md:hidden" name="menu"  src="{{URL('img/menu-outline.svg')}}" alt="menu-icon">
                </div>
            </nav>
        </header>
            <!-- component -->
            <!-- Container -->
        <div class="flex flex-wrap max-h-screen w-full content-center justify-center bg-gray-200 py-10">
            <!-- Login component -->
            <div class="flex shadow-md">
                <!-- Login form -->
                <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
                <div class="w-72">
                    <!-- Heading -->
                    <h1 class="text-xl font-semibold text-orange-500">FoodNation</h1>
                    <h2 class="text-xl font-semibold text-orange-500">Register</h2>
                    <small class="text-orange-300">Sign Up to see recipes from all over the world</small>

                    <!-- Form -->
                    <form method="POST" action="" class="mt-4">
                    @csrf
                    @if(\Session::has('message'))
                    <span class="text-red-500 text-xs">
                        {{\Session::get('message')}}
                    </span>
                    @endif
                    <div class="mb-3">
                        <label class="mb-2 block text-xs font-semibold">Full Name</label>
                        <input id="fullname" name="fullname" type="text" required autofocus placeholder="Full Name" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3">
                        <label class="mb-2 block text-xs font-semibold">Email</label>
                        <input id="email" name="email" type="email" required placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="mb-2 block text-xs font-semibold">Password</label>
                        <input id="password" name="password" type="password" required placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="mb-2 block text-xs font-semibold">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 py-1 px-1.5 text-gray-500" />
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="mb-1.5 block w-full text-center text-white bg-orange-500 hover:bg-orange-700px-2 py-1.5 rounded-md">Sign Up</button>
                    </div>
                    </form>
                    <!-- Footer -->
                    <div class="text-center">
                        <span class="text-xs text-gray-400 font-semibold">Do you already have an accout?</span>
                        <a href="/"  class=" text-xs font-semibold text-orange-500">Login</a>
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




    <!-- component-->
                        
    @vite('resources/js/app.js')
</body>
</html>