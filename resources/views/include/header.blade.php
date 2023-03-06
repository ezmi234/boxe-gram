<header class="bg-white ">
    <nav class="flex justify-between items-center w-[92%]  mx-auto">
        <div>
            <a href="/">
                <img class="w-24 cursor-pointer" src="{{URL('img/logo.svg')}}" alt="logo">
            </a>
        </div>
        <div
            class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                <li>
                    <a class="hover:text-gray-600" href="{{ route('dashboard') }}">Home</a>
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
            <a href="{{ route('login') }}" class="px-5 py-2 text-white no-underline bg-orange-400 rounded-full hover:bg-orange-600 hover:underline hover:text-blue-200">
                Sign In
            </a>
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
