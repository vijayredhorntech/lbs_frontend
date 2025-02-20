@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px] relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full grid lg:grid-cols-4 md:grid-cols-3 gap-2 ">


                <div class="w-full flex flex-col rounded-md">
                    <div class="w-full bg-darkTheme flex lg:justify-center md:justify-center justify-between lg:p-3 md:p-3 p-2 rounded-t-md">
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-white">CONTENT</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('reportTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="reportTabs" class="w-full lg:flex md:flex hidden flex-col">
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'RUSA(CBCS)','type'=>'RUSA(CBCS)'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='RUSA(CBCS)'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>RUSA (CBCS)</span>
                                    @if($type==='RUSA(CBCS)')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'Admission Procedure','type'=>'ADMISSION-PROCEDURE'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-PROCEDURE'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>ADMISSION PROCEDURE</span>
                                    @if($type==='ADMISSION-PROCEDURE')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'admission reservation roster','type'=>'ADMISSION-RESERVATIONS'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-RESERVATIONS'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>ADMISSION RESERVATIONS</span>
                                    @if($type==='ADMISSION-RESERVATIONS')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'Eligibility Conditions For Admission','type'=>'ADMISSION-RULES'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-RULES'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>ADMISSION RULES</span>
                                    @if($type==='ADMISSION-RULES')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'Latest_Fee_Structure','type'=>'FEE-STRUCTURE'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='FEE-STRUCTURE'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>FEE STRUCTURE</span>
                                    @if($type==='FEE-STRUCTURE')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('admissionPages',['folder'=>'admission','file'=>'ADMISSION Help Desk 2023-24', 'type'=>'ADMISSION-HELP-DESK'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ADMISSION-HELP-DESK'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>ADMISSION HELP DESK</span>
                                    @if($type==='ADMISSION-HELP-DESK')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>


                    </div>
                </div>


                <div class="w-full flex flex-col lg:col-span-3 md:col-span-2 shadow-lg shadow-black/30 border-[1px] border-white rounded-md overflow-x-auto bg-white">
                    <div class="w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
                        <section class=" px-4 mx-auto">
                            <iframe src="{{$filePath}}" style="width:100%; height: 1000px" frameborder="0"></iframe>
                        </section>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection



