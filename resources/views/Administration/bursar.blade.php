@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>Bursar</span>
            </div>
            <div class="w-full p-4">
                <p class=" text-black font-bold text-md">ROLE OF BURSAR</p>
                <p class=" mt-4 text-darkText italic text-md">Bursar is a member of the Teaching Staff who manages the domestic and internal finances of the College
                    and helps the Principal in the maintenance of the accounts and the day- to-day financial affairs of the
                    College. The Bursar oversees day-to-day cash management, manages accounts payable and receivable,
                    and keeps organized books of tuition fees and files of receipts. </p>
            </div>

        </div>

    </div>
@endsection
