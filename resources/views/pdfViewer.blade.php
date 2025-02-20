@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>
        <div class="lg:w-[60%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
{{--            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">--}}
{{--                <span>{{$title}}</span>--}}
{{--            </div>--}}
            <iframe src="{{$filePath}}" style="width:100%; height: 1000px" frameborder="0"></iframe>
        </div>

    </div>


@endsection
