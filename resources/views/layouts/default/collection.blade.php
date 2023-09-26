
@extends('welcome' )

@section('content')

    <main class="h-full">
        {{--        TITLE--}}
        <h2 class="text-3xl font-bold m-auto pt-5 ml-10"><a href="/blogs/"> {{ __('sections.items').' '.$link[0]['title_ru'] }}</a></h2>

        <section class="flex inline-flex">
    @foreach($objects as $item)
        <div class="bg-white shadow rounded  m-10 p-12  mb-20">
            <div class="inline-flex w-[400px] mb-5">
                {{--            TITLE--}}
                <a href=" {{ route('collects.show', $item->id) }} "><div class="w-1/3">{{ $item->title_en }}</div></a>
                {{--        SYMBOLS--}}
                <div class="inline-flex w-1/3">
                    -
                </div>
            </div>

            <div class="inline-flex w-full mb-5">
                @if(!is_null($item->company))
                    <div><strong>Company</strong>: {{$item->company}}</div>
                @endif
                @if(!is_null($item->for))
                    <div class = "ml-2"><strong>For</strong>: {{$item->for}}</div>
                @endif
                @if(!is_null($item->country))
                        <div class = "ml-2"><strong>Country</strong>: {{$item->country}}</div>
                @endif

            </div>
            {{--            HEADER--}}
            <h7 class="font-bold mb-5"><a href="/blogs/{{$item->id}}">{!!$item->title!!}</a></h7>
            {{--            TEXT--}}
            <p class="py-2 mt-5 ">{!!  $item->new!!}</p>
        </div>
    @endforeach
        </section>
    </main>

@endsection
