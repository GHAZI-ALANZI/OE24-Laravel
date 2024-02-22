@extends('layout._mainnews')

@section('title')
   Business 
@endsection

{{--###########################################################--}}

@section('img')

https://cdn.pixabay.com/photo/2024/02/09/16/17/grey-whale-8563340_960_720.png

@endsection

{{--###########################################################--}}

@section('news')
<!-- cards news -->
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
          
 @foreach ($data as $item)
  @if ($item['sort']=== "Business" )
            <!-- Column --> 
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full"
                            src="{{ $item['image'] }}">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline  text-white" href="#">
                               {{ $item['title'] }}
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
 @endif 
    @endforeach
 
        </div>
    </div>
      <!-- END cards news -->

    
@endsection