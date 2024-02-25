@extends('layout._shared')

@section('content')
    <!--##################################################################################################-->

  <!--Start Weather -->
  
@if (!empty($weatherData['weather'][0]['icon']))
   <a href="#" class="flex flex-col items-center ms-[3%] shadow md:flex-row md:max-w-xl ">
    <img class="object-cover  rounded-t-lg h-20 md:h-auto   w-[7vmax] md:rounded-none md:rounded-s-lg" src="http://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $weatherData['name'] }}</h5>
        <p class="mb-3 font-normal text-white">{{ $weatherData['main']['temp'] }} °C</p>
    </div>
</a>
   @else
        <p>No weather data available.</p>
    @endif

      <!--End Weather -->

          <!--##################################################################################################-->


    <!-- START hero section -->
    <div class="main-container">

        <div class="coverflow-container">
            <ol class="coverflow-list">
                <!-- Cover item -->
                @foreach ($data as $item)
                    <input type="radio" name="cover-item" id="cover-{{ $item['_id'] }}"
                        @if ($item['_id'] === '660b1b34a596c63dd27b08b5') checked="checked" @endif>
                    <li class="coverflow-item">
                        <label for="cover-{{ $item['_id'] }}">
                            <figure class="album-cover">
                                <img src="{{ $item['image'] }}">
                                <figcaption class="album-name">{{ $item['title'] }}</figcaption>
                            </figure>
                        </label>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
    <!-- END hero section -->


    <!--##################################################################################################-->

    <!--START news item -->
    @foreach ($data as $item)
        <div class="card">
            <h1 class=" lg:text-6xl   text-center font-black	mb-2">{{ $item['title'] }}</h1>
            <a href="{{ route($item['sort']) }}"><img src="{{ $item['image'] }}" alt="image" >
            
            <p class="ms-4">{{ $item['content'] }}</p>
  </div>
  
    @endforeach
    <!-- END news item -->

    <!--##################################################################################################-->
@endsection
