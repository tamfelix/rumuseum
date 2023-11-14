@extends('welcome')

@section('content')

<!-- BANNER "explore our collections" -->
<div class="banner w-full h-72">
    <div class="row pl-24">
        <div class="col-md-1"></div>
        <h2 class="banner__header col-md-4 p-3 text-3xl pt-16 font-bold">
            <a href="/widgets/">
                {{ __('sections.banner1') }} 
            </a>
        </h2>
        <button class="col-md-1 btn-primary banner-button rounded-full mt-5 m-3 text-white"  value="{{ __('sections.button') }}" type="submit" >
            {{ __('sections.button') }}
        </button>

    </div>
</div>




<!--LEFT MENU SECTION -->
<section class="flex inline-flex">
    <div class="w-1/4 flex flex-col mt-8">
        @foreach($leftmenu as $item)
            <a href=" {{ route('menus.show', $item['id']) }} " class="bg-[var(--h-color8)]  text-gray-600 w-[150px] h-[50px] my-1 pl-3 flex items-center">
                {{ $item['title_ru'] }} 
            </a>
        @endforeach
    </div>

    <!-- CENTER SECTION with NEWS  -->
    <div class="p-5 w-full ml-10 flex">
        <div class="container mb-md-5 border-bottom ">
             @foreach($news as $new)
                <h1 class="first-article__header text-3xl font-bold pt-10 w-[40%] bg-green-300">
                    <a href="{{ route('blogs.index') }}">
                    {{ $new['title_'.app()->getLocale()] }} </a>
                </h1>
            @endforeach


        </div>
    @php $imageurl = '<html><img src="http://localhost/app/rumuseum/public/img/banner1.jpeg"></html>'; @endphp
   <a href="javascript:showImage( '{{ $imageurl }} ')">Photo1</a> </div>
   <a href="javascript:newWindow( '{{ env('APP_URL') }}'  )">new Window</a>
    <iframe src="{{env('APP_URL')}}/bookframe.html" name="book1" class=" border-gray-100 shadow m-2 w-[300px] h-[300px]">book1</iframe>
</section>


<!-- RECENT ITEMS -->

<div class="row py-5 ml-10">
    <h3 class="header3 mb-md-4 py-10 text-3xl font-bold   ">
        <a href="{{ route('events.index') }}">
            {{ __('sections.new') }} 
        </a>
    </h3>

    <div class="inline-flex col-md-4 mx-[10%] ">
        @foreach($articles as $image)
        <a class=" mb-md-4 p-2 " href="{{ route('stocks.show', $image->id)}}">
            <img src="{{ env('APP_URL').'/'.$image->img}}" class="shadow miniature " alt=""  >
        </a>
        @endforeach
    </div>
</div>


<!-- EVENTS ROW -->

<div class="row pt-5 pl-10">
    <h3 class="header3 mb-md-4 py-10 text-3xl font-bold   ">
        <a href="{{ route('events.index') }}">
            {{ __('sections.events') }}
        </a>
    </h3>
    @foreach($events as $event)
        <div class="inline-flex shadow rounded-full h-40 p-4 bg-white w-60 "> 
            <div class="flex flex-col  justify-evenly items-center w-full">
                <h4 class="bg-gray-50 font-bold text-xl rounded  w-full text-center"><a href="/events/{{$event->id}}" class="">{{$event->name}} </a></h4>
                    <i class="max-h-20 text-xs leading-tight h-12 text-center">-{{$event->description}}</i>
                    <p class="text-xs mx-auto">{{$event->country}}</p>
                    <div class="text-xs mx-auto">{{$event->date}}</div>
            </div>

        </div>
    @endforeach

</div>
<!-- SHOP section -->

<div class="row pb-0 ">
    <div class="banner2 h-72">
        <h3 class="banner__header text-3xl font-bold pl-10 pt-20 mt-10">
            <a href="{{ route('products.index') }}">{{ __('sections.shop') }}  </a>
        </h3>
    </div>
</div>

<div class="row pb-0 ">
    <div class="">
        <h3 class="banner__header text-3xl font-bold pl-10 ">
            <a href="{{ url('') }}">{{ __('sections.books') }}  </a>
        </h3>
    </div>
</div>

@endsection

<script>
    var image;
    function showImage(image){ 
        var onglet = window.open("", "article image", 'width=600, height=600, top 600, left=800');
        onglet.document.write(image); onglet.document.close();
    }
    function newWindow(url){window.open(url);}
</script>