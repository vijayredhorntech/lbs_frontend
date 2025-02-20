@extends('Layouts.layout')

@section('content')


    <div class="swiffy-slider slider-indicators-round">
        <ul class="slider-container shadow-lg shadow-darkTheme/30">
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/administration/campus.jpg')}}">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/gallery/30.jpg')}}">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/gallery/6.jpg')}}">
            </li>
            <li>
                <img class="lg:h-[600px] md:h-[500px] sm:h-[300px] h-[200px] w-full object-cover "
                     src="{{asset('assets/images/gallery/42.jpg')}}">
            </li>
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>

        <div class="slider-indicators">
            <button class="active"></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
    <div class="w-full h-max " style="background-image: url({{asset('assets/images/iconbg.png')}})">
        <div class="w-full h-max bg-lightTheme/20 flex justify-center p-4">
            <div class="lg:w-[80%] md:w-[80%] w-full grid grid-cols-1 pt-12">
                {{--                <div class="w-full flex flex-col px-4">--}}
                {{--                    <span class="italic font-semibold text-md"> From</span>--}}
                {{--                    <span class="font-bold lg:text-3xl md:text-2xl text-xl text-darkText">PRINCIPAL'S DESK</span>--}}

                {{--                    <div class="w-full mt-4">--}}

                {{--                        <img class="w-auto h-32 rounded-md mb-4 mr-4"--}}
                {{--                             src="{{asset('assets/images/administration/principal.jpg')}}" alt="" style="float: left">--}}
                {{--                        <p class="text-md text-darkText font-medium text-justify">A momentum has been created to--}}
                {{--                            strengthen the frame of educational arena by following a focused approach on curriculum--}}
                {{--                            expansion and gearing up developmental activities in the college. As educated minds have to--}}
                {{--                            face challenges in the global market therefore multifarious events towards personality--}}
                {{--                            development have been kept in mind by the dedicated staff members who deserve due--}}
                {{--                            appreciation and felicitation for their contribution.--}}
                {{--                            I acknowledge the whole hearted support of all the parents and well wishers without whose--}}
                {{--                            help any achievement would have not been possible.</p>--}}
                {{--                        <div class="w-full flex justify-end">--}}
                {{--                            <a href="{{route('administration',['type'=>'PRINCIPAL'])}}"--}}
                {{--                               class="bg-darkTheme text-white text-xs px-4 py-1 rounded-sm hover:scale-105 transition ease-in duration-2000 flex items-center">Read--}}
                {{--                                more <i class="fa fa-arrow-right ml-2"></i> </a>--}}
                {{--                        </div>--}}


                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="w-full flex flex-col px-4 ">
                    <span class="italic font-semibold text-md">Welcome to</span>
                    <span class="font-bold lg:text-3xl md:text-2xl text-xl text-darkText">Lal Bahadur Shastri Government College</span>
                    <div class="w-full mt-4">
                        <img src="{{asset('assets/images/gallery/1.jpg')}}"
                             class="h-52 mb-4 mr-4 w-auto rounded-sm" alt="" style="float: left">
                        <p class="  text-md text-darkText font-medium text-justify">Lal Bahadur Shastri Government PG
                            College Saraswati Nagar is situated at a distance of about 100 kms. from the capital city of
                            Shimla near famous Hateshwari temple in Jubbal tehsil of district Shimla. It is located in a
                            valley formed by river Pabbar and is surrounded by scenic beauty of small hills and apple
                            orchards.</p>
                        <p class=" mt-2 text-md text-darkText font-medium text-justify">The College was established in
                            the year 1986 and offers courses in the Faculty of Arts (12 departments), Faculty of Science
                            (both Medical and Non-Medical streams) and Faculty of Commerce. The College has a new six
                            storeyed building containing classrooms, well equipped and spacious science laboratories, a
                            hall, girls common room besides well stocked library, which subscribes to several newspapers
                            and periodicals. A new hostel for girls has been constructed in the campus and will be made
                            functional during the current session.</p>

                        <div class="w-full flex justify-end">
                            <a href="{{route('aboutCollege',['type'=>'THE-COLLEGE'])}}"
                               class="bg-darkTheme text-white text-xs px-4 py-1 rounded-sm hover:scale-105 transition ease-in duration-2000 flex items-center">Read
                                more <i class="fa fa-arrow-right ml-2"></i> </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-max flex justify-center p-4">
        <div class="lg:w-[80%] md:w-[80%] w-full">
            <div class="w-full h-max">
                <div
                    class="w-full grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-4 gap-x-12 pb-4">
                    <div class="w-full ">
                        <div
                            class="w-full bg-darkTheme text-white font-semibold text-xl rounded-t-md flex justify-center px-2 py-1.5">
                            <span>Important Downloads</span>
                        </div>
                        <div
                            class="w-full p-2 bg-white rounded-b-md shadow-lg shadow-darkTheme/30 h-[322px] overflow-y-auto">
                            <ul class="grid grid-cols-1 gap-6">
                                @php

                                    $importantDownloads=[
                                    [
                                          'title'=>'Prospectus for the Session 2024-25',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Prospectus_2024-25'])
                                     ],
                                     [
                                          'title'=>'Prospectus BCA 2024-25',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Prospectus_BCA_2024-25'])
                                     ],
                                     [
                                          'title'=>'Information Brochure B.Voc 2024-25',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'INFORMATION_BROCHURE___B.Voc_2024-25'])
                                     ],
                                     [
                                          'title'=>'Information Brochure PGDCA 2024-25',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'INFORMATION_BROCHURE__PGDCA_2024-25'])

                                     ],
                                     [
                                          'title'=>'National Education Policy 2020',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'National Education Policy 2020'])

                                     ],
                                     [
                                          'title'=>'Prospectus for the Session (2023-24)',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Prospectus 2023-24'])

                                     ],
                                     [
                                          'title'=>'Prospectus Self Financing Courses -2023-24',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Prospectus BCA & PGDCA  2023-24'])

                                     ],
                                     [
                                          'title'=>'Prospectus B.Voc.Degree Courses -2023-24',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Prospectus B. Voc. 2023-24'])

                                     ],
                                     [
                                          'title'=>'Admission & Examination Schedule 2023-24',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'AE & Vacation Schedule'])

                                     ],
                                     [
                                          'title'=>'Admission Reservation Roster2023-24',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'admission reservation roster'])

                                     ],
                                     [
                                          'title'=>'Admission Schedule 2023-24',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Admission Schedule 2023-24'])

                                     ],
                                     [
                                          'title'=>'College Magzine2022-23',
                                          'link'=>route('pdfViewer',['folder'=>'downloads','file'=>'Hatkeshwari 2022-23'])

                                     ],
                                 ]
                                @endphp
                                @foreach($importantDownloads as $download)
                                    <a href="{{asset($download['link'])}}" target="_blank">
                                        <li class=" text-dark italic text p-2 hover:bg-darkTheme hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                            {{$download['title']}}
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <div class="lg:col-span-2">
                        <div class="w-full">
                            <div class="w-full bg-darkTheme text-white font-semibold text-xl rounded-t-md flex">
                                <span id="noticesButton" class="py-1.5 px-6 border-[1px] border-darkTheme cursor-pointer rounded-tl-md bg-white text-darkText hover:bg-white hover:text-darkText transition ease-in duration-2000"
                                      onclick="
                                            document.getElementById('notices').classList.remove('hidden');
                                            document.getElementById('latestNews').classList.add('hidden');
                                            document.getElementById('noticesButton').classList.add('bg-white');
                                            document.getElementById('noticesButton').classList.add('text-darkText');
                                            document.getElementById('latestNewsButton').classList.remove('bg-white');
                                            document.getElementById('latestNewsButton').classList.remove('text-darkText');
                                        " >Notices
                                </span>
                                <span id="latestNewsButton" class="py-1.5 px-6 border-[1px] border-darkTheme cursor-pointer hover:bg-white hover:text-darkText transition ease-in duration-2000"
                                      onclick="
                                                document.getElementById('notices').classList.add('hidden');
                                                document.getElementById('latestNews').classList.remove('hidden');
                                                    document.getElementById('noticesButton').classList.remove('bg-white');
                                            document.getElementById('noticesButton').classList.remove('text-darkText');
                                            document.getElementById('latestNewsButton').classList.add('bg-white');
                                            document.getElementById('latestNewsButton').classList.add('text-darkText');
                                            " >
                                    Latest News
                                </span>
                            </div>
                            <div id="notices" class=" w-full p-2 bg-white rounded-b-md shadow-lg shadow-darkTheme/30">
                                <marquee behavior="" direction="up" height="300px">
                                    <ul class="grid grid-cols-1 gap-6">
                                        @php
                                            $notices = [
                                                         ' # The college will be closed for winter vacation from January 1, 2025, to February 4, 2025, and will reopen on 5th Feb.2025',
                                                         ' #  The Annual Athletic Meet for 2024-25 will take place on December 27, 2024, at the college ground. Attendance is compulsory for everyone',
                                                         ' #  NSS 7 days  special  Camp will commence from 20th Dec.2024',
                                                         ' #  House Examination  for the session  2024-25 will commence from 4th  Dec. 2024',
                                                         ' #  SAR  verification team will visit college on 22nd Nov.2024. All stakeholders to note please',
                                                         ' # End Semester Examinations of PG classes will commence from  24th Nov.2024',
                                                         ' # RME  registration for TDC-I is open now. All the students to get registered before deadline of 11th Nov.2024',
                                                         ' # End Semester Examinations of BCA & B Voc. will commence from  4th Nov.2024 ',
                                                         ' # CSCA  Oath Ceremony will be held on 14th Oct. 2024 in the Multipurpose  Hall. All members to note please',
                                                         ' # Blood Donation Camp will be held on 1st Oct. 2024',
                                                         ' # World Tourism  Day will be celebrated  on 27th September 2024',
                                                         ' # NSS  Foundation day on  September  2024',
                                                         ' # Swachhta Pakhwada will be celebrated  from 17th Sept. to  2nd Oct. 2024',
                                                         ' # Hindi Diwas will be  celebrated  on 14th  September 2024',
                                                         ' # Fresher\'s Day will be celebrated on  13th September  2024',
                                                         ' # Principal address to  New students on 13th August 2024',
                                                         ' # Regular  teaching for the Session 2024-25 will commence  from 22nd July 2024',
                                                         ' # Admision   Schedule for  2024-25 is available on college website',
                                                         '# Annual Prize Distribution Function 2023-24 will be held on 11th March 2024',
                                                         '# NSS 7 days Camp will be held from 20th Dec.to 26th Dec 2023',
                                                         '# House Examinationn for the session 2023-24 will be held w.e.f. 4/12/2023',
                                                         '# Aids day awareness drive to be conducted in the college campus on 1st Dec. 2023',
                                                         '# Anmnual Athletic meet for the session 2023-24 will be held on 30th November 2023 in the college Ground',
                                                         '# New session of regular teaching will start from 15th July onwards after admission process is over',
                                                         '# College will remain closed on 10th & 11th July due to bad weather and incessant rain',
                                                         '# Online Admission for UG Classes for the Session 2023-24 will start from 30th June 2023 onwards. Please check Admission Schedule on website',
                                                         '# The Annual Practical for session 2022-23 will be conducted from 20th March onwards . Practical schdule dispalyed on Notice board',
                                                         '# The College will open for regular teaching on 6th Feb.2023 after winter break',
                                                         '# All the UG students are directed to fill University Examination form on or before 15th Feb. 2023 positively',
                                                         '# All the PG students are directed to fill University Examination form on or before 31st January 2023 positively',
                                                         '# college will remain closed for winter Vacation from 1st Jan 2023 to 5th Feb.2023 and will open for regular teaching on 6th Feb.2023',
                                                         '# 7 days NSS special camp will be held from 21st December to 27th December 2022.',
                                                         '# Disaster Awareness Programme by NDRF on 19th December 2022 on the college campus',
                                                         '# House/ Mid Term Examination for the session 2022-23 will be held from 5th December 2022 onwards.',
                                                         '# "NCC 8TH Battalion ATC camp will be held from 8th Nov. to 14th November 2022.',
                                                         '# "NAAC" Peer Team will visit college on 1st & 2nd November 2022 , for 2nd Cycle of Accreditation.',
                                                         '# "Financial Literacy Wellness" workshop will be held on 19th Oct. 2022.',
                                                         '# "NSS Foundation Day" will be celebrated on 24th September 2022',
                                                         '# "FRESHER\'S DAY 2022" will be celebrated on 21st September 2022',
                                                         '# "HINDI DIWAS" will be celebrated on 14th September 2022',
                                                         '# Regular classes of PG and PGDCA for the Session 2022-23 will comence from 1st September 2022',
                                                         '# OnlineAdmision for MA History , Political Science and PGDCA for the Session 2022-23 will start from 10th August 2022 onwards',
                                                         '# "ELC/ SVEEP" Programme by Election commission officers on 27th August 2022 at 11.30am',
                                                         '# Principal Address to New students on 25tth August 2022 at 11.30am',
                                                         '# Regular classes for the Session 2022-23 will start from 1st August 2022 onwards',
                                                         '# Regular classes for the Session 2022-23 will start from 1st August 2022 onwards',
                                                         '# Webinar on "Creativity is the Elixir of Life" in co-ordination with Shoolini University on 3rd July 2020',
                                                         '# Online admission process for the session 2020-21 will start from July 13th 2020 to July 31st 2020',
                                                         '# Admission date extended upto 20th August 2020',
                                                         '# Regular teaching for the session 2020-21 will commence from 5th August 2020',
                                                         '# The college will open for Regular teaching from 8th February 2021',
                                                         '# Seven days NCC camp of 3rd HP Battalion Rampur will be held in college campus from 8th Feb.to 12th Feb.2021',
                                                         '# House Examination for the session 2020-21 will commence from 8th March 2021',
                                                         '# Annual 7days NSS camps will be held from 22nd March to 28th March 2021for the session 2020-21',
                                                         '# College closed for regular teaching for Indefinite period Due to Covid-19 Pandemic, annual examinations also stand postponed',
                                                         '# Webinar on NAAC on 5th May 2021. Prof. S.K.Gupta will be main speaker',
                                                         '# Webinar on Versatile Nature of Chemistry on 18th June 2021, Dr. Kulvinder Singh, Asstt. Prof.Chemistry , DAV Chandigarh will be the main speaker',
                                                         '# *New* Examinations of TDC-IIIrd Year will coommence from 1st July 2021. All the students are directed to go through Date sheet and appear in the Examination accordingly by following the Covid-19 Protocol',
                                                      ]
                                        @endphp
                                        @foreach($notices as $notice)
                                            <li>
                                                <p class="  text-black italic text-md">
                                                    {{$notice}}
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>

                                </marquee>
                            </div>

                            <div id="latestNews" class="hidden w-full p-2  bg-white rounded-b-md shadow-lg shadow-darkTheme/30 h-[322px] overflow-y-auto">
                                <ul class="grid grid-cols-1 gap-6">
                                    @php
                                        $latestNews =[
                                         [
                                             'title'=> asset('assets/pdf/downloads/National Education Policy 2020.pdf'),
                                             'news' => 'National Education Policy 2020'
     ]
                                     ]
                                    @endphp
                                    @foreach($latestNews as $news)
                                        <a href="{{$news['title']}}" target="_blank">
                                            <li class=" text-dark italic text p-2 hover:bg-darkTheme hover:text-lightTheme border-b-[1px] border-darkTheme border-dashed transition ease-in duration-2000">
                                                {{$news['news']}}
                                            </li>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-max  bg-center bg-cover flex justify-center px-4 py-10 bg-gradient-to-b from-lightTheme to bg-lightTheme/70">
        <div class="lg:w-[80%] md:w-[80%] w-full flex flex-col items-center">
            <span class="font-bold text-darkText lg:text-5xl md:text-4xl sm:text-3xl text-2xl">Our Gallery</span>
            <div class="w-full grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 lg:mt-12 md:mt-12 mt-6">


                <div class="w-full h-40 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/gallery/2.jpg')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">Photo Gallery</span>
                        <a href="{{route('gallery', ['type'=>'PHOTOS'])}}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View Gallery</a>
                    </div>
                </div>
                <div class="w-full h-40 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/activity/1.jpg')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">Activities Gallery</span>
                        <a href="{{route('gallery', ['type'=>'ACTIVITY'])}}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View
                            Gallery</a>
                    </div>
                </div>
                <div class="w-full h-40 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/ncc/9.jpg')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">NCC Gallery</span>
                        <a href="{{route('gallery', ['type'=>'NCC'])}}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View
                            Gallery</a>
                    </div>
                </div>
                <div class="w-full h-40 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/nss/5.jpg')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">NSS Gallery</span>
                        <a href="{{route('gallery', ['type'=>'NSS'])}}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View
                            Gallery</a>
                    </div>
                </div>
                <div class="w-full h-40 rounded-md bg-center bg-cover"
                     style="background-image: url({{asset('assets/images/rr/1.jpg')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">R & R Gallery</span>
                        <a href="{{route('gallery', ['type'=>'R&R'])}}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View
                            Gallery</a>
                    </div>
                </div>


            </div>

            <div class="w-full flex flex-wrap justify-center  gap-6 lg:mt-12 md:mt-12 mt-6">
                <div class="w-72 h-40 rounded-md bg-center bg-cover" style="background-image: url({{asset('assets/images/gallery/2.jpg')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">Video Clips</span>
                        <a href="{{route('videos') }}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View All Videos</a>
                    </div>
                </div>
                <div class="w-72 h-40 rounded-md bg-center bg-cover" style="background-image: url({{asset('assets/images/gallery/mag.png')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">College Magazine</span>
                        <a href="{{ route('pdfViewer',['folder'=>'other','file'=>'College-Magazine-2023-24']) }}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View Magazine</a>
                    </div>
                </div>
                <div class="w-72 h-40 rounded-md bg-center bg-cover" style="background-image: url({{asset('assets/images/gallery/mag.png')}})">
                    <div
                        class="w-full h-full bg-black/50 flex flex-col items-center justify-center rounded-md shadow-lg shadow-white/20">
                        <span class="font-bold  text-white text-2xl">E-Newsletter</span>
                        <a href="{{ route('pdfViewer',['folder'=>'other','file'=>'College-Magazine-2023-24']) }}"
                           class="px-4 py-0.5 font-semibold bg-darkTheme text-white rounded-sm text-sm mt-2 hover:scale-105 transition ease-in duration-2000">View E-Newsletter</a>
                    </div>
                </div>


            </div>

        </div>
    </div>







@endsection



