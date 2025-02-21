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
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-black mb-2">REPORTS</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('reportTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="reportTabs" class="w-full lg:flex md:flex hidden flex-col mt-4">
                        <div class="w-full">
                            <a href="{{route('annual-report',['type'=>'COLLEGE-ANNUAL-REPORTS'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='COLLEGE-ANNUAL-REPORTS'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span> COLLEGE ANNUAL REPORTS</span>
                                    @if($type==='COLLEGE-ANNUAL-REPORTS')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('annual-report',['type'=>'STUDENTS-SATISFACTION-SURVEY'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='STUDENTS-SATISFACTION-SURVEY'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>STUDENTS SATISFACTION SURVEY</span>
                                    @if($type==='STUDENTS-SATISFACTION-SURVEY')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('annual-report',['type'=>'STUDENTS-FEEDBACK-SURVEY'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='STUDENTS-FEEDBACK-SURVEY'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>STUDENTS FEEDBACK SURVEY</span>
                                    @if($type==='STUDENTS-FEEDBACK-SURVEY')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('annual-report',['type'=>'TEACHERS-FEEDBACK-SURVEY'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='TEACHERS-FEEDBACK-SURVEY'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span> TEACHERS FEEDBACK SURVEY</span>
                                    @if($type==='TEACHERS-FEEDBACK-SURVEY')
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
                            <div class="w-full flex flex-col">
                                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <div class="overflow-hidden ">
                                            <table class="min-w-full ">
                                                <thead class="bg-lightTheme">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        S.No.
                                                    </th>

                                                    @foreach($tableHeader as $head)
                                                        <th scope="col"
                                                            class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                            {{$head}}
                                                        </th>
                                                    @endforeach

                                                    <th scope="col"
                                                        class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Download
                                                    </th>

                                                </tr>
                                                </thead>


                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach($tableData as $index => $data)
                                                    <tr class="border-[1px] border-darkTheme">
                                                        <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">{{ $index + 1 }}</td>
                                                        <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                            <h2 class="text-sm font-semibold text-darkTheme">{{ $data[0] }}</h2>
                                                        </td>
                                                        <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                            <h2 class="text-sm font-normal italic text-darkTheme">{{ $data[1] }}</h2>
                                                        </td>
                                                        <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                            <div class="flex items-center gap-x-6">
                                                                <a href="{{ route('pdfViewer',['folder'=>$folderName,'file'=>$data[2]]) }}" target="_blank"
                                                                   class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                    View/Download
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection



