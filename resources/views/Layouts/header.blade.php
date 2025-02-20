<div class="w-full bg-darkTheme h-max flex justify-center flex-wrap p-2">
    <div class="lg:w-70 md:w-90 w-full flex flex-wrap justify-end ">
        <div class="text-black text-sm font-normal w-max flex flex-wrap justify-center col-span-2">
            <ul class="lg:flex md:flex sm:flex grid grid-cols-4 flex-wrap gap-2 text-darkText justify-end">
                <a href="https://lbsgcsnagar.highalteducation.in" target="_blank"
                   class="bg-danger/70 text-white flex items-center px-4 rounded-sm animate-bounce col-span-4">
                    <li class=" underline text-lg pr-2 font-semibold ">
                        Online Admission 2024-25
                    </li>
                </a>
                <a href="{{ route('pdfViewer',['folder'=>'other','file'=>'covid']) }}" target="_blank" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                    <li class=" pr-2 italic   ">
                        Covid-19 Guidelines
                    </li>
                </a>
                <a href="http://lbsattendance.himsoft.online/login" target="_blank" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                    <li class=" pr-2 italic   ">
                        Faculty Login
                    </li>
                </a>
                <a href="https://lbsgcsnagar.highalteducation.in/Account/login" target="_blank" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                    <li class=" pr-2 italic   ">
                        Student Login
                    </li>
                </a>

                @if (Auth::check())
                    <a href="{{ route('logout') }}" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                        <li class=" pr-2 italic   ">
                            Logout
                        </li>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="bg-lightTheme text-black flex items-center px-4 rounded-sm">
                        <li class=" pr-2 italic   ">
                            Admin Login
                        </li>
                    </a>
                @endif



                {{--                <a href="{{asset('assets/pdf/covid.pdf')}}" target="_blank"--}}
                {{--                   class="border-[1px] border-lightTheme  text-white flex items-center px-4 rounded-sm hover:bg-danger/80 hover:border-danger/80 hover:scale-105 transition ease-in duration-2000 ">--}}
                {{--                    <li class=" pr-2 italic   ">--}}
                {{--                        Student Login--}}
                {{--                    </li>--}}
                {{--                </a>--}}

            </ul>
        </div>
    </div>
</div>

<div class="w-full lg:h-36 md:h-32 sm:h-28 h-20 flex  justify-evenly px-2 pb-2 sticky top-0 z-50 bg-white relative">
    <img class="h-full w-auto" src="{{asset('assets/images/logo.png')}}" alt="">
    <div class="lg:flex hidden items-center gap-4 ">

        <div class="flex items-center gap-4 w-max">
            <div class="flex flex-col ">
                <span class="text-danger/80  text-md font-bold"><i class="fa fa-phone"></i> Phone:-</span>
                <a href="tel:01781-238149" class="font-medium text-lg text-darkTheme ">01781-238149</a>

            </div>
            <div class="flex flex-col ">
                <span class="text-danger/80  text-md font-bold"><i class="fa fa-envelope"></i> Email:-</span>
                <a href="mailto:gcsnagar25@rediffmail.com" class="font-medium text-lg text-darkTheme ">gcsnagar25@rediffmail.com</a>

            </div>
        </div>



    </div>
    <div class="lg:flex hidden justify-end w-full absolute top-0 right-0 px-2 gap-2">
        @if (Auth::check())
            <a href="{{route('osa')}}" class="w-max italic mt-2 bg-darkTheme text-white flex items-center px-4 rounded-sm">
                View OSA Registration
            </a>
            <a href="{{route('studentComplains')}}" class="w-max italic mt-2 bg-darkTheme text-white flex items-center px-4 rounded-sm">
                View Student Complaint
            </a>
            @else
            <a href="{{route('alumni',['type'=>'registration'])}}" class="w-max italic mt-2 bg-darkTheme text-white flex items-center px-4 rounded-sm">
                OSA Registration
            </a>
            <a href="{{route('alumni',['type'=>'studentComplaint'])}}" class="w-max italic mt-2 bg-darkTheme text-white flex items-center px-4 rounded-sm">
                Student Complaint
            </a>
        @endif




        <a href="{{route('alumni',['type'=>'feedbackSurvey'])}}" class="w-max italic mt-2 bg-darkTheme text-white flex items-center px-4 rounded-sm">
            Feedback Survey
        </a>


    </div>
</div>

<div
    class="w-full sticky lg:top-36 md:top-32 sm:top-28 top-20 z-50 lg:h-max md:h-max sm:max-h-64 max-h-64 lg:overflow-y-visible md:overflow-y-visible sm:overflow-y-auto overflow-y-auto">
    <div class="bg-black/80 w-full flex flex-col justify-center lg:items-center  items-start gap-2 relative px-2 ">
        <div class="w-max h-max lg:hidden flex">
            <i id="toggleButton"
               class="fa-solid fa-bars  ml-1 text-lg text-white p-2 rounded-sm hover:bg-lightTheme hover:text-darkTheme transition ease-in duration-2000"
               onclick="
            let menuList = document.getElementById('menuList');
            if(menuList.classList.contains('hidden')){
                menuList.classList.remove('hidden');
            }else{
                menuList.classList.add('hidden');
            }
            " aria-hidden="true"></i>
        </div>
        <ul class="  lg:flex hidden lg:flex-row flex-col text-white/90 uppercase w-full items-center justify-center font-medium"
            id="menuList">
            @php
                $navList = [
                                 [
                                    'name' => 'Home',
                                    'link' => route('home')
                                  ],
                                 [
                                    'name' => 'About Us',
                                    'link' => route('aboutCollege',['type'=>'THE-COLLEGE']),
                                  ],
                                 [
                                    'name' => 'Administrative',
                                    'link' => route('administration',['type'=>'PRINCIPAL']),
                                ],
                                 [
                                        'name' => 'Academics',
                                        'link' => route('academics', ['type' => 'PG-COURSE', 'folder'=>'academic', 'file'=>'rusa_guidline']),
                                    ],

                                 [
                                    'name' => 'Admissions',
                                    'link' => route('admissionPages',['folder'=>'admission','file'=>'RUSA(CBCS)','type'=>'RUSA(CBCS)']),

                                 ],
                                 [
                                    'name' => 'Facilities',
                                    'link' => route('facility',['type'=>'LIBRARY']),

                                 ],
                                 [
                                 'name' => 'Activities',
                                 'link' => route('activities', ['type' => 'NSS'])
                                ],
                                 [
                                     'name' => 'Reports',
                                     'link' => route('annual-report', ['type' => 'COLLEGE-ANNUAL-REPORTS'])
                                  ],
                                 [
                                      'name' => 'NAAC',
                                      'link' => route('naac', ['type' => 'COLLEGE-AQAR']),
                                  ],
                                 [
                                      'name' => 'Nirf',
                                      'link' => route('nirf',['type'=>'NIRF']),
                                  ],
                                 [
                                      'name' => 'Alumni',
                                      'link' => route('alumni', ['type' => 'ALUMNI-CHARTER']),
                                  ],

                            ];
            @endphp
            @foreach($navList as $navItem)
                <a href="{{ $navItem['link'] }}">
                    <li class="relative py-3 lg:hover:bg-darkTheme  md:hover:bg-darkTheme text-sm lg:hover:text-white md:hover:text-white px-4 transition ease-in duration-2000 group  items-center">
                        <a href="{{ $navItem['link'] }}">
                            {{ $navItem['name'] }}
                            @if(isset($navItem['subNav']))
                                <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"></i>
                            @endif
                        </a>

                        @if(isset($navItem['subNav']))
                            <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-black/90 text-white">
                                @foreach($navItem['subNav'] as $subNavItem)
                                    <a href="{{ $subNavItem['link'] }}">
                                        <li class="w-[250px] py-2.5 lg:hover:bg-darkTheme  md:hover:bg-darkTheme text-sm lg:hover:text-white md:hover:text-white px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                            <a href="{{ $subNavItem['link'] }}"
                                               @if(isset($subNavItem['target'])) target="{{ $subNavItem['target'] }}" @endif>
                                                {{ $subNavItem['name'] }}

                                                @if(isset($subNavItem['subNav']))
                                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                                       aria-hidden="true"></i>
                                                @endif
                                            </a>

                                            @if(isset($subNavItem['subNav']))
                                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-black/90 text-white">
                                                    @foreach($subNavItem['subNav'] as $nestedSubNavItem)
                                                        <a href="{{ $nestedSubNavItem['link'] }}">
                                                            <li class="w-[200px] py-2.5 hover:bg-darkTheme hover:text-white text-sm px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                                                {{ $nestedSubNavItem['name'] }}
                                                            </li>
                                                        </a>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>
