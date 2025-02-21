@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[220px] md:pt-[220px] pt-[140px] relative pb-4 px-4">
        <img class=" lg:h-[200px] md:h-[200px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[200px] md:h-[200px] h-[120px]   bg-black/20 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full grid lg:grid-cols-4 md:grid-cols-3 gap-6 ">


                <div class="w-full flex flex-col bg-white h-max px-4 py-6 shadow-lg shadow-black/20">
                    <div class="w-full  flex lg:justify-start md:justify-start justify-between px-2  border-b-[1px] border-b-black/20">
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-black mb-2">ADMISSIONS</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('reportTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="reportTabs" class="w-full lg:flex md:flex hidden flex-col mt-4">
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'RUSA(CBCS)','type'=>'RUSA(CBCS)'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='RUSA(CBCS)'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>RUSA (CBCS)</span>
                                    @if($type==='RUSA(CBCS)')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'Admission Procedure','type'=>'ADMISSION-PROCEDURE'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-PROCEDURE'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ADMISSION PROCEDURE</span>
                                    @if($type==='ADMISSION-PROCEDURE')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'admission reservation roster','type'=>'ADMISSION-RESERVATIONS'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-RESERVATIONS'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ADMISSION RESERVATIONS</span>
                                    @if($type==='ADMISSION-RESERVATIONS')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'Eligibility Conditions For Admission','type'=>'ADMISSION-RULES'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-RULES'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ADMISSION RULES</span>
                                    @if($type==='ADMISSION-RULES')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'Latest_Fee_Structure','type'=>'FEE-STRUCTURE'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='FEE-STRUCTURE'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>FEE STRUCTURE</span>
                                    @if($type==='FEE-STRUCTURE')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'ADMISSION Help Desk 2023-24', 'type'=>'ADMISSION-HELP-DESK'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-HELP-DESK'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ADMISSION HELP DESK</span>
                                    @if($type==='ADMISSION-HELP-DESK')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>


                    </div>
                </div>


                <div class="w-full h-max flex flex-col lg:col-span-3 md:col-span-2  border-[1px] border-white overflow-x-auto bg-white shadow-lg shadow-black/40">
                    <div class="w-full bg-white p-6  h-max">
                        <section class=" px-4 mx-auto">
                            <iframe src="{{$filePath}}" style="width:100%; height: 1000px" frameborder="0"></iframe>
                        </section>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection



