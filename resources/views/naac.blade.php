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
                                onclick=" document.getElementById('naacTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="naacTabs" class="w-full lg:flex md:flex hidden flex-col">
                        <div class="w-full">
                            <a href="{{route('naac',['type'=>'COLLEGE-AQAR'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='COLLEGE-AQAR'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            COLLEGE AQAR
                                        </span>
                                    @if($type==='COLLEGE-AQAR')
                                        <i class="fa fa-angles-right"></i>
                                    @endif

                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('naac',['type'=>'college-aqar-data'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='college-aqar-data'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           COLLEGE AQAR DATA
                                        </span>
                                    @if($type==='college-aqar-data')
                                        <i class="fa fa-angles-right"></i>
                                    @endif

                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('naac',['type'=>'college-ssr'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='college-ssr'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           COLLEGE SSR
                                        </span>
                                    @if($type==='college-ssr')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('naac',['type'=>'college-sar'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='college-sar'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           COLLEGE SAR
                                        </span>
                                    @if($type==='college-sar')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                         <div class="w-full">
                            <a href="{{route('naac',['type'=>'NIRF'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='NIRF'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           NIRF
                                        </span>
                                    @if($type==='NIRF')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
              
                        <div class="w-full">
                            <a href="{{route('naac',['type'=>'BEST-PRACTICES'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='BEST-PRACTICES'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           BEST PRACTICES
                                        </span>
                                    @if($type==='BEST-PRACTICES')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('naac',['type'=>'institutional-distinctiveness'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='institutional-distinctiveness'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                          INSTITUTIONAL DISTINCTIVENESS
                                        </span>
                                    @if($type==='institutional-distinctiveness')
                                        <i class="fa fa-angles-right"></i>
                                    @endif

                                </div>
                            </a>
                        </div>
                        <div class="w-full lg:col-span-3 md:col-span-3 ">
                            <a href="javascript:void(0)"
                               onclick="document.getElementById('iqacSubMeny').classList.toggle('hidden')">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='COMPOSITION'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                         IQAC
                                        </span>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="iqacSubMeny" class="w-full rounded-t-md  flex flex-col hidden ">
                            <div class="w-full">
                                <a href="{{route('naac',['type'=>'COMPOSITION'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='COMPOSITION'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                <span>
                                   COMPOSITION
                                </span>
                                        @if($type==='COMPOSITION')
                                            <i class="fa fa-angles-right"></i>
                                        @endif


                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('naac',['type'=>'MEETINGS'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MEETINGS'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                <span>
                                   MEETINGS
                                </span>
                                        @if($type==='MEETINGS')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('naac',['type'=>'MEETINGS-OUTCOMES'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MEETINGS-OUTCOMES'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                <span>
                                    MEETINGS OUTCOMES
                                </span>
                                        @if($type==='MEETINGS-OUTCOMES')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('naac',['type'=>'ACTION-TAKEN-REPORT'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='ACTION-TAKEN-REPORT'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme rounded-b-md text-sm font-semibold transition-colors duration-200">
                                <span>
                                     ACTION TAKEN REPORT
                                </span>
                                        @if($type==='ACTION-TAKEN-REPORT')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="w-full flex flex-col lg:col-span-3 md:col-span-2 shadow-lg shadow-black/30 border-[1px] h-max border-white rounded-md overflow-x-auto bg-white">

                    <div class="h-max {{$type==='college-aqar-data'?'hidden':''}}  {{$type==='college-sar'?'hidden':''}} {{$type==='institutional-distinctiveness'?'hidden':''}} w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
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
{{--                    <div class="h-max {{$type==='college-aqar-data'?'':'hidden'}} w-full p-4">--}}
{{--                        <div x-data="{ openTab: 1 }" class="overflow-x-auto w-full">--}}
{{--                            <div class=" mx-auto w-full">--}}
{{--                                <div class="mb-4 flex space-x-4 p-2 bg-lightTheme rounded-sm w-full shadow-md overflow-x-auto">--}}
{{--                                    <button x-on:click="openTab = 1" :class="{ 'bg-darkTheme text-white': openTab === 1 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Home--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 2" :class="{ 'bg-darkTheme text-white': openTab === 2 }" class=" py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Extended Profile--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 3" :class="{ 'bg-darkTheme text-white': openTab === 3 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 1--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 4" :class="{ 'bg-darkTheme text-white': openTab === 4 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 2--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 5" :class="{ 'bg-darkTheme text-white': openTab === 5 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 3--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 6" :class="{ 'bg-darkTheme text-white': openTab === 6 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 4--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 7" :class="{ 'bg-darkTheme text-white': openTab === 7 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 5--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 8" :class="{ 'bg-darkTheme text-white': openTab === 8 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 6--}}
{{--                                    </button>--}}
{{--                                    <button x-on:click="openTab = 9" :class="{ 'bg-darkTheme text-white': openTab === 9 }" class=" flex-1 py-1 px-2 underline text-sm rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">--}}
{{--                                        Criterion 7--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                                <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    AQAR Reports Cycle III--}}
{{--                                                                </th>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Year--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">AQAr Report</h2>--}}
{{--                                                                </td>--}}
{{--                                                                <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-normal italic text-darkTheme">2021-2026</h2>--}}
{{--                                                                </td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'naac_2018_19_aqar_report (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">AQAr Report</h2>--}}
{{--                                                                </td>--}}
{{--                                                                <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-normal italic text-darkTheme">2021-2026</h2>--}}
{{--                                                                </td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'naac_2018_19_aqar_report (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Vacancy Positions</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Vacancy Position for Last Five Years']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}

{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 3" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Lesson Plans</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'LESSON PLANS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.1.3 BoS & PAPER SETTER</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.1.3 BoS & PAPER SETTER']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.2.1 Affiliation Letters</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.2.1  Affiliation LETTERS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.4.1 FEEDBACK REPORTS LINK FILE</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 21-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">1.4.1 FEEDBACK REPORTS LINK FILE</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 22-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}

{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 4" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Student's Satisfaction Survey</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Students  Satisfaction Survey (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet 2021-22</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'House  Exam Date Sheet 2021-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet 2022-23</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Date Sheet House Examinations 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}


{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 5" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.5.1 Student Exchange Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Student Exchange 3.5.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 Extension Activity Report 2022-23</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.4.3 report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Criterion 3.5.1 Student Exchange Report 2022-23</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.4.3 report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}


{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 6" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Fund position</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Infrastructure</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Infrastructure     4.1.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	ICT Enabled Class Rooms</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'ICT enabled class rooms 4.1.3']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}


{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 7" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship & Freeships Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	5.1.2 Sports and Culture Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.1.3 Capacity Building & Skill Enhancement Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	5.1.4 Career Counseling and Placement Cell Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.2.1 Appointment Letters</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.2.1 Appointment Letters']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">6</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	5.3.2 Students' Engagement in Administration</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">7</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Schlorships 2022-23</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}


{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 8" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Criterion 6</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}



{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                                <div x-show="openTab === 9" class="transition-all duration-300 bg-white p-4 rounded-sm shadow-md">--}}
{{--                                    <section class="container px-4 mx-auto">--}}
{{--                                        <div class="flex flex-col">--}}
{{--                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">--}}
{{--                                                    <div class="overflow-hidden ">--}}
{{--                                                        <table class="min-w-full ">--}}
{{--                                                            <thead class="bg-lightTheme">--}}
{{--                                                            <tr>--}}
{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    S.No.--}}
{{--                                                                </th>--}}

{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Activity/Metrics Reports--}}
{{--                                                                </th>--}}


{{--                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">--}}
{{--                                                                    Download--}}
{{--                                                                </th>--}}

{{--                                                            </tr>--}}
{{--                                                            </thead>--}}

{{--                                                            <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">Annual Report of the Activities (2021-22)</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report of the Activities (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">2</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">3</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	7.1.1 Facilities for Women Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Facilities for Women']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">4</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">5</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.9 List of Activities for Inculcating the Values</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.9 List of Activities for Inculcating the Values']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">6</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">7</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	7.2.1 Best Practices Pics</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Pics']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">8</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">7.1.10 Code of Conduct Report</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.10 Code of Conduct']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">9</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Annual Report (Session 2022-23)</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report (Session 2022-23)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}

{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr class="border-[1px] border-darkTheme">--}}
{{--                                                                <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">10</td>--}}
{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <h2 class="text-sm font-semibold text-darkTheme">	Criteria 7 (2022-23) Data</h2>--}}
{{--                                                                </td>--}}

{{--                                                                <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">--}}
{{--                                                                    <div class="flex items-center gap-x-6">--}}
{{--                                                                        <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Criterion 7  2022-23 Data']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">--}}
{{--                                                                            View/Download--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </td>--}}
{{--                                                            </tr>--}}



{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>--}}







{{--                    </div>--}}
                    <div class="h-max {{$type==='college-aqar-data'?'':'hidden'}} w-full p-2">
                        <div x-data="{ openTab: 1 }" class="overflow-x-auto w-full">
                            <div class=" mx-auto w-full">
                                <div class="mb-4 flex p-2  rounded-sm w-full flex-wrap ">
                                    <button x-on:click="openTab = 1" :class="openTab === 1 ? 'bg-lightTheme border-darkTheme' : 'bg-darkTheme text-white border-lightTheme '" class="  py-1 px-4 text-sm border-[1px]  rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                       Year 2021
                                    </button>
                                    <button x-on:click="openTab = 2" :class="openTab === 2 ? 'bg-lightTheme border-darkTheme' : 'bg-darkTheme text-white border-lightTheme '" class="  py-1 px-4 text-sm border-[1px]  rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                       Year 2022
                                    </button>
                                    <button x-on:click="openTab = 3" :class="openTab === 3 ? 'bg-lightTheme border-darkTheme' : 'bg-darkTheme text-white border-lightTheme '" class="  py-1 px-4 text-sm border-[1px]  rounded-sm focus:outline-none focus:shadow-outline-blue transition-all duration-300">
                                       Year 2023
                                    </button>
                                </div>

                                <div x-show="openTab === 1" class="transition-all duration-300 bg-white px-2 rounded-sm shadow-md">
                                    <div class="overflow-x-auto px-2 w-full">
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Extended Profile</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Vacancy Positions</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Vacancy Position for Last Five Years']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 1</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Lesson Plans</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'LESSON PLANS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.1.3 BoS & Paper Setter</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.1.3 BoS & PAPER SETTER']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.2.1 Affiliation Letters</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.2.1  Affiliation LETTERS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">
                                                            1.4.1 FEEDBACK REPORTS LINK FILE</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 21-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 2</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Student's Satisfaction Survey</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Students  Satisfaction Survey (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'House  Exam Date Sheet 2021-22']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 3</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.5.1 Student Exchange Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Student Exchange 3.5.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 4</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Fund position</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Infrastructure</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Infrastructure     4.1.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">ICT Enabled Class Rooms</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'ICT enabled class rooms 4.1.3']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 5</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship & Freeships Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.2 Sports and Culture Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.3 Capacity Building & Skill Enhancement Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.4 Career Counseling and Placement Cell Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.2.1 Appointment Letters</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.2.1 Appointment Letters']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.3.2 Students' Engagement in Administration</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">7</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship </h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship 2016-21']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 6</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 6</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 7</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Annual Report of the Activities</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report of the Activities (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitisation Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Facilities for Women Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Facilities for Women()2023-2024']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.9 List of Activities for Inculcating the Values</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.9 List of Activities for Inculcating the Values(2021-2022)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices Pics</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Pics']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">7</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.10 Code of Conduct Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.10 Code of Conduct']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                                <div x-show="openTab === 2" class="transition-all duration-300 bg-white px-2 rounded-sm shadow-md">
                                    <div class="overflow-x-auto px-2 w-full">
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Extended Profile (2022)</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Vacancy Positions</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Vacancy Position for Last Five Years']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 1</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Lesson Plans</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'LESSON PLANS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.1.3 BoS & Paper Setter</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.1.3 BoS & PAPER SETTER']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.2.1 Affiliation Letters</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.2.1 AFFILIATION LETTERS 23-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">
                                                            1.4.1 FEEDBACK REPORTS LINK FILE</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 22-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 2</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Student's Satisfaction Survey</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Students  Satisfaction Survey (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Date Sheet House Examinations 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 3</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.5.1 Student Exchange Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.5.1  Student Exchange 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 Extension Activity Report 2022-23</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.4.3 report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 4</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Fund position</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Infrastructure</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Infrastructure     4.1.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">ICT Enabled Class Rooms</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'ICT enabled class rooms 4.1.3']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 5</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship & Freeships Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.2 Sports and Culture Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.3 Capacity Building & Skill Enhancement Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.4 Career Counseling and Placement Cell Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.2.1 Appointment Letters</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.2.1 Appointment Letters']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.3.2 Students' Engagement in Administration</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">7</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship </h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 6</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 6</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 7</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Annual Report of the Activities</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report (Session 2022-23)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitization Action Plan (1)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Facilities for Women Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Facilities for Women()2023-2024']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.9 List of Activities for Inculcating the Values</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.9 List of Activities for Inculcating the Values(2021-2022)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Report (2022-23)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices Pics</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Pics']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">7</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.10 Code of Conduct Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.10 Code of Conduct']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">8</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criteria 7 Data</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Criterion 7  2022-23 Data']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                                <div x-show="openTab === 3" class="transition-all duration-300 bg-white px-2 rounded-sm shadow-md">
                                    <div class="overflow-x-auto px-2 w-full">
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Extended Profile (2023)</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Vacancy Positions</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Vacancy Position for Last Five Years']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 1</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Lesson Plans</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'LESSON PLANS']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.1.3 BoS & Paper Setter</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.1.3 BoS & PAPER SETTER']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.2.1 Affiliation Letters</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.2.1 AFFILIATION LETTERS 23-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">1.3.2 Experiential Learning</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.3.2.& 1.3.3 EXPERIENTIAL LEARNING 23-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download    
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">
                                                            1.4.1 FEEDBACK REPORTS LINK FILE</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'1.4.1 & 1.4.2 FEEDBACK REPORTS LINK FILE 23-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 2</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Student's Satisfaction Survey</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Students  Satisfaction Survey (2021-22)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">House Exam Term Date Sheet</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'2.5.1 Date sheet house exam Dec. 2023']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                                  </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Remedial Classes</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'2.2.1 AQAR 2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download  
                                                                  </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Educational Tour</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'2.3.1 Educational tours and trainings 2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download     
                                                                </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">ICT Tools</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'2.3.2 ICT Tools 2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download      
                                                                </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Results House Exam 2023-24</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'2.5.1 House exam result Dec.  2023']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download      
                                                                </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Evaluation Notice</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Evaluation notice 2023 24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download    
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 3</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.5.1 Student Exchange Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.5.1 student exchange 2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criterion 3.4.3 Extension Activity Report 2022-23</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'3.4.3 extension activities 2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 4</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Fund position</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Infrastructure</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Infrastructure     4.1.1']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">ICT Enabled Class Rooms</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'ICT enabled class rooms 4.1.3']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                             </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">  E -Resources</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'4.4.2   E-Resources']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download 
                                                                </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">  Details of subscriptions</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'4.2.2 Details of subscriptions']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download    
                                                                </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">  Maintenance</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'4.4.2 Maintenance']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download  
                                                                
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 5</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship & Freeships Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship & Freeships Report']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.2 Sports and Culture Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'#']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.3 Capacity Building & Skill Enhancement Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.3 Yoga &  Health']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.4 Career Counseling and Placement Cell Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.4 Career_Counseling_and_Placement_cell_2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.2.1 Appointment Letters</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.2.1 Appointment Letters']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.3.2 Students' Engagement in Administration</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'CSCA']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">7</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">5.1.1 Scholarship </h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'5.1.1 Scholarship 2022-23']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 6</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">6.1.2 Committees 2023-2024</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Committees 2023-2024']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">6.2.1 Strategic Plan</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'6.2.1 Institutional Strategic perspective plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <h1 class="font-bold text-lg text-darkText mb-2">Criterion 7</h1>
                                            <table class="min-w-full ">
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">1</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Annual Report of the Activities</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Annual Report  of Activities 2023-24']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">2</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Annual Gender Sensitization Action Plan</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Annual Gender Sensitisation Action Plan']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">3</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.1 Facilities for Women Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.1 Facilities for Women()2023-2024']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">4</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.9 List of Activities for Inculcating the Values</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.9 List of Activities for inculcating the values']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">5</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Report (2023-24)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">6</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.2.1 Best Practices Pics</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.2.1 Best Practices Pics (2023-24)']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">7</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">7.1.10 Code of Conduct Report</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'7.1.10 Code of Conduct']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-[1px] border-lightTheme">
                                                    <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-lightTheme w-[100px]">8</td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme">
                                                        <h2 class="text-sm font-semibold text-darkTheme">Criteria 7 Data</h2>
                                                    </td>
                                                    <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-lightTheme w-[100px]">
                                                        <div class="flex items-center gap-x-6">
                                                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Criterion 7  2022-23 Data']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                View/Download
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

                    </div>

                    <div class="h-max {{$type==='college-sar'?'':'hidden'}} w-full p-4">
                                <section class="px-2 container mx-auto">
                                    <div class="flex flex-col">
                                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                <div class="overflow-hidden ">
                                                    <table class="min-w-full ">
                                                        <thead class="bg-lightTheme">
                                                        <tr>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                S.No.
                                                            </th>

                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                SAR Reports
                                                            </th>
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Year
                                                            </th>

                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                Download
                                                            </th>

                                                        </tr>
                                                        </thead>

                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                        <tr class="border-[1px] border-darkTheme">
                                                            <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">1</td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-semibold text-darkTheme">	SAR Report 2024</h2>
                                                            </td>
                                                            <td class="px-4 py-1 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                <h2 class="text-sm font-normal italic text-darkTheme">2024</h2>
                                                            </td>
                                                            <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                                <div class="flex items-center gap-x-6">
                                                                    <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'SAR']) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                        View/Download
                                                                    </a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                    </div>


                    <div class="h-max {{$type==='institutional-distinctiveness'?'':'hidden'}} w-full bg-white p-4">
                        <div class="w-full flex justify-end">
                            <a href="{{ route('pdfViewer',['folder'=>'naac','file'=>'Insttutional Distinctiveness']) }}" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>
                        </div>
                        <p class="mt-2 text-darkText italic text-md"> The college was established in 1986. Since the college is located in rural areas,
                            its distinctiveness lies in catering to the needs of students of economically
                            weaker sections who are incapable of going to urban areas for higher
                            education. </p>
                        <p class="mt-2 text-darkText italic text-md">The college aims at providing such students the platform to hone their skills
                            by organising skill enhancement workshops , such as communications skills
                            and personality development , self defense , cooking , beautician , adventure
                            sports , yoga camps , awareness lectures about their legal rights.</p>
                        <p class="mt-2 text-darkText italic text-md">The emphasis of the college is to promote computer literacy amongst the
                            students with the college’s well equipped computer labs and planned courses
                            in computers. Most of the students in the college are from horticulture
                            background , hence the college makes an efforts to provide consultancy
                            services to the college students as well as to local people by organising lecture
                            from progressive horticulturists as well as professional consultants to make
                            them aware of the changing scenario in apple industry. </p>
                        <p class="mt-2 text-darkText italic text-md">In addition to these welfare endeavors, the preservation, promotion and
                            popularization of local culture, history and dialect are given a priority in most of
                            the co-curricular representations. All such initiatives have built a distinctive
                            identity of the institution</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

