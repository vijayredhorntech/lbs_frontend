@extends('Layouts.layout')
@section('content')
     <div class="w-full flex flex-col items-center lg:pt-[220px] md:pt-[220px] pt-[140px] relative pb-4 px-4">
        <img class=" lg:h-[200px] md:h-[200px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[200px] md:h-[200px] h-[120px]   bg-black/20 absolute top-0 left-0 z-10">
        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>College Videos</span>
            </div>


            <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4 p-4">
 <div class="w-full lg:h-64 md:h-40 sm:h-40 h-52 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/ncc/9.jpg')}})">
                    <iframe style="height: 100%; width: 100%;" class="rounded-md" src="https://www.youtube.com/embed/8_I8t9ppGro?si=SAmrzI5erk2pKlwd&amp;controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="w-full lg:h-64 md:h-40 sm:h-40 h-52 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/ncc/9.jpg')}})">
                    <iframe style="height: 100%; width: 100%;" class="rounded-md" src="https://www.youtube.com/embed/scK2oz4BjvY?si=SAmrzI5erk2pKlwd&amp;controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="w-full lg:h-64 md:h-40 sm:h-40 h-52 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/ncc/9.jpg')}})">
                    <iframe style="height: 100%; width: 100%;" class="rounded-md" src="https://www.youtube.com/embed/8_I8t9ppGro?si=SAmrzI5erk2pKlwd&amp;controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="w-full lg:h-64 md:h-40 sm:h-40 h-52 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/ncc/9.jpg')}})">
                    <iframe style="height: 100%; width: 100%;" class="rounded-md" src="https://www.youtube.com/embed/scK2oz4BjvY?si=SAmrzI5erk2pKlwd&amp;controls=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
@endsection

{{--w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md--}}
