@extends('layout._shared')

@section('content')
    <section class="mb-40">
        <!-- Jumbotron -->
        <div class="relative overflow-hidden bg-cover bg-no-repeat"
            style="
        background-position: 50%;
        background-image: url('https://cdn.pixabay.com/photo/2023/11/23/20/40/ocean-8408693_1280.jpg');
        height: 500px;
      ">
            <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
                            Politik </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->



    </section>


  <!-- cards news -->
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full"
                            src="https://cdn.pixabay.com/photo/2023/11/23/20/40/ocean-8408693_1280.jpg">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline  text-white" href="#">
                                Article Title
                            </a>
                        </h1>
                        <p class="text-white text-sm">
                            11/1/19
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">

                            <p class="ml-2 text-sm text-white">
                                Author Name
                            </p>
                        </a>

                    </footer>

                </article>
                <!-- END Article -->

            </div>
            <!-- END Column -->
        </div>
    </div>
      <!-- END cards news -->
@endsection
