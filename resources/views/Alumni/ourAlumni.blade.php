@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/42.jpg')}}">


    <div class="w-full flex flex-col items-center p-4 relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>OUR ALUMNI</span>
            </div>
            <div class="w-full p-4">
                <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                      <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                          <img src="{{asset('assets/images/alumni/Yash Pal Sharma.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                          <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Yash Pal Sharma</span>
                          <span class="italic text-sm text-danger">President</span>
                      </div>
                      <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                          <img src="{{asset('assets/images/alumni/Sandesh Kalta.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                          <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Sandesh Kalta</span>
                          <span class="italic text-sm text-danger">Vice President</span>
                      </div>
                      <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                          <img src="{{asset('assets/images/alumni/Sudesh Kumar Mokta.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                          <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh.Sudesh Kumar Mokta</span>
                          <span class="italic text-sm text-danger">IAS</span>
                      </div>
                      <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                          <img src="{{asset('assets/images/alumni/Shravan Manta.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                          <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Shravan Manta</span>
                          <span class="italic text-sm text-danger">HAS</span>
                      </div>
                      <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                          <img src="{{asset('assets/images/alumni/Pankaj Chauhan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                          <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Pankaj Chauhan</span>
                          <span class="italic text-sm text-danger">IIT Jammu</span>
                      </div>
                      <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                          <img src="{{asset('assets/images/alumni/Aman Mehta.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                          <span class="mt-4 font-semibold text-md text-darkTheme text-center">Col, Aman Mehta</span>
                          <span class="italic text-sm text-danger"></span>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
