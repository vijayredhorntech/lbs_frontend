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
                                onclick=" document.getElementById('alumniTabs').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="alumniTabs" class="w-full lg:flex md:flex hidden flex-col">
                        <div class="w-full">
                            <a href="{{route('alumni',['type'=>'ALUMNI-CHARTER'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ALUMNI-CHARTER'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>ALUMNI CHARTER</span>
                                    @if($type==='ALUMNI-CHARTER')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('alumni',['type'=>'registration'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='registration'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                <span>OSA REGISTRATION</span>
                                    @if($type==='registration')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('alumni',['type'=>'ALUMNI-FEEDBACK'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ALUMNI-FEEDBACK'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                <span>ALUMNI FEEDBACK</span>
                                    @if($type==='ALUMNI-FEEDBACK')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('alumni',['type'=>'studentComplaint'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='studentComplaint'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                <span>STUDENT COMPLAINT </span>
                                    @if($type==='studentComplaint')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('alumni',['type'=>'OUR-ALUMNI'])}}">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='OUR-ALUMNI'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme ':'text-black bg-lightTheme  '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm rounded-b-md font-semibold transition-colors duration-200">
                                <span>OUR ALUMNI</span>
                                    @if($type==='OUR-ALUMNI')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>

                    </div>
                </div>


                <div class="w-full flex flex-col lg:col-span-3 md:col-span-2 shadow-lg shadow-black/30 border-[1px] border-white rounded-md overflow-x-auto bg-white">
                    <div class="{{$type==='ALUMNI-CHARTER'?'hidden':''}} {{$type==='feedbackSurvey'?'hidden':''}} {{$type==='studentComplaint'?'hidden':''}} {{$type==='registration'?'hidden':''}} {{$type==='OUR-ALUMNI'?'hidden':''}} w-full bg-white py-4 rounded-md">
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
                                                                <a href="{{route('pdfViewer',['folder'=>$folderName,'file'=>$data[2]])}}" target="_blank"
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
                    <div class="{{$type==='ALUMNI-CHARTER'?'':'hidden'}} w-full bg-white  py-4 px-4">
                        <div class="w-full flex justify-end">
                            <a href="{{route('pdfViewer',['folder'=>'alumni','file'=>'Alumni Charter (1)'])}}" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>
                        </div>
                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">1. The Name of the Society:</span> THE ALUMNAI ASSOCIATION OF
                            LBS GOVT. PG COLLEGE SARASWATI NAGAR
                        </p>
                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black"> 2. The Registered Office: </span> LBS GOVT PG COLLEGE SARASWATI NAGAR ,
                            TEHSIL JUBBAL, DISTT. SHIMLA 171206

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">3. Area of operation:</span> Himachal Pradesh
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">4. The aims and objectives of the Society shall be as follows:-</span>
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">A.</span>to provide a forum for the Members of the Alumni Association (herein after referred to as
                            the Members) to interact amongst themselves as also with the Principal, Teachers and the
                            present students of LBS GOVT PG COLLEGE SARASWATI NAGAR , TEHSIL
                            JUBBAL, DISTT. SHIMLA 171206.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">B.</span>to bring together the ex students of LBS GOVT PG COLLEGE SARASWATI NAGAR ,
                            TEHSIL JUBBAL, DISTT. SHIMLA 171206 and to promote fellowship amongst
                            them and their families.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">C.</span>to disseminate knowledge and know-how for the mutual benefit of the Members as also for
                            the benefit of the College.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">D.</span>to undertake (i) intellectual, academic and cultural activities (ii) sports and games (iii)
                            entertainment programmes (iv) improvements to existing infrastructure of the College
                            and. (v) social service etc. for the benefit of the Members as well as of the College
                            and for the society at large, as detailed under:
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">a).</span>to create a website of the Association and up load the same on to the Internet so that
                            relevant information pertaining to the affairs of the Association, can be made available for
                            the benefit of all the Members.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">b).</span>to conduct academic meets such as conferences, workshops, seminars, symposia ,
                            lectures by eminent personalities from various walks of life etc. for the Members as also for
                            the present students and/or teachers of the College on various current subjects/ topics
                            of interest and relevance.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">c).</span>to institute and award prizes, for the meritorious students of the
                            College in the fields of academics, sports and other extra-curricular activities.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">d).</span>to undertake activities such as career counseling, medical check up camps and other
                            similar programs for the benefit of the present students of the College.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">e).</span>to institute merit cum means based scholarships for the needy and deserving students
                            of the College.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">f).</span> to establish permanent Corpus Fund for providing need based financial assistance
                            to the Members as also the present students of the College for the treatment diseases and
                            ailments.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">g).</span>to conduct , for the Members , various activities such as get-togethers, sports and
                            games, picnics, excursions, cultural programmes, etc.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">E.</span> To undertake any other activity in accordance with and in furtherance to the objectives
                            mentioned at A, B , C and D above.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">F.</span>With the prior permission of the College’s Principal, the premises and/or facilities may be
                            used / utilized by the Association for holding/conducting its official programmes,
                            functions or activities, in accordance with the Association’s objectives, enumerated
                            herein above, The College Premises shall not be used or utilized for holding or
                            conducting any personal programme, function or activity of any member of the
                            Association – whether he/she is a General/ordinary Member or an office
                            Bearer/Committee Member.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">5.</span>The affairs of the Association shall be managed by a Managing Committee ofnine members
                            comprising a President, a Vice President, a General Secretary, a Treasurer, and five
                            Committee Members. In the process of achieving the above objectives, principles of
                            good corporate governance shall be strictly adhere to the provisions of H.P. Societies
                            Registration Act, 2006 and the terms and conditions of the Registration shall be
                            followed in letter and in spirit.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">6.</span>The Accounting Year of the Association shall be from 1st April of a year to the 31st March of
                            next year.

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">7.</span>All the incomes, earnings, movable and immovable properties of the Association shall be
                            solely utilised and applied only towards the promotion of its objectives as stated herein
                            above and no portion thereof shall be paid or transferred by way of dividends / bonus /
                            profits or in any other manner whatsoever, to the present or past Members either directly
                            or indirectly.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">8.</span>No Member shall have any claim on any movable or immovable properties or the funds of the
                            Association or make any profit, whatsoever, by virtue of his Membership.
                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">9.</span>The Memorandum of Association and the Bye Laws of the Association shall be duly
                            registered as per the H.P. Societies Registration Act, 2006

                        </p>

                        <p class="mt-2 text-darkText italic text-md">
                            <span class="font-bold text-black">10.</span> The President of the Association is authorized to correspond with the Registrar of Societies.
                        </p>
                    </div>


                    <div class="{{$type==='registration'?'':'hidden'}} w-full bg-white  py-4 px-4">
                        <livewire:osa-registration-form />
                    </div>
                    <div class="{{$type==='studentComplaint'?'':'hidden'}} w-full bg-white  py-4 px-4">
                       <livewire:student-complain-form />
                    </div>


                    <div class="{{$type==='OUR-ALUMNI'?'':'hidden'}} w-full bg-white  py-4 px-4">
                        <div class="w-full grid lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-4">
                            <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                <img src="{{asset('assets/images/alumni/Yash Pal Sharma.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                                <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Yash Pal Sharma</span>
                                <span class="italic text-sm text-danger">President</span>
                            </div>
                            <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                <img src="{{asset('assets/images/alumni/Sandesh Kalta.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                                <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Sandesh Kalta</span>
                                <span class="italic text-sm text-danger">Vice President</span>
                            </div>
                            <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                <img src="{{asset('assets/images/alumni/Sudesh Kumar Mokta.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                                <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh.Sudesh Kumar Mokta</span>
                                <span class="italic text-sm text-danger">IAS</span>
                            </div>
                            <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                <img src="{{asset('assets/images/alumni/Shravan Manta.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                                <span class="mt-4 font-semibold text-md text-darkTheme text-center">Sh. Shravan Manta</span>
                                <span class="italic text-sm text-danger">HAS</span>
                            </div>
                            <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                <img src="{{asset('assets/images/alumni/Pankaj Chauhan.jpg')}}" class="h-24 w-24 rounded-full" alt="">
                                <span class="mt-4 font-semibold text-md text-darkTheme text-center">Dr. Pankaj Chauhan</span>
                                <span class="italic text-sm text-danger">IIT Jammu</span>
                            </div>
                            <div class="w-full h-full flex flex-col justify-center items-center bg-lightTheme lg:p-8 md:p-4 sm:p-4 p-2 rounded-md shadow-lg shadow-gray-700">
                                <img src="{{asset('assets/images/alumni/Aman Mehta.jpeg')}}" class="h-24 w-24 rounded-full" alt="">
                                <span class="mt-4 font-semibold text-md text-darkTheme text-center">Col, Aman Mehta</span>
                                <span class="italic text-sm text-danger"></span>
                            </div>
                        </div>
                    </div>

                    <div class="{{$type==='feedbackSurvey'?'':'hidden'}} w-full bg-white  py-4 px-4">
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


                                                </tr>
                                                </thead>


                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach($tableData as $index => $data)
                                                    <tr class="border-[1px] border-darkTheme">
                                                        <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">{{ $index + 1 }}</td>
                                                        <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                            <h2 class="text-sm font-semibold text-darkTheme">{{ $data[0] }}</h2>
                                                        </td>

                                                        <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                            <div class="flex items-center gap-x-6">
                                                                <a href="{{$data[2]}}" target="_blank"
                                                                   class="text-danger font-semibold underline transition-colors duration-200 hover:text-darkTheme focus:outline-none">
                                                                    Click here
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

