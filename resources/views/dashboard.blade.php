<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gray-300 h-screen">
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



    <script>
        const navLinks = document.querySelector('.nav-links');
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            e.src = `{{URL('img/${e.name}-outline.svg')}}`
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>