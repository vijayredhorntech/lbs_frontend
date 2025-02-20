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
                                    onclick=" document.getElementById('academicsTabs').classList.toggle('hidden') ">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div id="academicsTabs" class="w-full lg:flex md:flex hidden flex-col">
                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('coursesTabs').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='COMPOSITION'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                         COURSES
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="coursesTabs" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           UG COURSES: BA, BSC, BCOM, BCA
                                        </span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics', ['type' => 'PG-COURSE', 'folder'=>'academic', 'file'=>'rusa_guidline'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='PG-COURSE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           PG COURSES: MA HISTORY, MA POLITICAL SCIENCE
                                        </span>
                                            @if($type==='PG-COURSE')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics', ['type' => 'ADD-ON-COURSE', 'folder'=>'academic', 'file'=>'BROCHURE ADD-ON 23-24'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='ADD-ON-COURSE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           ADD-ON COURSES
                                        </span>
                                            @if($type==='ADD-ON-COURSE')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>



                            </div>

{{--                          // departments tabs starts here--}}
                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('artFacultyList').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='ENGLISH'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           ARTS FACULTY
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="artFacultyList" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'ENGLISH'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='ENGLISH'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>ENGLISH</span>
                                            @if($type==='ENGLISH')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'HINDI'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='HINDI'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>HINDI</span>
                                            @if($type==='HINDI')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>SANSKRIT</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'PHILOSOPHY'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='PHILOSOPHY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>PHILOSOPHY</span>
                                            @if($type==='PHILOSOPHY')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>HISTORY</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'POLITICAL-SCIENCE'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='POLITICAL-SCIENCE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>POLITICAL SCIENCE</span>
                                            @if($type==='POLITICAL-SCIENCE')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'PUBLIC-ADMINISTRATION'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='PUBLIC-ADMINISTRATION'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>PUBLIC ADMINISTRATION</span>
                                            @if($type==='PUBLIC-ADMINISTRATION')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>ECONOMICS</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MATHEMATICS</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>PHYSICAL EDUCATION</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MUSIC (VOCAL)</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MUSIC (INSTRUMENTAL)</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'GEOGRAPHY'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='GEOGRAPHY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>GEOGRAPHY</span>
                                            @if($type==='GEOGRAPHY')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('commFacultyList').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='COMMERCE'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                          COMMERCE FACULTY
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="commFacultyList" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'COMMERCE'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='COMMERCE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>COMMERCE</span>
                                            @if($type==='COMMERCE')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('medicalSciFacultyList').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='MEDICAL-BOTANY'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                         SCIENCE FACULTY (MEDICAL)
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="medicalSciFacultyList" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'MEDICAL-BOTANY'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MEDICAL-BOTANY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>BOTANY</span>
                                            @if($type==='MEDICAL-BOTANY')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'MEDICAL-CHEMISTRY'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MEDICAL-CHEMISTRY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>CHEMISTRY</span>
                                            @if($type==='MEDICAL-CHEMISTRY')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'MEDICAL-ZOOLOGY'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MEDICAL-ZOOLOGY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>ZOOLOGY</span>
                                            @if($type==='MEDICAL-ZOOLOGY')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('nonMedicalSciFacultyList').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='NON-MEDICAL-PHYSICS'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            SCIENCE FACULTY (NON-MEDICAL)
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="nonMedicalSciFacultyList" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'MEDICAL-CHEMISTRY'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='MEDICAL-CHEMISTRY'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>CHEMISTRY</span>
                                            @if($type==='MEDICAL-CHEMISTRY')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'NON-MEDICAL-PHYSICS'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='NON-MEDICAL-PHYSICS'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>PHYSICS</span>
                                            @if($type==='NON-MEDICAL-PHYSICS')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MATHEMATICS</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>

                            </div>

                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('computerList').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='BCA'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            COMPUTER SCIENCE & B VOC FACULTY
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="computerList" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'BCA'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='BCA'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>BCA</span>
                                            @if($type==='BCA')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'BVOC'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='BVOC'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>BVOC</span>
                                            @if($type==='BVOC')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="{{route('academics',['type'=>'PGDCA'])}}">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='PGDCA'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>PGDCA</span>
                                            @if($type==='PGDCA')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="w-full lg:col-span-3 md:col-span-3 ">
                                <a href="javascript:void(0)"
                                   onclick="document.getElementById('pgDepartment').classList.toggle('hidden')">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type===''?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            PG DEPARTMENTS
                                        </span>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="pgDepartment" class="w-full rounded-t-md  flex flex-col hidden ">
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MA HISTORY</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MA POLITICAL SCIENCE</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MA ENGLISH</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>MA HINDI</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full">
                                    <a href="#">
                                        <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type===''?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                            <span>M COM</span>
                                            @if($type==='')
                                                <i class="fa fa-angles-right"></i>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </div>
 {{--                            // departments tabs ends here--}}


                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'SYLLABUS', 'folder'=>null, 'file'=>null])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='SYLLABUS'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            SYLLABUS
                                        </span>
                                        @if($type==='SYLLABUS')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'PROGRAMME-OUTCOMES', 'folder'=>'academic', 'file'=>'Programme Outcomes'])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='PROGRAMME-OUTCOMES'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            PROGRAMME OUTCOMES
                                        </span>
                                        @if($type==='PROGRAMME-OUTCOMES')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'LESSON-PLANS', 'folder'=>'academic', 'file'=>'LESSON PLANS'])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='LESSON-PLANS'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            LESSON PLANS
                                        </span>
                                        @if($type==='LESSON-PLANS')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'RESEARCH-ACTIVITIES', 'folder'=>'academic', 'file'=>'Research Activities'])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='RESEARCH-ACTIVITIES'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            RESEARCH ACTIVITIES
                                        </span>
                                        @if($type==='RESEARCH-ACTIVITIES')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'ACADEMIC-CALENDER', 'folder'=>null, 'file'=>null])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='ACADEMIC-CALENDER'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                            ACADEMIC CALENDAR
                                        </span>
                                        @if($type==='ACADEMIC-CALENDER')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'TIME-TABLE', 'folder'=>'academic', 'file'=>'Time Table 2022-23'])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='TIME-TABLE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           TIME TABLE
                                        </span>
                                        @if($type==='TIME-TABLE')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                          </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('academics', ['type' => 'IDP', 'folder'=>'academic', 'file'=>'IDP'])}}">
                                    <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='TIME-TABLE'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                           INSTITUTIONAL DEVELOPMENT PLAN
                                        </span>
                                        @if($type==='IDP')
                                            <i class="fa fa-angles-right"></i>
                                        @endif
                                        </div>

                                 </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col lg:col-span-3 md:col-span-2 shadow-lg shadow-black/30 border-[1px] h-max border-white rounded-md overflow-x-auto bg-white">
                        @if($filePath == null)
                            @if($pageType==='academic')
                            <div class="w-full p-4">
                            <!-- component -->
                            <section class="container px-4 mx-auto">
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

                                                        @foreach($tableHeader as $head)
                                                            <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                                {{$head}}
                                                            </th>
                                                        @endforeach

                                                        <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
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
                                                                    <a href="{{ route('pdfViewer',['folder'=>$folderName,'file'=>$data[2]]) }}" target="_blank" class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
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
                                @else
                                <div class="w-full p-4">
                                    {!! $pageContent !!}
                                </div>
                                @endif
                        @endif
                        @if($filePath != null)
                                <div class="w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
                                    <section class=" px-4 mx-auto">
                                        <iframe src="{{$filePath}}" style="width:100%; height: 1000px" frameborder="0"></iframe>
                                    </section>
                                </div>
                            @endif

                    </div>
                </div>
            </div>
        </div>
    @endsection

