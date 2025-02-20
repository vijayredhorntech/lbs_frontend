@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/42.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>{{$title}}</span>
            </div>
            <div class="w-full p-4">
                @foreach($conditions as $condition)
                    <p class=" mb-8 text-darkText italic text-md">{{$condition}}</p>
                @endforeach
            </div>

        </div>
    </div>
@endsection
