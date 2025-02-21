@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[220px] md:pt-[220px] pt-[140px] relative pb-4 px-4">
        <img class=" lg:h-[200px] md:h-[200px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[200px] md:h-[200px] h-[120px]   bg-black/20 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[80%] w-full z-20 flex flex-col-reverse ">
            <div class="w-full grid lg:grid-cols-4 md:grid-cols-3 gap-6 ">
                <div class="w-full flex flex-col bg-white h-max px-4 py-6 shadow-lg shadow-black/20">
                    <div class="w-full  flex lg:justify-start md:justify-start justify-between px-2  border-b-[1px] border-b-black/20">
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-black mb-2">ADMINISTRATIVE</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('administrationTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="administrationTabs" class="w-full lg:flex md:flex hidden flex-col mt-4">
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'PRINCIPAL'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='PRINCIPAL'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>PRINCIPAL</span>
                                    @if($type==='PRINCIPAL')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'BURSAR'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='BURSAR'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>BURSAR</span>
                                    @if($type==='BURSAR')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'TEACHING-STAFF'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='TEACHING-STAFF'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>TEACHING STAFF</span>
                                    @if($type==='TEACHING-STAFF')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'NON-TEACHING-STAFF'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='NON-TEACHING-STAFF'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>NON TEACHING STAFF</span>
                                    @if($type==='NON-TEACHING-STAFF')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'PTA'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='PTA'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>PTA</span>
                                    @if($type==='PTA')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'ORGANOGRAM'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ORGANOGRAM'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ORGANOGRAM</span>
                                    @if($type==='ORGANOGRAM')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('administration',['type'=>'CSCA'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='CSCA'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>CSCA</span>
                                    @if($type==='CSCA')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full h-max flex flex-col lg:col-span-3 md:col-span-2  border-[1px] border-white overflow-x-auto bg-white shadow-lg shadow-black/40">
                    <div class="w-full bg-white p-6  h-max">
                        @if($type==='PRINCIPAL')
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
                        @endif
                        @if($type==='BURSAR')
                            <div class="w-full p-4">
                                <p class=" text-black font-bold text-md">ROLE OF BURSAR</p>
                                <p class=" mt-4 text-darkText italic text-md">Bursar is a member of the Teaching Staff who manages the domestic and internal finances of the College
                                    and helps the Principal in the maintenance of the accounts and the day- to-day financial affairs of the
                                    College. The Bursar oversees day-to-day cash management, manages accounts payable and receivable,
                                    and keeps organized books of tuition fees and files of receipts. </p>
                            </div>
                        @endif
                        @if($type==='TEACHING-STAFF')
                            <div class="w-full p-4">
                                <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Dr_P.P._Chauhan.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. P.P. Chauhan</span>
                                        <span class="italic text-sm text-danger">Principal</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Monika Raina.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Monika Raina</span>
                                        <span class="italic text-sm text-danger">Asstt. Prof. English</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prof_Vijay_Laxmi.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Vijay Laxmi</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. English</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Priyanka.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Priyanka</span>
                                        <span class="italic text-sm text-danger">Asstt. Prof. English</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Vacant</span>
                                        <span class="italic text-sm text-danger">Asstt.Philosophy</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Vacant</span>
                                        <span class="italic text-sm text-danger">Asstt. Prof. Physical Education</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prof_Pawan_Kumar.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Pawan Kumar</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. History</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Sanjeev K.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Sanjeev Kumar</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Political Science</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prof._Preeti Panta_Chhetti.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof.Preeti Panta Chhatti</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Political Science</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Dr. Yogita.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Yogita Bandhta</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Hindi</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/ND Bhar.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. N D Bhardwaj</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Hindi</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prof. Kailash Chauhan.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Kailash Chauhan</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Geography</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Kaul.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Om Prakash Kaul</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Music( V)</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Dr. Sumitra Chauhan.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Sumitra Chauhan</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Music (I)</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Diksha PA.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Diksha Chauhan</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Public Administration</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Punit.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Punit</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Economics</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prof_Goverdhan_Chauhan.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Goverdhan Chauhan</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Mathematics</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/LKS.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Lok Raj Sharma</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Chemistry</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Dr_Shallu_Dogra.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Shallu Dogra</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Chemistry</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Dr_Punam_Chauhan.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Punam Chauhan</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Zoology</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Dr_Radha Raman_Gautam.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Radha Raman Gautam</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Physics</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Shefali T.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Shefali Thanta</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Botany</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prof_Sandeep_Kumar.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Sandeep Kumar</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Commerce</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/MMV.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Man Mohan Kumar</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Commerce</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Diksha C.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Prof. Diksha Chauhan</span>
                                        <span class="italic text-sm text-danger">Assistant Prof. Commerce</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Mr_Chander_Mohan.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Chander Mohan</span>
                                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Shiwani Rawat.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Ms.Shiwani Rawat</span>
                                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Ranjna Dilta.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs.Ranjna Dilta</span>
                                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Manu Panatu.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs.Manu Panatu</span>
                                        <span class="italic text-sm text-danger">Lecturer BCA</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Mrs. Nirdosh_Pathania.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs.Nirdosh_Pathania</span>
                                        <span class="italic text-sm text-danger">Librarian</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Ankit Chauhan.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr. Ankit Chauhan</span>
                                        <span class="italic text-sm text-danger">Guest Faculty History</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Miss. Archana Nanda</span>
                                        <span class="italic text-sm text-danger">Guest Faculty Retail Mgt.</span>
                                    </div>

                                </div>
                            </div>
                        @endif
                        @if($type==='NON-TEACHING-STAFF')
                            <div class="w-full p-4">
                                <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Mukesh Pathik</span>
                                        <span class="italic text-sm text-danger">Superintendent G-I</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Roshni Chauhan.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs. Roshni Chauhan</span>
                                        <span class="italic text-sm text-danger">Superintendent G-II</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Yashwant_Kumar.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Yashwant Kumar</span>
                                        <span class="italic text-sm text-danger">Senior Assistant</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Govind Singh.jpeg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Govind Singh</span>
                                        <span class="italic text-sm text-danger">Clerk</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">V</span>
                                        <span class="italic text-sm text-danger">Clerk</span>
                                    </div>
                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Clerk Vacant</span>
                                        <span class="italic text-sm text-danger">Clerk</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Bharat_Singh.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Bharat Singh</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Tara_devi.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mr.Tara Devi</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Sumitra_Devi.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs .Sumitra Devi</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Sharda_Devi.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt.Sharda Devi</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Usha 1.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt.Usha Devi</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/GD.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt Guddi Devi</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Prem Lata.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Smt Prem Lata</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Sandeep Kumar.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh.Sandeep Kumar</span>
                                        <span class="italic text-sm text-danger">Peon cum Chowkidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/administration/Usha_devi.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs. Usha Devi</span>
                                        <span class="italic text-sm text-danger">Sweeper</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Miss Asha Sharma</span>
                                        <span class="italic text-sm text-danger">Peon cum Chokidar</span>
                                    </div>

                                    <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                        <img src="{{asset('assets/images/noImage.jpg')}}" class="h-32 w-32 rounded-full object-fill" alt="">
                                        <span class="mt-4 font-semibold text-md text-darkTheme text-center">Mrs. Sangeeta Devi</span>
                                        <span class="italic text-sm text-danger">Sweeper</span>
                                    </div>


                                </div>
                            </div>
                        @endif
                        @if($type==='PTA')
                            <div class="w-full p-4">


                                <p class=" text-black font-bold text-md">Parent Teacher Association</p>
                                <p class=" mt-4 text-darkText italic text-md">The Parent Teacher Association (P.T.A.) is a formal organization composed of parents and teachers that is
                                    intended to facilitate parental participation in an institution. It is a mandatory association in Affiliated Higher
                                    Education institutions. Parent Teacher Association of the College is an active body giving constant support in all
                                    the ventures of the college in academic, non-academic as well as infrastructural development. Under PTA’s
                                    patronage and whole hearted co-operation all developments within the academic and non- academic area take
                                    place. The PTA Executive Council meets at regular intervals and the annual general body meets offer venues of
                                    sharing and interaction.
                                </p>
                                <p class="mt-8 text-black font-bold text-md">Parent Teacher Association</p>
                                <table class="border-black border-[1px] border-collapse mt-8 w-full">
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2" colspan="2">OFFICE BEARERS</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2" >Sr. No.</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2" >Name</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Designation</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Contact No</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >1</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Satya Dev </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">President</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9805147825</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >2</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Pushpa Ranta </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">VicePresident</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9816520794</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >3</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Prof. Vijay Laxmi </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Secretary</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9805205680</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >4</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Manoj Sharma</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Joint Secretary</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9805050686</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >5</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Roshani</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Treasurer</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9418057275</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >6</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Prof. Sandeep Kumar</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Auditor</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9816433831</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >7</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Kamal Chand</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Chief Advisor</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9459363699</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2" colspan="2">MEMBERS</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >8</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Prof. Preeti</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9418209261</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >9</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Dr. Harash Bhardwaj</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">8219898735</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >10</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Dr. Rohit Mokta</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9418072446</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >11</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Vijaylaxmi </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">759600779</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >12</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Sangeeta </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">8626959305</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >13</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs.Lalita Sharma</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">8894942121</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >14</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Hira Lal </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9418626826</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >15</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Inder Das </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">9816647922</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >16</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Surender Negi </td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                                        <td class="border-[1px] border-black font-medium text-black p-2">8894936791</td>
                                    </tr>


                                </table>

                            </div>
                        @endif
                        @if($type==='ORGANOGRAM')
                            <div class="w-full p-4">
                                <img src="{{asset('assets/images/administration/organogram.png')}}" alt="" class="w-full h-auto">
                            </div>
                        @endif
                        @if($type==='CSCA')
                            <div class="w-full p-4">
                                <img src="{{asset('assets/images/administration/CSCA.png')}}" alt="" class="w-full h-auto">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection



