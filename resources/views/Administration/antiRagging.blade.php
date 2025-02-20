@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>
                    Anti-Ragging
                </span>
            </div>
            <div class="w-full p-4">
                <p class=" mt-8  text-md text-black font-bold">RAGGING </p>
                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Definition of Ragging :</span>
                    Ragging includes display of noisy, disorderly conduct, teasing,
                    rough or rude treatment, indulging in rowdy, undisciplined and obscene activities which cause
                    or likely to cause annoyance, hardship, physical or psychological harm mental trauma or
                    raise apprehension or fear in a fresher or other students, or forcing a student to do any act
                    which a student is not willing to do so or which cause him/her shame or embarrassment or
                    danger to his/her life or limb or indulging in eve teasing. (Hon'ble Supreme Court of India).
                </p>
                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Prohibition of Ragging </span>
                    <br>Ragging is completely banned by law in and outside the college campus and Hostel.
                </p>
                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Penalty for Ragging</span>
                    <br>Whoever directly or indirectly commits, participates, abets or instigates ragging within or
                    outside any education institution, shall be suspended, expelled, rusticated from the
                    institution and shall be liable to fine which may extend to Rs. 10000/-. The punishment
                    may also include cancellation of admission, suspension from attending classes, withholding/withdrawing fellowship, scholarship and other financial benefits.
                    <br>
                    The Anti- Ragging Committee and Anti-Ragging Squad have been constituted to
                    implement Raghavan Committee Recommendations to deal with matters relating to
                    ragging in the college
                </p>



            </div>

        </div>

    </div>
@endsection
