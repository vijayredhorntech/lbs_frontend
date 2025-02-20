@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px] relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[80%] md:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full grid lg:grid-cols-4 md:grid-cols-3 gap-2">
                <div class="w-full flex flex-col rounded-md">
                    <div class="w-full bg-darkTheme flex lg:justify-center md:justify-center justify-between lg:p-3 md:p-3 p-2 rounded-t-md">
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-white">CONTENT</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('facilityTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="facilityTabs" class="w-full lg:flex md:flex hidden flex-col">
                        <div class="w-full lg:col-span-3 md:col-span-3 ">
                            <a href="javascript:void(0)"
                               onclick="document.getElementById('iFacilityMenu').classList.toggle('hidden')">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type===''?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            INFRASTRUCTURAL FACILITIES
                                        </span>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="iFacilityMenu" class="w-full rounded-t-md  flex flex-col hidden ">
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'LIBRARY'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='LIBRARY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>LIBRARY</span>
                                        @if($type==='LIBRARY')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'ITLAB'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='ITLAB'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>IT LAB</span>
                                        @if($type==='ITLAB')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'ICT'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='ICT'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>ICT ENABLED FACILITIES</span>
                                        @if($type==='ICT')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'LANGUAGE-LAB'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='LANGUAGE-LAB'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>LANGUAGE LAB</span>
                                        @if($type==='LANGUAGE-LAB')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'SCIENCE-LABORATORIES'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='SCIENCE-LABORATORIES'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>SCIENCE LAB</span>
                                        @if($type==='SCIENCE-LABORATORIES')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'SEMINAR-HALL'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='SEMINAR-HALL'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        SEMINAR HALL
                                      </span>
                                        @if($type==='SEMINAR-HALL')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'SPORTS'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='SPORTS'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        SPORTS
                                      </span>
                                        @if($type==='SPORTS')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'GYMNASIUM'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='GYMNASIUM'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        GYMNASIUM
                                      </span>
                                        @if($type==='GYMNASIUM')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'HEALTH-ROOM'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='HEALTH-ROOM'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        HEALTH AID ROOM
                                      </span>
                                        @if($type==='HEALTH-ROOM')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'CANTEEN'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='CANTEEN'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        CANTEEN
                                      </span>
                                        @if($type==='CANTEEN')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'HOSTEL'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='HOSTEL'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        HOSTEL
                                      </span>
                                        @if($type==='HOSTEL')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('facility',['type'=>'MAINTENANACE'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MAINTENANACE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                      <span>
                                        MAINTENANCE & UTILIZATION OF SUPPORT FACILITIES
                                      </span>
                                        @if($type==='MAINTENANACE')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="w-full lg:col-span-3 md:col-span-3 ">
                            <a href="javascript:void(0)"
                               onclick="document.getElementById('sFacilityMenu').classList.toggle('hidden')">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type===''?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            STUDENT FACILITIES
                                        </span>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="sFacilityMenu" class="w-full rounded-t-md  flex flex-col hidden ">
                            <div class="w-full">
                                <a href="#">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                        <span>SCHOLARSHIPS/ FREESHIPS SCHEMES</span>
{{--                                        @if()--}}
{{--                                            <i class="fa fa-angles-right"></i>--}}
{{--                                        @endif--}}
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="#">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                        <span>BOOK BANK</span>
{{--                                        @if()--}}
{{--                                            <i class="fa fa-angles-right"></i>--}}
{{--                                        @endif--}}
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="#">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme rounded-b-md text-sm font-semibold transition-colors duration-200">
                                        <span>FREE REMEDIAL/ MERITORIOUS CLASSES</span>
{{--                                        @if()--}}
{{--                                            <i class="fa fa-angles-right"></i>--}}
{{--                                        @endif--}}
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full flex flex-col lg:col-span-3 md:col-span-2 shadow-lg shadow-black/30 border-[1px] h-max border-white rounded-md overflow-x-auto bg-white">
                    <div class="w-full bg-darkTheme text-white font-bold text-xl lg:p-3 md:p-3 p-2 rounded-t-md">
                        <span>{{$title}}</span>
                    </div>
                    <div class="w-full p-4">
                        {!! $pageContent !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
