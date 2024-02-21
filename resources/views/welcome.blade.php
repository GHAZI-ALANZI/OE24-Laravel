@extends('layout._shared')

@section('content')

<div class="main-container">
  <div class="coverflow-container">
    <ol class="coverflow-list">
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-1">
      <li class="coverflow-item">
        <label for="cover-1">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/51psxBugNkL.jpg">
            <figcaption class="album-name">Love Is Blind</figcaption>
          </figure>
        </label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-2">
      <li class="coverflow-item">
        <label for="cover-2">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/9c0075e42d1e099c487488a168db0e41.1000x1000x1.jpg" />
            <figcaption class="album-name">Disintegration</figcaption>
          </figure>
        </label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-3">
      <li class="coverflow-item">
        <label for="cover-3">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/3651470.jpg">
            <figcaption class="album-name">Dream Harder</figcaption>
          </figure>
        </label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-4">
      <li class="coverflow-item">
        <label for="cover-4">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/MI0000681618.jpg">
            <figcaption class="album-name">Wish</figcaption>
          </figure>
        </label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-5">
      <li class="coverflow-item">
        <label for="cover-5">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/homepage_large.63d675da.jpg">
            <figcaption class="album-name">2:54</figcaption>
          </figure>
      	</label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-6">
      <li class="coverflow-item">
        <label for="cover-6">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/garbagealbum1.jpg">
            <figcaption class="album-name">Garbage</figcaption>
          </figure>
        </label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-7">
      <li class="coverflow-item">
        <label for="cover-7">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/long-way-round-2010.png">
            <figcaption class="album-name">Long Way Round</figcaption>
          </figure>
        </label>
      </li>
      <!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-8">
      <li class="coverflow-item">
        <label for="cover-8">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/61b3DwIVKqL.jpg">
            <figcaption class="album-name">HomeGrown</figcaption>
          </figure>
        </label>
      </li>
    	<!-- Cover item -->
      <input type="radio" name="cover-item" id="cover-9">
      <li class="coverflow-item">
        <label for="cover-9">
          <figure class="album-cover">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/0000037627_500.jpg">
            <figcaption class="album-name">Casanova</figcaption>
          </figure>
        </label>
      </li>
    </ol>
  </div>
  
</div>
  

    

<section
  class="relative  bg-[url(https://cdn.pixabay.com/photo/2024/01/12/13/00/field-8503934_960_720.jpg)] bg-cover bg-center bg-no-repeat main-news"
>
  <div
    class="absolute inset-0"
  ></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
  >
    <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Let us find your
         <div class="mt-8 flex flex-wrap gap-4 text-center">
        <a
          href="#"
          class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
        >
         Mehr &#x3e;&#x3e;
        </a>

      
      </div>
    </div>
  </div>
</section>

@endsection