@extends('layout._shared')

@section('content')

<!--##################################################################################################-->

<!-- START hero section -->
<div class="main-container">
  <div class="coverflow-container">
    <ol class="coverflow-list">
      <!-- Cover item -->
       @foreach ($data as $item)
      <input type="radio" name="cover-item" id="cover-{{ $item['_id'] }}" @if ( $item['_id']  === "660b1b34a596c63dd27b08b5")
checked="checked"
@endif>
      <li class="coverflow-item">
        <label for="cover-{{ $item['_id'] }}">
          <figure class="album-cover">
            <img src="{{ $item['image'] }}">
            <figcaption class="album-name">{{$item['title']}}</figcaption>
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
<div class="main-container2">
  <div class="coverflow-container2">
    <div class="coverflow-list2">
      <div class="coverflow-item2">
        <label  class="label2">
          <figure class="album-cover2">
            <img  class="img2"  src="{{ $item['image'] }}">
            <figcaption class="album-name2 lg:text-3xl sm:text-xl">{{$item['title']}}</figcaption>
          </figure>
        </label>
      </div>
    </div>
  </div>
  </div>
   @endforeach
<!-- END news item -->

<!--##################################################################################################-->

@endsection