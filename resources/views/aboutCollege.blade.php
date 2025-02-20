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
                    <div
                        class="w-full bg-darkTheme flex lg:justify-center md:justify-center justify-between lg:p-3 md:p-3 p-2 rounded-t-md">
                        <span class="font-semibold lg:text-xl md:text-xl text-md text-white">CONTENT</span>
                        <button class="bg-white text-darkTheme px-2 rounded-sm lg:hidden md:hidden block"
                                onclick=" document.getElementById('aboutCollegeTab').classList.toggle('hidden') ">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="aboutCollegeTab" class="w-full lg:flex md:flex hidden flex-col">
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['type'=>'THE-COLLEGE'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='THE-COLLEGE'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>THE COLLEGE</span>
                                    @if($type==='THE-COLLEGE')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['type'=>'PRINCIPAL-MESSAGE'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='PRINCIPAL-MESSAGE'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>PRINCIPAL MESSAGE</span>
                                    @if($type==='PRINCIPAL-MESSAGE')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['type'=>'VISION-MISSION'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='VISION-MISSION'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>VISION MISSION</span>
                                    @if($type==='VISION-MISSION')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['type'=>'CODE-OF-CONDUCT'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='CODE-OF-CONDUCT'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>CODE OF CONDUCT</span>
                                    @if($type==='CODE-OF-CONDUCT')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['folder'=>'about','file'=>'1.2.1 AFFILIATION LETTERS 23-24', 'type'=>'AFFILIATING-UNIVERSITY'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='AFFILIATING-UNIVERSITY'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>AFFILIATING UNIVERSITY</span>
                                    @if($type==='AFFILIATING-UNIVERSITY')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['type'=>'ANTI-RAGGING-POLICY'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='ANTI-RAGGING-POLICY'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>ANTI RAGGING POLICY</span>
                                    @if($type==='ANTI-RAGGING-POLICY')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="w-full">
                            <a href="{{route('aboutCollege',['type'=>'RTI-STATUTORY-DECLARATION'])}}">
                                <div
                                    class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between  {{$type==='RTI-STATUTORY-DECLARATION'?'text-darkTheme bg-white ':'text-black bg-lightTheme '}} border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                    <span>RTI STATUTORY DECLARATION</span>
                                    @if($type==='RTI-STATUTORY-DECLARATION')
                                        <i class="fa fa-angles-right"></i>
                                    @endif
                                </div>
                            </a>
                        </div>




                        <div class="w-full ">
                            <a href="javascript:void(0)"
                               onclick="document.getElementById('committeMenu').classList.toggle('hidden')">
                                <div class=" group lg:p-3 md:p-3 p-2 flex h-full justify-between {{$type==='ICC'?'text-darkTheme bg-white border-b-[1px] border-b-darkTheme':'text-black bg-lightTheme'}} border-b-[1px] border-b-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme lg:text-md md:text-md text-sm font-semibold transition-colors duration-200">
                                        <span>
                                         COMMITTEE
                                        </span>
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="committeMenu" class="w-full rounded-t-md  flex flex-col hidden ">
                            <div class="w-full">
                                <a href="{{route('aboutCollege',['type'=>'ICC'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='ICC'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                <span>
                                <i class="fa fa-circle mr-1 text-[10px]"></i>

                                   ICC
                                </span>
                                        @if($type==='ICC')
                                            <i class="fa fa-angles-right"></i>
                                        @endif


                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('aboutCollege',['type'=>'Women-Redressal'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='Women-Redressal'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm font-semibold transition-colors duration-200">
                                <span>
                                                                    <i class="fa fa-circle mr-1 text-[10px]"></i>

                                   SEXUAL HARASSMENT COMMITTEE
                                </span>
                                        @if($type==='Women-Redressal')
                                            <i class="fa fa-angles-right"></i>
                                        @endif


                                    </div>
                                </a>
                            </div>
                            <div class="w-full">
                                <a href="{{route('aboutCollege',['type'=>'Students-Complaint'])}}">
                                    <div class=" group px-4 py-2 pl-6 flex h-full justify-between {{$type==='Students-Complaint'?'text-darkTheme bg-white':'text-black bg-lightTheme'}}  border-b-[1px] border-darkTheme hover:bg-white hover:text-darkText hover:border-darkTheme text-sm rounded-b-md font-semibold transition-colors duration-200">
                                <span>
                                                                    <i class="fa fa-circle mr-1 text-[10px]"></i>

                                   STUDENTS COMPLAINT COMMITTEE
                                </span>
                                        @if($type==='Students-Complaint')
                                            <i class="fa fa-angles-right"></i>
                                        @endif


                                    </div>
                                </a>
                            </div>


                        </div>


                    </div>
                </div>


                <div
                    class="w-full h-max flex flex-col lg:col-span-3 md:col-span-2 shadow-lg shadow-black/30 border-[1px] border-white rounded-md overflow-x-auto bg-white">
                    <div class="w-full bg-white p-4 rounded-b-md h-max">
                        @if($type==='THE-COLLEGE')
                            <div class="w-full">

                                <div class="w-full">
                                    <img src="{{asset('assets/images/administration/campus1.png')}}" class="rounded-md"
                                         alt="">
                                </div>

                                <p class=" mt-8 text-darkText italic text-md">Lal Bahadur Shastri Government PG College
                                    Saraswati Nagar is situated at a distance of about 100 kms. from the capital city of
                                    Shimla near famous Hateshwari temple in Jubbal tehsil of district Shimla. It is
                                    located in a valley formed by river Pabbar and is surrounded by scenic beauty of
                                    small hills and apple orchards.</p>
                                <p class=" mt-8 text-darkText italic text-md">The College was established in the year
                                    1986 and offers courses in the Faculty of Arts (12 departments), Faculty of Science
                                    (both Medical and Non-Medical streams) and Faculty of Commerce. The College has a
                                    new six storeyed building containing classrooms, well equipped and spacious science
                                    laboratories, a hall, girls common room besides well stocked library, which
                                    subscribes to several newspapers and periodicals. A new hostel for girls has been
                                    constructed in the campus and will be made functional during the current
                                    session.</p>
                                <p class=" mt-8 text-darkText italic text-md">The College has a well-qualified,
                                    experienced and committed teaching staff in the faculties of Humanities, Science and
                                    Commerce. To develop overall personality of students, the College has NCC, NSS,
                                    Rangers & Rovers units and various societies and clubs. In addition to this, the
                                    College has a big play ground for sports activities.</p>
                                <p class=" mt-8 text-darkText italic text-md">The information and Technology Department,
                                    H.P. during the year 2008-09 has established a Computer Lab., comprising of 30
                                    latest computers in the College. With the establishment of this lab, the students of
                                    the College are going to be enormously benefited not only in acquiring latest
                                    information and knowledge but also in acquiring the skills in handing the computers
                                    on their doorsteps.</p>
                                <p class=" mt-8 text-darkText italic text-md">To meet the future challenges thrown up by
                                    the process of globalization and privatization, the Government has approved BCA
                                    under self financing scheme and nine Add on Courses. Out of these, the college has
                                    successfully started Computer Application Add on course in the session 2010-11. The
                                    college proposes to start BCA and three more Add on courses in Functional English,
                                    Tourism and Travel Management and Marketing Management, during the current session
                                    subject to timely approval and affiliation by the H.P. University. The BCA will be a
                                    full fledged degree course whereas the Add on Courses can be pursued by the College
                                    students alongwith their regular bachelor degree courses. In addition, special job
                                    oriented courses before and after College timings are also proposed to be launched
                                    by Dewsoft, from the current session.</p>
                                <p class=" mt-8 text-darkText italic text-md">This College is a co-educational
                                    Institution, Students come from far-flung areas of not only Jubbal Tehsil but also
                                    from the adjoining areas of Uttrakhand. The students are innocent, docile but very
                                    hard working and respectful. The students strength is likely to increase during the
                                    current session in view of the start of BCA degree course, Add on Courses, Special
                                    Job Oriented Courses and additional facilities of girl's hostel in the College.</p>
                                <p class=" mt-8 text-darkText italic text-md">Established in 1986, Lal Bahadur Shastri
                                    Degree College Saraswatinagar is celebrating its Silver Jubilee in the session
                                    2011-12. In these 25 years, the college has seen many ups and downs PG in the
                                    subjects of History and Political Science was started from the session 2019-20
                                    onwards.</p>
                            </div>
                        @endif
                        @if($type==='PRINCIPAL-MESSAGE')
                            <div
                                class="w-full p-2 grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-4 grid-cols-1 gap-4 bg-blue-100  ">
                                <div class="w-full flex flex-col items-center">
                                    <div
                                        class=" w-[200px] lg:h-auto md:h-auto sm:h-auto h-[200px] bg-white p-2 rounded-md">
                                        <img class="w-full h-full rounded-md"
                                             src="{{asset('assets/images/administration/principal.jpg')}}" alt="">
                                    </div>
                                    <span class="text-darkText font-bold">Dr. PP Chauhan PhD</span>
                                    <span class="text-darkText font-normla italic">Principal</span>
                                    <span class="text-darkText font-semibold text-xs">L.B.S Govt. College Saraswati Nagar</span>
                                </div>

                                <div
                                    class="w-full flex flex-col gap-4 lg:col-span-3 md:col-span-3 sm:col-span-3 col-span-1 px-4 text-justify">

                                    <span class="text-darkText font-semibold text-2xl">Principal Message</span>
                                    <span class="text-darkText italic text-md">A momentum has been created to strengthen the frame of educational arena by following a focused approach on curriculum expansion and gearing up developmental activities in the college. As educated minds have to face challenges in the global market therefore multifarious events towards personality development have been kept in mind by the dedicated staff members who deserve due appreciation and felicitation for their contribution.
I acknowledge the whole hearted support of all the parents and well wishers without whose help any achievement would have not been possible.This is my considered opinion that a joint responsibility of the parents and teachers can guide the students to best of their destinations..
The future is in the hands of present. It is said that destiny of a nation is shaped in the classroom. So let us work together towards creating a better tomorrow. May almighty bless us all.</span>


                                </div>
                            </div>
                        @endif
                        @if($type==='VISION-MISSION')
                            <div class="w-full">
                                <p class=" mt-8 text-darkText  text-md">This college was established in July 1986 in a
                                    tough hilly terrain of Himachal Pradesh to cater to
                                    the higher educational needs of the people of this area. This college was opened
                                    with the aim of
                                    providing education to the students at their doorstep, enabling them to acquire
                                    Higher Education
                                    with professional skills and confidence to face the world.</p>
                                <p class=" mt-8 text-darkText  text-md">
                                    <span class="text-black font-bold">Vision:</span> <span class="italic">“ To impart quality and value based education that empowers students to sift truth
                    from falsehood and to integrate the value of truth into their character”</span>

                                </p>
                                <p class=" mt-8 text-darkText  text-md">This institutional vision is derived from the
                                    motto – “Stayam Param Dhimahi” which
                                    literally means Truth is supreme. The institution aims at providing a distinct
                                    environment
                                    of excellence in education and inculcating in them human values like truthfulness,
                                    honesty,
                                    hard work, character building, capacity building and social commitment . Thus the
                                    institution
                                    aims at enhancing the skills and holistic development of the personality of the
                                    students.</p>
                                <p class=" mt-8 text-black font-bold  text-md">Mission:</p>
                                <p class=" mt-8 text-darkText  text-md ml-4">To provide quality higher education to the
                                    students residing at this tough hilly terrain
                                    and to make them fit for global society.</p>
                                <p class=" mt-8 text-darkText  text-md ml-4">To provide a fair chance to both the
                                    genders, poor and socially disadvantaged to attain
                                    knowledge</p>
                                <p class=" mt-8 text-darkText  text-md ml-4">To enable students to acquire various
                                    professional skills in order to increase the chances of
                                    their employability.
                                </p>
                                <p class=" mt-8 text-darkText  text-md ml-4">To focus on the development of personality
                                    of students through curricular and extracurricular
                                    activities</p>
                                <p class=" mt-8 text-darkText  text-md ml-4">To sensitize the students towards various
                                    social concerns, human rights, gender issues and
                                    environmental issues.</p>

                            </div>
                        @endif
                        @if($type==='CODE-OF-CONDUCT')
                            <div class="w-full">

                                <p class=" mt-8 text-darkText  text-md">1. Students should wear identity cards inside
                                    the campus</p>
                                <p class=" mt-8 text-darkText  text-md">2. All the students are directed to note that
                                    the use of mobile phones in the college campus
                                    except the zones which are defined to access the phones for the students, is
                                    strictly
                                    banned as per the H.P. Govt. Norms (vide letter no. EDN-HE(21)B(15)15/2017-V
                                    Directorate of Higher Education H.P. Shimla-1).
                                </p>
                                <p class=" mt-8 text-darkText  text-md">3. College fees & other charges are to be paid
                                    on the dates according to the schedule
                                    notified by the college office.</p>
                                <p class=" mt-8 text-darkText  text-md">4. Property of the institute needs to be
                                    carefully handled & looked after. Wilful damage to
                                    property shall be punishable. </p>
                                <p class=" mt-8 text-darkText  text-md">5. No students should take the law into his/her
                                    own hands. Any kind of physical/mental
                                    violence is not permitted in the college. </p>
                                <p class=" mt-8 text-darkText  text-md">6. Possession or use of weapons, explosives o
                                    destructive devices is strictly prohibited in the
                                    college.</p>
                                <p class=" mt-8 text-darkText  text-md">7. Groupism, processions, protestations,
                                    mobbing, movements etc. are strictly prohibited in
                                    the college premises. </p>
                                <p class=" mt-8 text-darkText  text-md">8. Students shall behave in a disciplined manner
                                    and follow all the instructions issued to
                                    them by the college.</p>
                                <p class=" mt-8 text-darkText  text-md">9. Roaming about in the campus, corridors and
                                    outside during the class hours will be
                                    considered as an act of indiscipline.</p>
                                <p class=" mt-8 text-darkText  text-md">10. Students are not allowed to put the notices
                                    on the college notice board without proper
                                    authorization by college authorities.</p>
                                <p class=" mt-8 text-darkText  text-md">11. Students must be aware of all the notices
                                    that are put on the notice boards by the college.</p>
                                <p class=" mt-8 text-darkText  text-md">12. The students should follow the time table
                                    strictly</p>
                                <p class=" mt-8 text-darkText  text-md">13. Every student shall be regular and punctual
                                    in attending classes, practicals, submission of
                                    assignments.</p>
                                <p class=" mt-8 text-darkText  text-md">14. Anti-Ragging: <br>
                                    Ragging is prohibited as per the order of Hon’ble Supreme Court of India & Himachal
                                    Pradesh Institution (Prohibition of Ragging) Act 2009. Ragging includes any type of
                                    physical or mental torture inflicted by the individual or group either by words or
                                    by
                                    conduct, which creates an apprehension in the mind of the person that he/she cannot
                                    pursue his/her studies free from any mental disturbance or torture created thereby.
                                    Any
                                    person who aids or abets such an action shall also be guilty of ragging. Ragging in
                                    &
                                    around the college premises is strictly prohibited. If any student is found
                                    indulging in
                                    ragging directly or indirectly, the college authorities shall be obliged under Rule
                                    22, 17
                                    (a), (b), (c) of H.P. University to expel the guilty student from the college.
                                    Any student found involved in the ragging will be punished appropriately which may
                                    include: <br>
                                    a) Expulsion from the college <br>
                                    b) Suspension from the college <br>
                                    c) Fine with public apology <br>
                                    d) Withholding a scholarship or other benefits <br>
                                    e) Debarring from the representations in the events <br>
                                    f) Suspension or expulsion from hostel <br>
                                    g) Legal proceedings under criminal law shall be initiated</p>
                                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">No substance Use</span>
                                    <br>
                                    LBS GC Saraswati Nagar is committed to upholding the National Policy on
                                    Narcotic Drugs & Psychotropic Substances (NDPS) which deals with
                                    steps to tackle the problem of sale of drugs and tobacco to school and college
                                    students. Smoking,
                                    drinking alcohol & use of drugs, gutka etc within the premises of institute is
                                    strictly prohibited.
                                    The college is committed to promoting a substance-abuse free environment for its
                                    student
                                    community. The college regularly conducts awareness campaigns to sensitize and
                                    inform -
                                    faculty, non-teaching staff and students - about the adverse effects of drug
                                    addiction, tobacco
                                    consumption and alcohol abuse. All stakeholders are urged to lead a healthy life and
                                    stay away
                                    from these abuses.
                                    College undertakes orientation programmes for fresher’s with the help of health and
                                    police
                                    departments. Beside this NCC/NSS and Rovers & Rangers volunteers are involved in
                                    dissemination the message of No substance use and its ill effect through nukkad
                                    nataks , rallies,
                                    poster competitions and through anti-drug drive with local NGOs</p>


                            </div>
                        @endif
                        @if($type==='ANTI-RAGGING-POLICY')
                            <div class="w-full">
                                <p class=" mt-8  text-md text-black font-bold">RAGGING </p>
                                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Definition of Ragging :</span>
                                    Ragging includes display of noisy, disorderly conduct, teasing,
                                    rough or rude treatment, indulging in rowdy, undisciplined and obscene activities
                                    which cause
                                    or likely to cause annoyance, hardship, physical or psychological harm mental trauma
                                    or
                                    raise apprehension or fear in a fresher or other students, or forcing a student to
                                    do any act
                                    which a student is not willing to do so or which cause him/her shame or
                                    embarrassment or
                                    danger to his/her life or limb or indulging in eve teasing. (Hon'ble Supreme Court
                                    of India).
                                </p>
                                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Prohibition of Ragging </span>
                                    <br>Ragging is completely banned by law in and outside the college campus and
                                    Hostel.
                                </p>
                                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Penalty for Ragging</span>
                                    <br>Whoever directly or indirectly commits, participates, abets or instigates
                                    ragging within or
                                    outside any education institution, shall be suspended, expelled, rusticated from the
                                    institution and shall be liable to fine which may extend to Rs. 10000/-. The
                                    punishment
                                    may also include cancellation of admission, suspension from attending classes,
                                    withholding/withdrawing fellowship, scholarship and other financial benefits.
                                    <br>
                                    The Anti- Ragging Committee and Anti-Ragging Squad have been constituted to
                                    implement Raghavan Committee Recommendations to deal with matters relating to
                                    ragging in the college
                                </p>


                            </div>
                        @endif
                        @if($type==='RTI-STATUTORY-DECLARATION')
                            <div class="w-full">
                                <p class=" text-md text-black font-bold">Particulars of the organization </p>
                                <table class="border-black border-[1px] border-collapse mt-8">
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Sr. No.</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Title</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Details</td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">1</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Name of the
                                            Organization
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Lal Bahadur
                                            Shastri Govt. Degree College
                                            Saraswati Nagar , Distt. Shimla, Himachal
                                            Pradesh , PIN -171206
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">2</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Postal Address
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">La l Bahadur
                                            Shastri Govt. Degree College
                                            Saraswati Nagar , P.O. Hatkoti, Tehsil
                                            Jubbal , Distt. Shimla, Himachal Pradesh ,
                                            PIN -171206
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">3</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Website</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2"><a
                                                href="https://www.lbsgcsnagar.edu.in">https://www.lbsgcsnagar.edu.in</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">4</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Email</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2"><a
                                                href="mail:https://www.lbsgcsnagar.edu.in">https://www.lbsgcsnagar.edu.in</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">5</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Affiliation</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Himachal Pradesh
                                            University Shimla
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">6</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Name of the
                                            Principal
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Dr. Prem Parkash
                                            Chauhan (Principal Incharge)
                                        </td>
                                    </tr>
                                </table>
                                <p class=" mt-8 text-darkText  text-md"><span class="font-bold text-black">Courses offered: </span>
                                    <br>
                                    1. BA ( English, History, Political Science, Public Administration, <br>
                                    Mathematics, Music (V &I), Economics, Hindi, Sanskrit, Geography ,
                                    Physical Education & Philosophy)
                                    2. B Sc. ( Medical & Non –Medical) <br>
                                    3. B Com. <br>
                                    4. BCA ( Self financing) <br>
                                    5. MA History <br>
                                    6. MA Political Science <br>
                                    7. Add on Courses <br>
                                    a) Computer Application ( Certificate, Diploma & Advanced Diploma) <br>
                                    b) Marketing & Management(Certificate, Diploma & Advanced Diploma)
                                </p>

                                <p class=" mt-8  text-xl text-black font-bold">Statutory declaration under the RTI act
                                    2005</p>
                                <p class=" mt-8 text-darkText  text-md">Section 4 (1) (b) of ACT 2005 covers the
                                    statutory declaration of K Lal Bahadur Shastri Govt. Degree
                                    College Saraswati Nagar , Distt. Shimla, Himachal Pradesh , PIN -171206 .

                                </p>
                                <p class=" mt-4 text-darkText  text-md">Website: <a href="www.lbsgcsnagar.edu.in."
                                                                                    class="font-bold text-black">www.lbsgcsnagar.edu.in.</a>
                                    Our college is approved & recognized by UGC and affiliated to
                                    Himachal Pradesh University Shimla. It runs as per the rules and regulations
                                    stipulated by
                                    Government of Himachal Pradesh from time to time. The college comes under “Govt. ”
                                    category and
                                    therefore financial transactions are audited by the Govt. Auditors. Beside this
                                    college is empowered to
                                    run self financing courses. The college has different type of committees for smooth
                                    conduct of college
                                    routine activities & to maintain all types of discipline in the campus as per Govt.
                                    provisions . All the
                                    committees of the institutions are under statutory bodies. All information about the
                                    college is open for
                                    the public and it can be obtained by a citizen of India. </p>

                                <p class=" mt-8  text-md text-black font-bold">Names , Designations and other
                                    particulars of public information officers:
                                </p>
                                <table class="border-black border-[1px] border-collapse mt-8">
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Sr. No.</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Title</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Designation</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Contact Details
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">1</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Dr. P.P.
                                            Chauhan
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Public
                                            Information Office
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">
                                            <a href="mail:gcsnagar25@rediffmail.com">gcsnagar25@rediffmail.com</a> <br>
                                            <a href="tel:94184-70677">94184-70677</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-bold text-black p-2">1</td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Sh. Neeraj Gupta
                                            (H.A.S.)
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">Appellate
                                            information officer
                                        </td>
                                        <td class="border-[1px] border-black font-bold text-black p-2">
                                            <a href="mail:admin-hredu-hp@gov.in ">admin-hredu-hp@gov.in </a> <br>
                                            <a href="tel:94181-81160">94181-81160</a>
                                        </td>
                                    </tr>

                                </table>

                                <p class=" mt-8  text-md text-black font-bold">Lal Bahadur Shastri Govt. Degree College
                                    Saraswati Nagar:
                                </p>
                                <p class=" mt-8 text-darkText  text-md">
                                    1. Any Indian citizen can obtain information about any public authority, including
                                    documents
                                    and records by applying to the Public Information Officer (PIO) of that Authority.
                                    <br>
                                    2. An applicant has to pay an application fee of Rs. 10/- with the application <br>
                                    3. The information will be made available on payment of cost as follow : <br>
                                </p>

                                <table class="border-black border-[1px] border-collapse mt-8">
                                    <tr>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Description of
                                            Information
                                        </td>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Price/Fee in
                                            Rupees
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Fee alongwith
                                            Application
                                        </td>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Rs. 10 per
                                            application
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Where the
                                            information is available in the form
                                            of priced publication
                                        </td>
                                        <td class="border-[1px] border-black font-normal text-black p-2">On printed
                                            price
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-normal text-black p-2">For other than
                                            priced publication
                                        </td>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Rs. 2 per page
                                            of A-4 size or smaller and actual cost
                                            subject to minimum of Rs. 2/- per page in case of
                                            larger size
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Where
                                            information is Available in electronic
                                            Floppy and CD etc.
                                        </td>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Rupees 50/- per
                                            Floppy and Rs. 100/- per CD
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Fee for
                                            inspection of record / Document
                                        </td>
                                        <td class="border-[1px] border-black font-normal text-black p-2">Rs. 20 per 30
                                            minutes or fraction thereof
                                        </td>
                                    </tr>
                                </table>
                                <br>

                                <p class=" mt-8 text-darkText  text-md">

                                    1. Payment is to be made by Treasury Challan/Bank draft/Indian Postal Order.
                                    <br> 2. BPL {Below Poverty Line} persons need not pay the application fee or any
                                    additional fee.
                                    <br> 3. In case request for the information is refused or the request is not
                                    properly responded, an
                                    appeal can be filed with the Appellate Authority within 30 days. A second appeal
                                    lies
                                    with the State Information Commission within 90 days. There are no fees for
                                    appeals.
                                    <br> 4. Information can be refused only on the following grounds:
                                    <br> - Information, disclosure of which would prejudicially affect the sovereignty
                                    and integrity of
                                    India, the Security, strategic, scientific or economic interests of the States
                                    relation with
                                    forging State or lead to incitement of an offence.
                                    <br> - Information which has been expressly forbidden to be published by any court
                                    of law or
                                    tribunal or the disclosure of which may constitute contempt of court.
                                    <br> - Information, the disclosure of which would cause a branch of privilege of
                                    Parliament or the
                                    State legislature.
                                    <br> - Information including commercial confidence, trade secrets or intellectual
                                    property, the
                                    disclosure of which would harm the competitive position of a third party, unless the
                                    competent authority is satisfied that larger public interest warrants the disclosure
                                    of
                                    such information.
                                    <br> - Information available to a person in his fiduciary relationship, unless the
                                    competent
                                    authority is satisfied that the larger public interest warrants the disclosure of
                                    such
                                    information.
                                    <br> - Information received in confidence from foreign Government.
                                    <br> - Information the disclosure of which would enlarge the life of physical safety
                                    of any person
                                    or identify the source of information or assistance given in confidence for law
                                    enforcement or security purposes.
                                    <br> - Information which would impede the process of investigation or apprehension
                                    precaution
                                    of offenders.
                                    <br> - Cabinet papers including records of deliberations of the Council of
                                    Ministers, Secretaries
                                    and other officers.
                                    Provided further that those matters which come under the exemptions specified in
                                    this section
                                    shall not be disclosed.
                                    Information which relates to personal information the disclosure of which has no
                                    relationship to
                                    any public activity or interest, or which would cause unwarranted invasion of the
                                    privacy of the
                                    individual unless the Central Public Information Officer or the State Public
                                    Information Officer
                                    or the Appellate Authority, as the case may be, is satisfied that the larger public
                                    interest justifies,
                                    the disclosure of such information.
                                    Provided that the information which cannot be denied to the Parliament or a State
                                    Legislative
                                    shall not be denied to any person.

                                </p>


                            </div>
                        @endif
                        @if($type==='ICC')

                            @php
                                $tableHeader = ['Name', 'Phone'];
                                  $tableData = [
                                      ['Dr Poonam Mehta', '9816048658'],
                                      ['Dr Yogita Bandta', '9816025354'],
                                      ['Prof Vijay Luxmi', '9805205680'],
                                      ['Dr Rohit Mokta', '9418072446'],
                                      ['Dr Punam Chauhan', '9805783410'],
                                      ['Advocate Yashwant Pirta', '9816147259'],
                                  ];
                            @endphp
                                <div class="w-full">

                                    <!-- component -->
                                    <section class="container px-4 mx-auto">
                                        <div class="flex flex-col">
                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                    <p class=" mb-4  text-md text-black font-bold">ICC COMMITTEE </p>


                                                    <div class="overflow-hidden ">
                                                        <table class="min-w-full ">
                                                            <thead class="bg-lightTheme">
                                                            <tr>
                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-lg font-bold text-left rtl:text-right text-darkText">
                                                                    S.No.
                                                                </th>

                                                                @foreach($tableHeader as $head)
                                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-lg font-bold text-left rtl:text-right text-darkText">
                                                                        {{$head}}
                                                                    </th>
                                                                @endforeach

                                                            </tr>
                                                            </thead>

                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                            @foreach($tableData as $index => $data)
                                                                <tr class="border-[1px] border-darkTheme">
                                                                    <td class="px-4 py-3 text-md text-black font-bold whitespace-nowrap border-[1px] border-darkTheme">{{ $index + 1 }}</td>
                                                                    <td class="px-4 py-3 text-md whitespace-nowrap border-[1px] border-darkTheme">
                                                                        <h2 class="text-md font-semibold text-black">{{ $data[0] }}</h2>
                                                                    </td>
                                                                    <td class="px-4 py-3 text-md text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                        <h2 class="text-md font-normal italic text-black">{{ $data[1] }}</h2>
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
                            @endif
                            @if($type==='Women-Redressal')

                                @php
                                    $tableHeader = ['Name', 'Phone'];
                                      $tableData = [
                                          ['Dr. Lalita Rawat Convenor', '8628076759'],
                                          ['Dr. Punam Mehta', '9816048658'],
                                          ['Prof. Preeti Panta Chhatti', '9418209261'],
                                          ['Dr. Shallu Dogra Sharma ', '9023444321'],
                                          ['Smt. Nirdosh Pathania ', '7018889144'],
                                          ['Smt. Roshani Chauhan', '9418057275'],
                                          ['Smt. Sharda Devi', ''],
                                      ];
                                @endphp
                                <div class="w-full">
                                    <!-- component -->
                                    <section class="container px-4 mx-auto">
                                        <div class="flex flex-col">
                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                    <p class=" mb-4  text-md text-black font-bold">SEXUAL HARASSMENT COMMITTEE</p>

                                                    <div class="overflow-hidden ">
                                                        <table class="min-w-full ">
                                                            <thead class="bg-lightTheme">
                                                            <tr>
                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-lg font-bold text-left rtl:text-right text-darkText">
                                                                    S.No.
                                                                </th>

                                                                @foreach($tableHeader as $head)
                                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-lg font-bold text-left rtl:text-right text-darkText">
                                                                        {{$head}}
                                                                    </th>
                                                                @endforeach

                                                            </tr>
                                                            </thead>

                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                            @foreach($tableData as $index => $data)
                                                                <tr class="border-[1px] border-darkTheme">
                                                                    <td class="px-4 py-3 text-md text-black font-bold whitespace-nowrap border-[1px] border-darkTheme">{{ $index + 1 }}</td>
                                                                    <td class="px-4 py-3 text-md whitespace-nowrap border-[1px] border-darkTheme">
                                                                        <h2 class="text-md font-semibold text-black">{{ $data[0] }}</h2>
                                                                    </td>
                                                                    <td class="px-4 py-3 text-md text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                        <h2 class="text-md font-normal italic text-black">{{ $data[1] }}</h2>
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
                            @endif
                            @if($type==='Students-Complaint')

                                @php
                                    $tableHeader = ['Name', 'Phone'];
                                   $tableData = [
                                       ['Dr. Lalita Rawat Convenor', '8628076759'],
                                       ['Dr. Punam Mehta', '9816048658'],
                                       ['Prof. Chander Sen Chauhan', '9805574091'],
                                       ['Prof. Rajinder Singh ', '9459608158'],
                                       ['Prof. Goverdhan Kumar Chauhan', '9736172367'],
                                       ['Sh. Govind Singh ', '8278841033'],
                                   ];
                                @endphp
                                <div class="w-full">
                                    <!-- component -->
                                    <section class="container px-4 mx-auto">
                                        <div class="flex flex-col">
                                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                                    <p class=" mb-4  text-md text-black font-bold">STUDENTS COMPLAINT COMMITTEE</p>

                                                    <div class="overflow-hidden ">
                                                        <table class="min-w-full ">
                                                            <thead class="bg-lightTheme">
                                                            <tr>
                                                                <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-lg font-bold text-left rtl:text-right text-darkText">
                                                                    S.No.
                                                                </th>

                                                                @foreach($tableHeader as $head)
                                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-lg font-bold text-left rtl:text-right text-darkText">
                                                                        {{$head}}
                                                                    </th>
                                                                @endforeach

                                                            </tr>
                                                            </thead>

                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                            @foreach($tableData as $index => $data)
                                                                <tr class="border-[1px] border-darkTheme">
                                                                    <td class="px-4 py-3 text-md text-black font-bold whitespace-nowrap border-[1px] border-darkTheme">{{ $index + 1 }}</td>
                                                                    <td class="px-4 py-3 text-md whitespace-nowrap border-[1px] border-darkTheme">
                                                                        <h2 class="text-md font-semibold text-black">{{ $data[0] }}</h2>
                                                                    </td>
                                                                    <td class="px-4 py-3 text-md text-gray-500 dark:text-gray-300 whitespace-nowrap border-[1px] border-darkTheme">
                                                                        <h2 class="text-md font-normal italic text-black">{{ $data[1] }}</h2>
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
    </div>
@endsection



