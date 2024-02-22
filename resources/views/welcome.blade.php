@extends('layout._shared')

@section('content')
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
            <img src="{{ $item['image'] }}" alt="image" >
            
            <a href=""><p class="ms-4">{{ $item['content'] }}</p></a>
  </div>
  
    @endforeach
    <!-- END news item -->

    <!--##################################################################################################-->
@endsection
