@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>{{$title}}</span>
            </div>


            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4 p-4">
                @foreach($images as $image)
                    <a href="{{$image}}" target="_blank" class="w-full h-64 bg-darkTheme rounded-md p-1 group">
                        <img class="w-full h-full rounded-md object-cover group-hover:scale-105 transition ease-in duration-2000" src="{{$image}}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{--w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md--}}
