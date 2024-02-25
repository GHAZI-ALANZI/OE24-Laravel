@extends('layout._mainnews')

@section('title')
    Wetter
@endsection

{{-- ########################################################### --}}

@section('img')
    https://cdn.pixabay.com/photo/2020/07/02/22/37/rain-5364590_1280.jpg
@endsection

{{-- ########################################################### --}}

@section('news')
    <!-- cards news -->
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            @foreach ($data as $item)
                @if ($item['sort'] === 'Wetter')
                    <!-- Column -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">

                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-full" src="{{ $item['image'] }}">
                            </a>

                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg">

                                    <!-- Weather  -->
                                    @if (!empty($weatherData['weather'][0]['icon']))
                                        <a class="no-underline hover:underline font-black  text-amber-400	" href="#">
                                            {{ $weatherData['name'] }}
                                        </a>
                                </h1>
                            </header>
                            <footer class="flex items-start  leading-none p-2 md:p-4">
                                <a class="flex iitems-start no-underline hover:underline text-black" href="#">
                                    <a href="#"
                                        class="flex flex-col items-start  ms-[3%] shadow md:flex-row md:max-w-xl ">
                                        <img class="object-cover  rounded-t-lg h-20 md:h-auto   w-[7vmax] md:rounded-none md:rounded-s-lg"
                                            src="http://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png"
                                            alt="">
                                        <div class="flex flex-col  p-4 leading-normal">
                                            <p class="mb-3 font-normal text-white">{{ $weatherData['main']['temp'] }} °C</p>
                                        </div>
                                    </a>
                                @else
                                    <p>No weather data available.</p>
                @endif

                <!-- End Weather  -->


                </a>

                </footer>

                </article>
                <!-- END Article -->

        </div>
        <!-- END Column -->
        @endif
        @endforeach

    </div>
    </div>
    <!-- END cards news -->
@endsection
