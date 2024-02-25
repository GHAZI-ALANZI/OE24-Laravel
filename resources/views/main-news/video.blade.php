@extends('layout._mainnews')

@section('title')
   Video 
@endsection

{{--###########################################################--}}

@section('img')

https://cdn.pixabay.com/photo/2015/12/22/08/06/face-1103708_960_720.jpg

@endsection

{{--###########################################################--}}

@section('news')
<!-- cards news -->
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
          
 @foreach ($data as $item)
  @if ($item['sort']=== "Video" )
            <!-- Column --> 
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
<iframe width="400" height="400" src="{{ $item['image'] }}" title="How prepared is the British military for war?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline font-black  text-amber-400	" href="#">
                               {{ $item['title'] }}
                            </a>
                        </h1>
                        <p class="text-white text-sm">
                           {{ $item['createdAt'] }}
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">

                            <p class="ml-2 text-sm text-white">
                               {{ $item['content'] }}
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