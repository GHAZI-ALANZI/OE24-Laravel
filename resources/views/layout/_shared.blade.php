<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OE24</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!--Resources css and javascript -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!--Resources css and javascript -->

</head>

<body>
    <canvas id="canvas-club"></canvas>

    <!--Start Navbar tailwind -->
    <nav
        class="flex items-center justify-between flex-wrap  py-4 lg:px-12 shadow border-solid border-t-2 border-blue-700 border-b-2 border-blue-700 mb-4">
        <div
            class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
            <div class="flex items-center flex-shrink-0 text-gray-800 mr-16">
                <a href="{{ route('welcome') }}">
                    <span class="font-semibold text-white text-5xl tracking-tight">OE</span>
                    <span class="font-semibold text-amber-400 text-5xl tracking-tight">24</span>
                    
                </a>
            </div>
            <div class="block lg:hidden ">
                <button id="nav"
                    class="flex items-center px-3 py-2 border-2 rounded text-blue-700 border-blue-700 hover:text-blue-700 hover:border-blue-700">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8">
            <div class="text-md font-bold text-blue-700 lg:flex-grow">
                <a href="{{ route('ticker') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    TICKER
                </a>
                <a href="{{ route('news') }}"
                    class=" block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    NEWS
                </a>
                <a href="{{ route('politik') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    POLITIC
                </a>
                <a href="{{ route('video') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    VIDEOS
                </a>

                <a href="{{ route('wetter') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    WETTER 

                </a>
                <a href="{{ route('sport') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    SPORT
                </a>
                <a href="{{ route('businuss') }}"
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    BUSINESS
                </a>
            </div>
            <div class="relative mx-auto text-gray-600 lg:block hidden">
                <input class="border-2 border-gray-300 bg-white h-10 pl-2 pr-8 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px"
                        height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div>
            <div class="flex ">

                @guest

                <a href="{{ route('login') }}"
                    class="block text-md px-4 py-2 rounded text-blue-700 ml-2 font-bold text-white mt-4 hover:bg-amber-500 rounded hover:text-zinc-950 lg:mt-0">Login
                </a>

                <a href="{{ route('register') }}"
                    class=" block text-md px-4  ml-2 py-2 rounded text-blue-700 font-bold text-white mt-4 hover:bg-amber-500 rounded hover:text-zinc-950 lg:mt-0">Anmelden</a>
            @else    
                
       <a href="{{ route('login') }}" class="block text-md px-4 py-2 rounded text-blue-700 ml-2 font-bold text-yellow-400 mt-4 hover:bg-amber-500 rounded hover:text-zinc-950 lg:mt-0"> Hello {{ Auth::user()->name }} </a>

     <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class=" block text-md px-4  ml-2 py-2 rounded text-blue-700 font-bold text-yellow-400 mt-4 hover:bg-amber-500 rounded hover:text-zinc-950 lg:mt-0">Abmelden <i class="fa fa-sign-out " style="font-size:19px;color:rgb(13, 208, 192)"></i></a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                </form>
                
                    @endguest
            
            
                </div>

        </div>

    </nav>
    <!--End Navbar tailwind -->


    <!--Yield Content -->
    @yield('content')
    <!--Yield Content -->



    <!--Start Footer -->
    <footer class="bottom-0 border-solid border-t-2 border-blue-700 mt-6">

        <div
            class="flex justify-between lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0 mb-6">
            <div class="flex items-center flex-shrink-0 text-gray-800 mr-16 mt-2">
                <span class="font-semibold text-white text-5xl tracking-tight">OE</span>
                <span class="font-semibold text-amber-400 text-5xl tracking-tight">24</span>
            </div>
        </div>
        <div class="menu w-full lg:block flex-grow lg:flex lg:items-center lg:w-auto lg:px-3 px-8">
            <div class="text-md font-bold text-blue-700 lg:flex-grow">
                <a href="#responsive-header "
                    class="block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    Datenschutzerklärung
                </a>
                <a href="#responsive-header"
                    class=" block mt-4 lg:inline-block lg:mt-0 text-white px-4 py-2 rounded hover:bg-amber-500 rounded hover:text-zinc-950 mr-2">
                    Allgemeine Nutzungsbedingungen </a>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between ">
                    <span class=" sm:text-center text-white mb-4">© 2024 All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0 ">
                        <a href="#" class="text-white hover:text-cyan-400 ">
                            <svg class="w-6 h-6 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>

                        <a href="#" class="text-white hover:text-cyan-400  ms-5">
                            <svg class="w-6 h-6 me-16 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 17">
                                <path fill-rule="evenodd"
                                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">x page</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </footer>
    <!--End Footer -->

</body>

</html>
