@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>PRINCIPAL MESSAGE</span>
            </div>
            <div class="w-full p-2 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-4 grid-cols-1 gap-4 bg-blue-100  ">
                <div class="w-full flex flex-col items-center">
                    <div class=" w-[200px] lg:h-auto md:h-auto sm:h-auto h-[200px] bg-white p-2 rounded-md">
                        <img class="w-full h-full rounded-md" src="{{asset('assets/images/administration/principal.jpg')}}" alt="">
                    </div>
                    <span class="text-darkText font-bold">Dr. PP Chauhan PhD</span>
                    <span class="text-darkText font-normla italic">Principal</span>
                    <span class="text-darkText font-semibold text-xs">L.B.S Govt. College Saraswati Nagar</span>
                </div>

                <div class="w-full flex flex-col gap-4 lg:col-span-3 md:col-span-3 sm:col-span-3 col-span-1 px-4 text-justify">

                    <span class="text-darkText font-semibold text-2xl">Principal Message</span>
                    <span class="text-darkText italic text-md">A momentum has been created to strengthen the frame of educational arena by following a focused approach on curriculum expansion and gearing up developmental activities in the college. As educated minds have to face challenges in the global market therefore multifarious events towards personality development have been kept in mind by the dedicated staff members who deserve due appreciation and felicitation for their contribution.
I acknowledge the whole hearted support of all the parents and well wishers without whose help any achievement would have not been possible.This is my considered opinion that a joint responsibility of the parents and teachers can guide the students to best of their destinations..
The future is in the hands of present. It is said that destiny of a nation is shaped in the classroom. So let us work together towards creating a better tomorrow. May almighty bless us all.</span>



                </div>
            </div>

        </div>

    </div>
@endsection
