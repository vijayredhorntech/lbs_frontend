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
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-black mb-2">ACTIVITIES</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('activityTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="activityTabs" class="w-full lg:flex md:flex hidden flex-col mt-4">
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'NSS'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='NSS'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>NSS</span>
                                    @if($type==='NSS')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'NCC'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='NCC'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>NCC</span>
                                    @if($type==='NCC')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'ROVERS-RANGERS'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ROVERS-RANGERS'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ROVERS & RANGERS</span>
                                    @if($type==='ROVERS-RANGERS')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'RED-RIBBON-CLUB'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='RED-RIBBON-CLUB'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>RED RIBBON CLUB</span>
                                    @if($type==='RED-RIBBON-CLUB')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'ECO-CLUB'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ECO-CLUB'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ECO CLUB</span>
                                    @if($type==='ECO-CLUB')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'REGULAR-ACTIVITIES'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='REGULAR-ACTIVITIES'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>REGULAR ACTIVITIES</span>
                                    @if($type==='REGULAR-ACTIVITIES')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'ACADEMIC-ACTIVITIES'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ACADEMIC-ACTIVITIES'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>ACADEMIC ACTIVITIES</span>
                                    @if($type==='ACADEMIC-ACTIVITIES')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'EXPERIENTIAL-LEARNING'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='EXPERIENTIAL-LEARNING'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>EXPERIENTIAL LEARNING</span>
                                    @if($type==='EXPERIENTIAL-LEARNING')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'CONFERENCES-SEMINARS-WORKSHOPS'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='CONFERENCES-SEMINARS-WORKSHOPS'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-white hover:bg-white  hover:border-black lg:text-md md:text-md text-sm font-medium transition-colors duration-200">
                                    <span>CONFERENCES, SEMINARS & WORKSHOPS</span>
                                    @if($type==='CONFERENCES-SEMINARS-WORKSHOPS')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('activities',['type'=>'WOMEN-GRIEVANCE-REDRESSAL-CELL'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='WOMEN-GRIEVANCE-REDRESSAL-CELL'?'text-darkTheme bg-white ':'bg-black/10 '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme rounded-b-md lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>WOMEN GRIEVANCE REDRESSAL CELL</span>
                                    @if($type==='WOMEN-GRIEVANCE-REDRESSAL-CELL')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="w-full h-max flex flex-col lg:col-span-3 md:col-span-2  border-[1px] border-white overflow-x-auto bg-white shadow-lg shadow-black/40">
                    <div class="w-full bg-white p-6  h-max">
                              <section class=" px-4 mx-auto h-max {{$type ==='WOMEN-GRIEVANCE-REDRESSAL-CELL'?'hidden':''}}">
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
                              <div class="w-full px-4 {{$type !='WOMEN-GRIEVANCE-REDRESSAL-CELL'?'hidden':'flex flex-col'}}">
                                    <div class="w-full text-darkTheme font-bold text-xl">
                                        <span>
                                            {{$title}}
                                        </span>
                                    </div>
                        <span class="text-darkText italic text-md">Women Grievance Redressal Cell was established under the Act No 20 of 1990 of Govt of India. Women’s grievance redressal cell is meant to safe guard and promote well being of all women employees of the organization. It takes care of all complaints on sexual harassment of women of women at workplace and action taken for redressal of complaints. The cell is responsible for looking into any complaints filed by students & staff about women grievance at college.</span>
                        <div class="w-full text-darkTheme font-bold text-xl py-2">
                            <span>OBJECTIVES OF COMMITTEE</span>
                        </div>
                        <span class="text-darkText italic text-md">Women grievance redressal cell is a growing community of women in Lal Bahadur Shastri Government College Saraswati Nagar which share a common purpose to learn, educate and collaborate on ideas that have the power to effect meaningful and positive change while fighting the challenges they face.</span>
                        <span class="text-darkText italic text-md">To investigate reported cases of sexual harassment of women, if any and submit its report to the disciplinary authority recommending action to be taken against the accused miscreants.</span>
                        <span class="text-darkText italic text-md">To hold meetings regularly.</span>
                        <span class="text-darkText italic text-md">To organize various functions acquainting the women regarding their rights.</span>
                        <span class="text-darkText italic text-md">To equip the female students, faculty and staff members with knowledge of their legal rights.</span>
                        <span class="text-darkText italic text-md">To safe guard the rights of female students, faculty and staff members.</span>
                        <span class="text-darkText italic text-md">To incorporate hygiene habits and ensure a healthy atmosphere in and around college.</span>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

