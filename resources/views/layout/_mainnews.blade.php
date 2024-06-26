@extends('layout._shared')

@section('content')
<section class="mb-40">
  <!-- Jumbotron -->
  <div class="relative overflow-hidden bg-cover bg-no-repeat" style="
        background-position: 50%;
        background-image: url(@yield('img'));
        height: 500px;
      ">
    <div
      class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-[hsla(0,0%,0%,0.75)] bg-fixed">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
          <h1 class="mt-2 mb-16 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl">
            @yield('title')  </h1>
       </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->


  @yield('news')
</section>


    
@endsection