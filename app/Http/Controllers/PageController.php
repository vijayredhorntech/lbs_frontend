<?php

namespace App\Http\Controllers;
use App\Mail\ComplainStatusUpdateMail;
use App\Mail\studentComplainMail;
use App\Models\OSARegistration;
use App\Models\StudentComplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{


    public function pdfViewer($folder,$file)
    {
        $filePath = asset('assets/pdf/'.$folder.'/'.$file.'.pdf');
        return view('pdfViewer',)->with('filePath', $filePath);
    }
    public function academics( $type , $folder = null, $file = null)
    {

        $tableHeader = [];
        $tableData = [];
        $folderName = '';
        $title = '';
        $pageType= '';
        $pageContent = '';
        $filePath = null;

        if ($file!=null)
        {
            $filePath = asset('assets/pdf/'.$folder.'/'.$file.'.pdf');
        }
        if ($type === 'SYLLABUS') {
            $tableHeader = ['	Syllabus', 'Course'];
            $folderName = 'academic';
            $filePath = null;
            $pageType = 'academic';

            $tableData = [
                ['	Bachelor of Computer Application (BCA)', 'UG',  'BCA'],
                ['	Bachelor of Commerce ( BCom)', 'UG',  'BCOM ANNUAL'],
                ['Botany Annual Pattern', 'UG',  'BOTANY ANNUAL'],
                ['Chemistry Annual Pattern', 'UG',  'CHEMISTRY ANNUAL'],
                ['Mathematics Annual Pattern', 'UG',  'Mathematics Annual'],
                ['	Physics Annual Pattern', 'UG',  'PHYSICS ANNUAL'],
                ['Zoology Annual Pattern', 'UG',  'ZOOLOGY ANNUAL'],
                ['English syllabus Annual Pattern', 'UG',  'ENGLISH ANNUAL'],
                ['Hindi syllabus Annual Pattern', 'UG',  'HINDI ANNUAL'],
                ['Sanskrit syllabus Annual Pattern', 'UG',  '#',],
                ['Economics syllabus Annual Pattern', 'UG',  '#',],
                ['History syllabus Annual Pattern', 'UG',  'HISTORY ANNUAL'],
                ['Political Science syllabus Annual Pattern', 'UG',  'POLITICAL SCIENCE ANNUAL'],
                ['Public Administration syllabus Annual Pattern', 'UG',  'PUB. AD. ANNUAL'],
                ['	Philosophy Science syllabus Annual Pattern', 'UG',  'PHILOSOPHY ANNUAL'],
                ['Music (V & I) syllabus Annual Pattern', 'UG',  'MUSIC ANNUAL'],
                ['	Physical Education syllabus Annual Pattern', 'UG',  'PHYSICAL EDUCATION ANNUAL'],
                ['Geography syllabus Annual Pattern', 'UG',  'GEOGRAPHY ANNUAL'],

            ];
        }
        if ($type === 'ACADEMIC-CALENDER') {
            $tableHeader = ['Academic Calender', 'Year'];
            $folderName = 'academic';
            $filePath = null;
            $pageType = 'academic';

            $tableData = [
                ['Academic Calender', '2024-2025',  'Academic-Calender-24-25'],
                ['Academic Calender', '2023-2024',  'Academic-Calender23-24'],
                ['Academic Calender', '2022-2023',  'Academic Calender 22-23'],
                ['Academic Calender', '2021-2022',  'Academic Calender 21-22'],
                ['Academic Calender', '2020-2021',  'Academic Calender 2020-21'],
                ['Academic Calender', '2019-2020',  'Academic Calender 2019-20'],
            ];
        }

//        departments logic here
        if ($type === 'ENGLISH') {
            $title = 'DEPARTMENT OF ENGLISH';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'ENGLISH DEPARTMENT PROFILE']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>
                      </div>' . '

                      <img src="' . asset('assets/images/courses/english1.png') . '" alt="" class="rounded-md">
                    <p class="mt-2 text-darkText italic text-md">The college was established in the year 1986 and English
subject was offered as Compulsory Course with other
interdisciplinary courses up to 2014. In the session 2013-14
CBCS (RUSA) was introduced in the colleges of Himachal
Pradesh. Since then, the curriculum offers teaching of English
Language, Literature and Communication Skills as a
Compulsory Course to ensure that every student of the
college studies English. Now the Department is offering Core
Courses, Ability Enhancement Compulsory Courses, Skill
Enhancement Courses, Discipline Specific Electives and
Generic Elective courses to the students. Since the establishment of the college inthe year 1986, the department of English is
catering to the needs of students coming from rural area with the aim to provide a conducive climate to the learners of
English and to educate students to understand the English Language and literature in English enriching them with
Communicative and reading skills in English. </p>
                    <p class="mt-2 text-darkText italic text-md">The Department also has a fully equipped Language lab that caters to the skill development needs of the students. The lab
provides opportunity to those students who takeinterest in learning communicative skills and personality development skills
in the institution. </p>
                    <p class="mt-2 text-darkText italic text-md">The English Literary Society is also formed in the college with the aimto provide students an opportunity to showcase their
talent and their communicative skills through various activities such as poetic recitation, novel reading, short skits ,singing ,
slogan writing , story writing etc, which the department conducts throughout the session intermittently. </p>

                  <p class="mt-2 text-black  font-bold text-lg">FACULTY PROFILE </p>
                  <p class="mt-2 text-black  font-bold text-md">1 . Dr. Lalita Rawat, Associate Professor ( M.Phil, Ph.D) </p>
                  <p class="mt-2 text-darkText italic text-md pl-4">Teaching Experience: 28 years </p>
                  <p class="mt-2 text-darkText italic text-md pl-4">Specialization: Buddhism in Indian Epic</p>
                  <p class="mt-2 text-black  font-bold text-md">2. Dr. Harash , Assistant Professor(M.Phil, Ph.D)</p>
                  <p class="mt-2 text-darkText italic text-md pl-4">Teaching Experience: 5 years</p>
                  <p class="mt-2 text-darkText italic text-md pl-4">Specialization: American Literature, Indian Literature, Drama, Cultural studies</p>
                  <p class="mt-2 text-black  font-bold text-md">3. Ms. Vijay laxmi Assistant Professor(M.Phil) </p>
                  <p class="mt-2 text-darkText italic text-md pl-4">Teaching Experience: 15 years </p>
                  <p class="mt-2 text-darkText italic text-md pl-4">Specialization: Spiritual Fiction</p>
                  <p class="mt-2 text-black  font-bold text-lg">Infrastructure: <p class="mt-2 text-darkText italic text-md pl-4">The department is well equipped with all the recent technologies required for quality teaching andlearning.</p></p>
                  <p class="mt-2 text-black  font-bold text-md">1(a) . Smart Class Room:</p>
                  <p class="mt-2 text-darkText italic text-md pl-4">The department has Smart Class room with overhead Projector and Smart Board andBlack Board.</p>
                  <img src="' . asset('assets/images/courses/english2.png') . '" alt="" class="rounded-md">
                   <p class="mt-2 text-black  font-bold text-md">1(b). Class Room with Black Board and Desks</p>
                 <img src="' . asset('assets/images/courses/english3.png') . '" alt="" class="rounded-md">

                  <p class="mt-2 text-black  font-bold text-md">2. English Language Laboratory:</p>
                  <p class="mt-2 text-darkText italic text-md pl-4">The Department has a modern Language
Laboratory established in April, 2017. It is self-learnable Digital Lab. The
Laboratory is effectively utilized by students to maximize proficiency in
language components (vocabulary and pronunciation) and in language skills
(listening, speaking, reading and writing).Laboratory proves beneficial for
those students who are poor in use of English language. Students from rural
areas who are generally weak in English can have sufficient ear training in the
language lab. The basic purpose of the lab is to provide students a platform to
enhance English language skills, communication skills and to practice soft skills. It provides a space for English
language learning where students access audio and audio-visual materials.</p>
                  <p class="mt-2 text-black  font-bold text-md">Objectives:</p>
                                    <p class="mt-2 text-darkText italic text-md pl-4"> To equip the students with good communication skills.</p>
                                    <p class="mt-2 text-darkText italic text-md pl-4"> To emphasize the need of English in the technical world</p>
                                    <p class="mt-2 text-darkText italic text-md pl-4"> To prepare them for interviews and future job environments.</p>
                  <p class="mt-2 text-black  font-bold text-lg">Details of language laboratory:</p>
                   <span class="mt-2 text-black  font-bold text-lg">Laboratory Location: <span class="text-darkText italic text-sm pl-4">Old Block</span></p>
                   <span class="mt-2 text-black  font-bold text-lg">Software: <span class="text-darkText italic text-sm pl-4">Globarena Technologies Pvt. Limited</span></p>
                   <span class="mt-2 text-black  font-bold text-lg">Server:  <span class="text-darkText italic text-sm pl-4">01</span></p>
                   <span class="mt-2 text-black  font-bold text-lg"> No. of Client Computers:  <span class="text-darkText italic text-sm pl-4">15</span></p>
                                    <p class="mt-2 text-darkText italic text-md pl-4">The lab has fully computerized client server application that runs in LAN. The students access the courseware through clientsystem.</p>
                                 <img src="' . asset('assets/images/courses/english4.png') . '" alt="" class="rounded-md">

                  <p class="mt-2 text-black  font-bold text-md">Laboratory with Computers, Desks, Overhead Projector, Interactive Board and Printer</p>




                 ';
        }

        if ($type === 'HINDI') {
            $title = 'िहदी िवभाग';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Profile of Hindi Deptt']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '
                  <p class="mt-2 text-black  font-bold text-md">परिचय</p>
                        <p class="mt-2 text-darkText italic text-md">सरवती नगर महािवालय के िहदी िवभाग क ं  थापना सन 1986 म ह ई थी। तब से वतमान समय तक िहदी िवभाग अनेक ं कार
क शैिक और गैर-शैिक गितिविधय का क  बना हआ है। िहदी िवभाग के िव ं ाथ तथा िशक कठोर परम के ारा
शैिक उेय क पितू  के िलए सदैव यनशील रहते ह। इसके साथ ही महािव  ालय म आयोिजत िविभ  न कायम म भी िह  दी ं
िवभाग क सहभािगता हमेशा शंसनीय रही है। िहदी िवभाग ं ारा ित वष\'िहदी िदवस ं \' का आयोजन बहत बड़े तर पर िकया
जाता है। िवभाग ारा अितम वष ं के िव  ािथय को नातकोर तर क िशा हण करने के िलए भी ोसािहत िकया जाता है
और उह िदशा  -िनदश तथा मागदशन भी िदया जाता है। व  ततः िह ु दी िवभाग सर ं वती नगर महािवालय म अपना िविश  थान
रखता हैऔर महािवालय के चहँमखी िवकास के िलए समिप ु त है।</p>

                  <p class="mt-6 text-black  font-bold text-lg">िहदी िवभाग म उपल  ध िविवध सिवधाएँ व उपकरण</p>
                  <p class="mt-4 text-black  font-bold text-md">1. काक सं या एक</p>
                  <img src="' . asset('assets/images/courses/Hindi/h1.png') . '" alt="" class="rounded-md">
                  <p class="mt-4 text-black  font-bold text-md">2. काक सं या द</p>
                  <img src="' . asset('assets/images/courses/Hindi/h2.png') . '" alt="" class="rounded-md">
                  <p class="mt-4 text-black  font-bold text-md">3. मेज़ और कुिसय  से सिजत िशक-क</p>
                  <img src="' . asset('assets/images/courses/Hindi/h3.png') . '" alt="" class="rounded-md">
                  <p class="mt-4 text-black  font-bold text-md">4. अलमारी और रैक</p>
                  <img src="' . asset('assets/images/courses/Hindi/h4.png') . '" alt="" class="rounded-md">
                  <p class="mt-4 text-black  font-bold text-md">5. कयूटर</p>
                  <img src="' . asset('assets/images/courses/Hindi/h5.png') . '" alt="" class="rounded-md">
                  <p class="mt-4 text-black  font-bold text-md">6. िवतु-हीटर</p>
                  <img src="' . asset('assets/images/courses/Hindi/h6.png') . '" alt="" class="rounded-md">
                  <p class="mt-4 text-black  font-bold text-md">7. सचना पू </p>
                  <img src="' . asset('assets/images/courses/Hindi/h7.png') . '" alt="" class="rounded-md">



                 ';
        }

        if ($type === 'PHILOSOPHY') {
            $title = 'DEPARTMENT OF PHILOSOPHY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                                             <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Philosophy Deptt']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '
                  <p class="mt-2 text-black  font-bold text-lg">DEPARTMENT OF PHILOSOPHY</p>
                   <p class="mt-6 text-black  font-bold text-lg">ABOUT THE DEPARTMENT</p>
                        <p class="mt-2 text-darkText italic text-md">Department of Philosophy at LBS GC Saraswati Nagar was established in 2008. The course offers
a detailed study not only of entire Indian Philosophy but also gives a fairly adequate glimpse of
Greek and Western Philosophy too. Thus, it can be very well inferred that students are exposed to
a galaxy of philosophical concepts and ethical values which not only aid in developing their
rational / intellectual faculties but also enrich their moral borrowings. Thus the Department aims
at the development of a student both as an individual person and as a responsible social being.</p>

                      <p class="mt-4 text-black  font-bold text-lg">FACULTY PROFILE</p>
                      <p class="mt-2 text-darkText italic text-md">Dr. Poonam Mehta, Associate Professor M.A(Gold Medalist) Ph.D (NET qualified)</p>
                      <p class="mt-2 text-darkText italic text-md">Teaching Experience : 25 years</p>
                      <p class="mt-2 text-darkText italic text-md">Specialisation in Existentialism</p>

                      <p class="mt-4 text-black  font-bold text-lg">INFRASTRUCTURAL FACILITIES :</p>
                      <p class="mt-2 text-darkText italic text-md">The infrastructure facilities available in the Department of Philosophy are:</p>
                      <p class="mt-4 text-black  font-bold text-md">1. LED smart TV</p>
                      <img src="' . asset('assets/images/courses/Philosophy/p1.png') . '" alt="" class="rounded-md mt-2">
                      <p class="mt-4 text-black  font-bold text-md">2. Computer with Printer</p>
                      <img src="' . asset('assets/images/courses/Philosophy/p2.png') . '" alt="" class="rounded-md mt-2">
                      <p class="mt-4 text-black  font-bold text-md">3. Teacher Cabin</p>
                      <img src="' . asset('assets/images/courses/Philosophy/p3.png') . '" alt="" class="rounded-md mt-2">

                       <p class="mt-6 text-black  font-bold text-lg">TEACHING - LEARNING</p>
                        <p class="mt-2 text-darkText italic text-md">In order to make teaching more effective, use of modern technological methods is made which
include Power Point Presentations, showcase of various documentaries, Philosophical debates
and other debates related with social issues on LED. Students Seminars, Paper Presentations,
Group Discussions and Quiz etc. are organized in the class and interactive sessions are
encouraged in the class. Class Tests and Assignments are of course the routine features of study.</p>
                       <p class="mt-6 text-black  font-bold text-lg">CAPACITY BUILDING</p>
                        <p class="mt-2 text-darkText italic text-md">Several interactive activities such as Seminars/ Presentations, Group Discussions, Showcase of
documentaries etc. followed by philosophical discussions are held from time to time which aim
at capacity building of students. Every year, an academic-cum-cultural fiesta \'Darshan Samagam\'
is organized by Philosophical Society at the College level in which students display their
argumentative/intellectual and ethical skills imbibed overtime.</p>
                       <p class="mt-6 text-black  font-bold text-lg">STUDENT PROGRESSION</p>
                        <p class="mt-2 text-darkText italic text-md">Most of the students pursue Post Graduation in various disciplines after completing UG Degree.
They are pursuing higher education at HP University Shimla, LBS GC Saraswati nagar itself and
GPG College Seema. Some students are doing various Diploma courses from ITIs and Computer
courses from various Comp</p>

                 ';
        }

        if ($type === 'POLITICAL-SCIENCE') {
            $title = 'DPARTMENT OF POLITICAL SCIENCE';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                    <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Political Science']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '
                        <p class="mt-2 text-black  font-bold text-lg">Department profile:</p>
                        <p class="mt-2 text-darkText italic text-md"> Education removes darkness and makes life brightest forever from education only, all round development is possible.
Educatio make a person polite, politeness increase ability and ability gives maturity.
</p>
                        <p class="mt-2 text-darkText italic text-md">Department of political science was established in year 1986 .Politics is the most democratic at all sciences as the final
judgement concerning political reality and good life are the responsibility of all. In this backdrop, the study of political
science as a subject is infinitely beneficial in view of its being the key to understanding as well as the possible solution of all
problems facing us in our contemporary time. Study of the subject opens up multiple opportunities for political science
graduates. Student can choose from diverse fields such as civil services, judiciary services journalism research study and
teaching profession etc.</p>

                        <p class="mt-4 text-black  font-bold text-lg">FACULTY PROFILE</p>
                         <img src="' . asset('assets/images/courses/PoliticalScience/1.png') . '" alt="" class="rounded-md mt-2">
                          <p class="mt-1 text-darkText text-md">Prof. Rajesh Kumar </p>
                                 <p class="mt-4 text-darkText italic text-md">Assistant Professor Rajesh Kumar M.A., Mphil., UGC Net (HPU).Teaching experience 6 years.</p>


   <p class="mt-6 text-black  font-bold text-lg">Teaching Learning Facilities: </p>
                          <p class="mt-1 text-darkText italic text-md">Department of political science was established in year 1986 started by UG classes and 2019 also started PG
classes with 40 seats capacity, first session (2019) in PG class 16 student enrolment but 2020 second session only 5
students enrolment in PG due to Covid-19 pandemic. Department of political science well facilitates to teaching and
learning process with smart classroom and used to modern technique to teaching .To telecast live program of Loksabha
and Rajyasabha on the big screen to debate on budget and other bill.</p>
                          <div class="flex gap-2 flex-wrap">
                            <img src="' . asset('assets/images/courses/PoliticalScience/2.png') . '" alt="" class="rounded-md mt-2">
                         <img src="' . asset('assets/images/courses/PoliticalScience/3.png') . '" alt="" class="rounded-md mt-2"></div>


                         <p class="mt-6 text-black  font-bold text-lg">Department of political science activity:</p>
                          <p class="mt-1 text-darkText italic text-md">The political science department gives the adequate exposure to students by
involving them in activities outside the routine classroom teaching. The debate and quiz competition are some activities
that are organised to enhance students skill and knowledge. </p>
                          <p class="mt-4 text-darkText italic text-md">< celebrate of constitutional day 26th November 2019</p>
                          <p class="mt-2 text-darkText italic text-md">< Celebrate of international human rights day 10th december.2019</p>
                          <p class="mt-2 text-darkText italic text-md">< Celebrate of the National voter day 25th January 2020 etc</p>

                          <p class="mt-6 text-black  font-bold text-lg">Some glimpses of the activity : </p>
                            <img src="' . asset('assets/images/courses/PoliticalScience/4.png') . '" alt="" class="rounded-md mt-2">
                            <img src="' . asset('assets/images/courses/PoliticalScience/5.png') . '" alt="" class="rounded-md mt-2">

                        <p class="mt-6 text-black  font-bold text-lg">PROGRATION REPORT:</p>
                         <p class="mt-2 text-darkText italic text-md">The student of political science department LBS college s/Nagar after Complete graduation
pursing post graduation, Law journalism and mass communication different college and University</p>
                         <p class="mt-2 text-darkText italic text-md">Some students are preparing civil service and other competitive examination.</p>
                         <table class="border-black border-[1px] border-collapse mt-8">
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">Sr.No.</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Name</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Progression</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">e-mail</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Contact no.</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">1</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Manjeet</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M.A. pol.sci. from HPU.</p>
                        <p>Presently preparing for competitive Exm</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Manjeethastwan@gmail.com </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8894962916</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">2</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Anshuk Dansinghta </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M.A. pol.sci. HPU.</p>
                        <p>Presently doing Masters in journalism andcommunication from HPU.</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">adansinghta@1998gmail.com </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">7876065172</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Aditi Khandolta</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M.A. pol.sci. HPU.</p>
                        <p>Presently preparing for NET\SET Exm</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Khandoltaaditi123@gmail.com </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8351924122</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">4</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Neeraj Ranta </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M. A. Pol. Sci. LBS.PG CollegeS/Nagar</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Neerajranta643@gmail.com </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8580879372</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">5</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Deepa </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M. A. Pol. Sci. LBS.PG CollegeS/Nagar</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">ddathan94@gmail.com  </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8894646476</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">6</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Monika Tanwar  </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M. A. Pol. Sci. LBS.PG CollegeS/Nagar</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Monikatanwar238@gmail.com   </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8580591113</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">7</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Anita</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Completed M. A. Pol. Sci. LBS.PG College</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Anitazinta16@gmail.com    </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8988583794</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">8</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Sanjana</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Pursuing M. A. Pol. Sci. LBS.PG College </p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">kaltasanjana@gmail.com     </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">7650092366</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">9</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Sanjive</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Pursuing M. A. Pol. Sci. LBS.PG CollegeS/Nagar</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">     </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8580922544</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">10</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Mahesh</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Pursuing M. A. Pol. Sci. LBS.PG CollegeS/Nagar</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">     </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8629839123</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-normal text-black p-2">11</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">Jiyalalita</td>
                        <td class="border-[1px] border-black font-normal text-black p-2">
                        <p>Pursuing M. A. Pol. Sci. LBS.PG CollegeS/Nagar</p>
                        </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">     </td>
                        <td class="border-[1px] border-black font-normal text-black p-2">8580909511</td>
                    </tr>
                </table>

                        <p class="mt-6 text-black  font-bold text-lg">DISTINGUISHED ALUMINAE :</p>

                          <p class="mt-4 text-darkText italic text-md">1. Smt. Peeti Panta , Assistant Professor political science.</p>
                          <p class="mt-2 text-darkText italic text-md">2. Sh. Chunnilal Kalta , Revenue department.</p>
                          <p class="mt-2 text-darkText italic text-md">3. Sh. Perdeep Kumar, JOA. </p>

                 ';
        }

        if ($type === 'PUBLIC-ADMINISTRATION') {
            $title = 'DEPARTMENT OF PUBLIC ADMINISTRATION';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                                     <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Public Administration']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                      <p class="mt-2 text-darkText italic text-md">The Department of Public Administration in LBS Govt. PG College Saraswati
Nagar was created in 1986. The objective of the course at under graduate level is to
provide the students with enriched knowledge base that would include both
theoretical formulations and practical orientation so that he/she is equipped to
challenges of management and administration. The structure of the course is so
patterned that students taking course can see its utility in the context of higher
studies, civil service examinations both at the centre and at the state level. Besides
this it also prepare students for different type of courses by exposing them to wide
range of economic, legal, political and social issues with the context of field.</p>
                      <img src="' . asset('assets/images/courses/PublicAdm/1.png') . '" alt="" class="rounded-md mt-2">
                      <p class="mt-2 text-darkText italic text-md">(Department of Public Administration)</p>
                       <p class="mt-4 text-black  font-bold text-lg">Faculty:-</p>
                        <p class="mt-2 text-darkText italic text-md"> Dr. Anil Chauhan, Assistant Professor (HOD) M.A., Ph.D. (NET, SLET)
Teaching Experience 16 years. Area of Specialization Bureaucratic Ethos and
Culture. </p>
                       <p class="mt-4 text-black  font-bold text-lg">Course Feature And Facilities</p>
                        <p class="mt-2 text-darkText italic text-md">(1) The Department encourages students to participate in seminars.</p>
                        <p class="mt-2 text-darkText italic text-md">(2) The Department has a student Association with Political Science in which
students actively participate in programmes. This help students to enrich their
leadership qualities. </p>
                        <p class="mt-2 text-darkText italic text-md">(3) The Department has a collection of books and magazines in the college library.</p>
                        <p class="mt-2 text-darkText italic text-md">(4) The Department imparts effective lecture through smart class rooms.</p>
                       <p class="mt-4 text-black  font-bold text-lg">Students Progression and Achievements:-</p>
                        <p class="mt-2 text-darkText italic text-md">Several students pursue post-graduation in Public Administration and are Law
graduates and preparing for competitive examinations. The pass out students from
this institution are serving in various private and government sectors and also
pursuing higher studies in various universities in Himachal Pradesh and outside the
state.</p>
                       <p class="mt-4 text-black  font-bold text-lg">Future Plan:-</p>
                        <p class="mt-2 text-darkText italic text-md">Start Post-Graduate (PG) Diploma in Office Management, Disaster
Management, Leadership training etc.</p>


                 ';
        }

        if ($type === 'GEOGRAPHY') {
            $title = 'DEPARTMENT OF GEOGRAPHY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                   <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Geography']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <p class="mt-4 text-black  font-bold text-lg">Introduction</p>
                       <p class="mt-2 text-darkText italic text-md">Geography is the study of earth surface. It includes Space, Place and development of
geomorphic landform features that affect spatial distribution of living being. Geography as an
integrating discipline has interface with numerous natural and social science. ‘Geography’as
an independent subject in Universities and Colleges in India and learn about the physical
environment of the earth, human activities and their interactive relationships. As LBS Govt.
Post-Graduation Degree College Saraswatinagar located in 31° 7\'27.38"N Latitude and
77°45\'00.31"E Longitude in Shimla Distt. of Himachal Pradesh. The average elevation of this
particular region is from above mean sea level is 1455 meters. Department of Geography, at
LBS GC Saraswatinagar was established in 1987.</p>
                       <p class="mt-4 text-black  font-bold text-lg">Faculty</p>
                       <p class="mt-2 text-black  font-bold text-md">1. Kailash Chauhan (M.Phil. M.A. Geography)</p>
                        <p class="mt-2 text-darkText italic text-md">Joined at Higher Education in year 2017. He
is presently working as an Assistant Professor at Department of Geography LBSGPGC
Saraswatinagar Distt. Shimla H.P. He has done his M.Phil. Geography in First Division with
68.5% on the topic of “A Study of Landslide Occurrences Along Shimla-Rohru State
Highway, in Shimla District in Himachal Pradesh” from Himachal Pradesh University,
Shimla in 2012-14. He has done his M.A. Geography in First Division with 60.5% from
Himachal Pradesh University, Shimla in 2008-10.
Teaching Experience 6 years Specialization in Geomorphology.</p>

                      <p class="mt-4 text-black  font-bold text-lg">Nature and extent of Bachelor’s degree programme with Geography</p>
<p class="mt-2 text-darkText italic text-md">Geography has a vide scope in Natural and social-sciences. The depth and breadth of study of
individual topics in the following courses depend on the nature and devotion of the learners. The
key areas of study in Geography are (Syllabi of various courses mentioned below):
</p>
                         <p class="mt-2 text-darkText italic text-md">At the B.A. 1st year (UGC) level (Both courses as Core Discipline Specific Courses)</p>
                         <table class="border-black border-[1px] border-collapse mt-8">
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">Sr.No.</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Name of Courses & Code </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Course type </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">No. of students</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Physical Geography (GEOGP101CC</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Core DSE 2A </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">17</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">General Cartography (GEOGP102CC</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Core DSE 2B</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">17</td>
                            </tr>
                         </table>


                         <p class="mt-4 text-darkText italic text-md">At the B.A.2nd year (UGC) level (The first two courses as Core Discipline Specific Courses and thenext two courses as Skill Enhancement courses)</p>
                         <table class="border-black border-[1px] border-collapse mt-8">
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">Sr.No.</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Name of Courses & Code </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Course type </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">No. of students</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Human Geography (GEOGP201CC </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Core DSE 2C</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">14</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Environmental Geography (GEOGP202CC</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Core DSE 2D</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">14</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Regional Planning and Development (GEOGP203SEC)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">SEC 1 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">11</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">4</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Remote Sensing and GPS(GEOGP204SEC)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">SEC 2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">11</td>
                            </tr>
                         </table>

                          <p class="mt-4 text-darkText italic text-md">At the B.A. 3rd year (UGC) level (The first two courses as Skill Enhancement courses and the next two courses as Discipline Specific Elective Courses and the next two courses as Generic Elective) </p>
                         <table class="border-black border-[1px] border-collapse mt-8">
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">Sr.No.</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Name of Courses & Code </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Course type </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">No. of students</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Geographic Information System (GEOGP301SEC)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">SEC 1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">05</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Field Techniques and Survey based Project Report (GEOGP 302SEC)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">SEC 2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">05</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Geography of India (GEOGP303-1DSE</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Core DSE 2A </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">08</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">4</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Disaster Management (GEOGP304-1DSE</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Core DSE 2B</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">08</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">5</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Disaster Risk Reduction (GEOGP 305GE-1)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">GE-1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">01</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">6</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Sustainability and Development(GEOGP 306 GE-2)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">GE-2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">01</td>
                            </tr>
                         </table>


                       <p class="mt-4 text-black  font-bold text-md">Facilities</p>
                        <p class="mt-2 text-darkText italic text-md">Smart class room equipped with OHP and smart interactive white board and also available
laboratory with all cartographic instruments.</p>
                      <img src="' . asset('assets/images/courses/Geography/1.png') . '" alt="" class="rounded-md mt-2">
                        <p class="mt-2 text-darkText italic text-md">3-D models, Aerial Photographs, Mirror Stereoscope all kind of small-scale thematic maps and
availability of large-scale Topographical Sheets (Maps) of the different parts of the country. </p>
                        <p class="mt-2 text-darkText italic text-md">An open-source GIS software named Quantum GIS (QGIS) installed in the DTS for disseminate
practical knowledge of Geospatial techniques among the students.</p>


                       <p class="mt-4 text-black  font-bold text-md">Aims and objectives in Bachelor degree with Geography.</p>
                        <p class="mt-2 text-darkText italic text-md">● To acquaint the students with the living condition of men in different parts of the globe.</p>
                        <p class="mt-2 text-darkText italic text-md">● To enable the students to acquire a knowledge of natural resource and sustainable
development.</p>
                        <p class="mt-2 text-darkText italic text-md">● To develop in students an understanding of how environment and climate factors have
influenced our life.</p>
                        <p class="mt-2 text-darkText italic text-md">● To developed practical knowledge with General cartography and Thematic cartography.
</p>
                        <p class="mt-2 text-darkText italic text-md">● Now days in subject Geography new techniques have been used. GST (Geospatial
Techniques like GIS, GPS and Remote sensing) is used for the betterment, planning and
development of towns and urban’s spatial integration and develop. The knowledge of GST can
be disseminating through various software like Arc GIS, Erdas and but in department have
open source software like QGIS and SAGA for the betterment of students.</p>


                       <p class="mt-4 text-black  font-bold text-md">SWOT Analysis (Strengths, Weaknesses, Opportunities, Threats)Department of Geography</p>
                       <p class="mt-4 text-black  font-bold text-md">Strength</p>
                       <p class="mt-2 text-darkText italic text-md">● Extension of an efficient Laboratory with all equipment.</p>
                       <p class="mt-2 text-darkText italic text-md">● Satisfactory enrolment of students in department despite of non-availability of subject in
Secondary school level.</p>
                       <p class="mt-2 text-darkText italic text-md">● Enrolment of more Girl students than boys’ students.</p>
                       <p class="mt-2 text-darkText italic text-md">● Some students are punctual and sincere regarding their assignments and practical works</p>
                       <p class="mt-2 text-darkText italic text-md">● To disseminate practical’s knowledge in the recent field of GIS and Remote sensing with the
help of QGIS and SAGA an open source software system is used.
</p>
                       <p class="mt-4 text-black  font-bold text-md">Weaknesses</p>
                       <p class="mt-2 text-darkText italic text-md">● Syllabus is not as per the future examination purpose like UGC/HPPSC</p>
                       <p class="mt-2 text-darkText italic text-md"> ● Lack of separate GIS/RS Laboratory .and internet facility.</p>
                       <p class="mt-2 text-darkText italic text-md">● Lack of Geospatial technique utility.
</p>
                       <p class="mt-2 text-darkText italic text-md">● Students are less interested in map making and cartographic technique.</p>
                       <p class="mt-4 text-black  font-bold text-md">Opportunity</p>
                       <p class="mt-2 text-darkText italic text-md">● Department provide plate form to understand basics of Geospatial Techniques.
</p>
                       <p class="mt-2 text-darkText italic text-md">● Department provide importance of natural resource and sustainable development.</p>
                       <p class="mt-2 text-darkText italic text-md">●Every year the department organises one academic field tour for students to study various physical
and socio-economic feature.</p>
                       <p class="mt-2 text-darkText italic text-md">● Department provide basic and conceptual knowledge of Environment.</p>
                       <p class="mt-2 text-darkText italic text-md">● We indulge students in many disasters management mock drill, cleanness programme etc.</p>
                       <p class="mt-4 text-black  font-bold text-md">Threat</p>
                       <p class="mt-2 text-darkText italic text-md">● Subject and post in secondary school vacate is major threat to low enrolment.</p>
                       <p class="mt-2 text-darkText italic text-md">● Pressure from public, NGOs and other elements compel the college to take enrolment of
students even after the due date is over. This makes it difficult to run the syllabi and maintain
good results.</p>
                       <p class="mt-2 text-darkText italic text-md">● Keeping in view the geographical and extreme hot climatic conditions of the area the
imposition to the academic, curricular and co-curricular activities of the colleges</p>

                       <p class="mt-4 text-black  font-bold text-md">Distinguished Aluminae </p>
                       <p class="mt-4 text-black  font-bold text-md">1 Sharwan Kumar HAS</p>
                       <p class="mt-4 text-black  font-bold text-md">2 Prince Mohan Assistant Professor Department of Geography GPGC Seema</p>


                 ';
        }

        if ($type === 'COMMERCE') {
            $title = 'DEPARTMENT OF COMMERCE';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Department of Commerce Report 2023-24']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '


                       <p class="mt-4 text-black  font-bold text-md">ABOUT THE DEPARTMENT:</p>
                       <p class="mt-2 text-darkText italic text-md">Formally established in 1997, the Department of Commerce at LBS Govt. P.G College Saraswati
Nagar has been dedicated to providing quality education aimed at developing dedicated,
innovative, and effective professionals and entrepreneurs. Our programs are designed to equip
students for impactful careers in corporate sectors, banking, teaching, and research.</p>
                       <p class="mt-2 text-darkText italic text-md">Our department has successfully spread commerce education through its Bachelor of
Commerce (B. Com) program and has recently introduced the Master of Commerce (M. Com)
program in 2023. These courses offer comprehensive knowledge in accountancy, management,
corporate laws, marketing, taxation, banking, and the economic system. Alongside academic
instruction, we place significant emphasis on enhancing students\' soft skills by encouraging
participation in extracurricular and coordinating activities.</p>
                       <p class="mt-2 text-darkText italic text-md">Understanding the importance of practical exposure in the commerce sector, our department
regularly organizes guest lectures, industrial visits, and educational tours. These initiatives help
students connect theoretical knowledge with real-world applications, preparing them for the
dynamic demands of the industry. Our goal is to facilitate academic growth while equipping
students with the necessary skills for future success.</p>
                       <p class="mt-2 text-darkText italic text-md">To enhance the learning experience, our faculty employs a variety of effective teaching tools.
The use of PowerPoint presentations in theory classes, coupled with student-led seminars and
presentations, makes learning engaging and interactive. Practical classes, interactive sessions,
quizzes, debates, group discussions, class tests, and assignments are routine features that
promote active learning and critical thinking.
</p>
                       <p class="mt-2 text-darkText italic text-md">We take pride in our students\' achievements, with many pursuing postgraduate studies in
commerce at HPU, and others preparing for civil services, banking coaching, or professional
qualifications such as CA. Our department strives to cultivate a nurturing yet dynamic
environment conducive to learning. By fostering both comfort and competitiveness, we ensure
that our students are well-groomed for their future careers through a blend of academic rigor
            and practical exposure.</p>
                       <p class="mt-4 text-black  font-bold text-md">FACULTY PROFILE–</p>
                       <p class="mt-2 text-darkText italic text-md">Assistant Professor Sandeep Kumar, M.Com. / NET/ SLET</p>
                       <p class="mt-2 text-darkText italic text-md">Teaching experience of 7 Years</p>

                       <p class="mt-2 text-darkText italic text-md">Assistant Professor Man Mohan, M.Phil /M.Com. / NET/ SLET</p>
                       <p class="mt-2 text-darkText italic text-md">Teaching experience of 7 Years</p>

                       <p class="mt-2 text-darkText italic text-md">Assistant Professor Diksha Chauhan, M.Phil /M.Com. / NET/ SLET</p>
                       <p class="mt-2 text-darkText italic text-md">Teaching experience of 7 Months</p>

                       <p class="mt-4 text-black  font-bold text-md">FACILITIES</p>
                       <p class="mt-2 text-darkText italic text-md">Two well established ICT Rooms with Interactive boards and projector.</p>

                       <p class="mt-4 text-black  font-bold text-md">TEACHING LEARNING:</p>
                       <p class="mt-2 text-darkText italic text-md">The department accommodates three classrooms, two of which are adequately equipped ICT
rooms featuring interactive boards and projectors, facilitating the integration of technology into
lessons and providing visual support.</p>

                       <p class="mt-4 text-black  font-bold text-md">EXPLORE OUR DEPARTMENT</p>
                       <p class="mt-2 text-darkText italic text-md">Welcome to a visual journey through our department. This photo gallery offers a glimpse into
the vibrant life and excellent facilities that make our department unique. From our modern
classrooms and advanced equipment to the engaging activities and events, each image
captures the essence of our dynamic academic environment. Join us on this tour and
experience the places where innovation, learning, and collaboration come to life</p>

                 ';
        }

        if ($type === 'MEDICAL-BOTANY') {
            $title = 'DEPARTMENT OF BOTANY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                                             <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Botany']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '


                       <p class="mt-4 text-black  font-bold text-md">ABOUT THE DEPARTMENT</p>
                       <p class="mt-2 text-darkText italic text-md">Department of Botany, at LBS GC Saraswati Nagar was established in 1986. The course not only
includes a study of diversity of plants and their economic importance but also offers a comprehensive
overview of plant morphology, Ecology anatomy, physiology, reproduction, genetics, metabolism,
cell and molecular biology, biotechnology and bioinformatics. The department maintains one well
equipped lab for the teaching purpose. The teaching in plant science is playing its vital role in making
students familiar with plants, their roles for livings and their importance. The Department routinely
organizes field activities to study local flora. The department has an active Eco-club, which organises
various awareness programmes on the campus and outside the campus. Botany, along with its allied
branches, provides employment opportunities in research and educational institutes, pharmacy,
agriculture, horticulture and forestry. The Department provides them a comfortable environment for
their learning and overall grooming for future careers.</p>


   <p class="mt-4 text-black  font-bold text-md">FACULTY PROFILE</p>
                       <p class="mt-2 text-darkText font-semibold text-md">Dr.P.P.Chauhan, Associate Professor (HOD), M.Sc, M.Phil. Ph.D. ( NET/GATE).
Teaching Experience 25 years, Specialization in Microbiology and Ethnobotany.</p>
                       <p class="mt-2 text-darkText font-semibold text-md">Dr. Jitender Thakur , Assistant Professor, M.Sc., Ph.D. (NET/SLET,)
Teaching Experience 3 years, Specialization in Mycology</p>


                       <p class="mt-4 text-black  font-bold text-md">FACILITIES</p>
                       <p class="mt-2 text-darkText italic text-md"> One well equipped laboratory.</p>
                       <p class="mt-2 text-darkText italic text-md"> Instruments: - Microtome , Autoclave, Centrifuge, Spectrophotometer, Trinocular Microscope
with LCD display, Student microscopes, K-yan , OHP, Models and display charts etc.
</p>
                       <p class="mt-2 text-darkText italic text-md"> Herbarium.</p>
                       <img src="' . asset('assets/images/courses/Botany/1.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/courses/Botany/2.png') . '" alt="" class="rounded-md mt-2">

                       <p class="mt-4 text-black  font-bold text-md">TEACHING-LEARNING</p>
                       <p class="mt-2 text-darkText italic text-md">The teachers of the Department adopt various teaching tools to make teaching more effective. The use of PowerPoint
presentations in the theory classes. The seminar/ presentation by the students . The practical classes are conducted
with the help of live specimens and permanent slides. Interactive sessions are held in the routine classes. Class tests
and assignments are routine features of study. </p>


                       <p class="mt-4 text-black  font-bold text-md">CAPACITY BUILDING</p>
                       <p class="mt-2 text-darkText italic text-md">Workshops and seminars on relevant topics are also organized by the Department for students and teachers. The
Department also organizes excursions for students. Teachers accompany students to visit the Tarla wild life Sanctuary
. The visited to mushroom cultivation centre Rohru, vermi-compost unit installed by local orchardist are conducted.
Students were also being imparted the vocational training in computer use( Certificate course in computer
application). Students are taken to nearby forest area to understand biodiversity, collect plants and also occasionally
visit is also conducted to research institutions such as the Forest Research Institute Dehradun.</p>


                       <p class="mt-4 text-black  font-bold text-md">STUDENT PROGRESSION/ACHIEVEMENTS</p>
                       <p class="mt-2 text-darkText italic text-md">Several students pursue post-graduation in Botany and other disciplines after completing UG degree in Life Science.
The pass out students from this Institution are pursuing higher studies at HP University Shimla, Shoolini University,
Uttarkahand University Dehradun and Eternal University Badu Sahib.</p>
                       <p class="mt-2 text-darkText italic text-md">A number of students after successful completion of their PG and Ph.D. degrees are serving as college and school
teachers , as scientists, in civil services, and other fields.</p>


     <p class="mt-4 text-black  font-bold text-md">DISTINGUISHED ALUMINAE ( Faculty of Sciences):</p>
                       <p class="mt-2 text-darkText italic text-md">1. Sh . Sudesh Mokta, , IAS</p>
                       <p class="mt-2 text-darkText italic text-md">2. Dr. Anita Mehta , Post-Doctoral Fellowship at Germany</p>
                       <p class="mt-2 text-darkText italic text-md">3. Dr. Ankush , Asst. Prof. Deptt. of Biotechnology HPU.</p>
                 ';
        }

        if ($type === 'MEDICAL-CHEMISTRY') {
            $title = 'DEPARTMENT OF CHEMISTRY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                                                              <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Chemistry']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '


                       <p class="mt-4 text-black  font-bold text-md">ABOUT THE DEPARTMENT</p>
                       <p class="mt-2 text-darkText italic text-md">The Department of Chemistry at LBSGPGC Saraswati Nagar was established in 1986. The
department runs a B.Sc. Three Years Degree Course under “Choice Based Credit System”
(CBCS). The course offers a detailed study of all the three major components of chemistry i.e.
Organic, Inorganic and Physical Chemistry including Spectroscopy. Along with that the Skill
Enhancement Course (SEC) is also in practice which ensures the thorough understanding of
applicability of the taught subjects in real life . The Department of Chemistry is well equipped
with most of the updated academic and technological facilities required for an efficient quality
teaching that includes two well maintained Laboratories and a smart classroom. The Department
often organizes PowerPoint Presentations, classroom tests, quizzes and internal seminars (to
make students aware of the ongoing research and opportunities in various fields of Chemistry as
well as the current Literature Survey, especially for B.Sc. 3rd year students). Thus, the
Department aims at the overall development of students so as they can comfortably pursue their
career in any of the diversified branches of Chemistry.</p>

                       <p class="mt-4 text-black  font-bold text-md">FACULTY PROFILE</p>
                       <p class="mt-2 text-darkText italic text-md">Dr. Shallu Dogra</p>
                       <p class=" text-darkText italic text-md">Assistant Professor, B.Sc.(Hons.), M.Sc.(Hons.), CSIR/NET, Ph.D. (P.U. Chandigarh).</p>
                       <p class=" text-darkText italic text-md">Teaching Experience: 5 years and 7 months</p>
                       <p class=" text-darkText italic text-md">Specialization: Organic Chemistry, Green Chemistry and Natural Products.</p>

                       <p class="mt-4 text-black  font-bold text-md">FACILITIES :</p>
                       <p class="mt-2 text-darkText italic text-md">The facilities available with the Department of Chemistry are: Classroom with Desks and Board,
Overhead Projector with Smart Podium and Interactive Board, Classroom Cabin, Teacher’s
Room with Computer and Printer, Laboratory No. 1 with Apparatus and Instruments including,
Digital Conductivity Meter, Digital Photo Colorimeter, Digital Potentiometer, pH Meter, UV
Observation Instrument, Kohlrausch Conductivity Bridge, Double Distillation Unit, Heating Rota
Mantle, Water Bath, Centrifugation Machine, Polarimeter, Digital Colorimeter, Magnetic Stirrer
with Hot Plate, Conductivity Bridge, Thermodynamic Isolated System, UV/Visible
Spectrophotometer, Digital Weighing Balance, Vacuum Filteration Unit, Column
Chromatography Assembly, Hot Air Oven, Melting Point Apparatus, Thin Layer
Chromatography Units, Laboratory Staff Room, Laboratory No. 2 with Apparatus and
Instruments, Glassware and Other Apparatus.</p>
                       <img src="' . asset('assets/images/courses/Chemistry/1.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/courses/Chemistry/2.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/courses/Chemistry/3.png') . '" alt="" class="rounded-md mt-2">



                       <p class="mt-4 text-black  font-bold text-md">TEACHING - LEARNING</p>
                       <p class="mt-2 text-darkText italic text-md">In order to make teaching more effective and interesting, use of modern technological methods is
made. Power Point Presentations, internal seminars / Paper Presentations by students, preparation
of Working Models, Group Discussions, Quizzes, Class Tests, Assignments and Interactive
sessions are organized regularly and students are encouraged to participate religiously in all of
these activities.</p>

                       <p class="mt-4 text-black  font-bold text-md">CAPACITY BUILDING</p>
                       <p class="mt-2 text-darkText italic text-md">The Department often organizes PowerPoint Presentations, classroom tests, interactive sessions,
quizzes and internal seminars (to make students aware of the ongoing research and opportunities
in various fields of Chemistry as well as the current Literature Survey, especially for B.Sc. 3rd
year students). Thus, the Department aims at the overall development of students so as they can
comfortably pursue their career in any of the diversified branches of Chemistry.</p>

                       <p class="mt-4 text-black  font-bold text-md">STUDENT PROGRESSION</p>
                       <p class="mt-2 text-darkText italic text-md">Many students pursue post-graduation in Chemistry and other disciplines after completing UG
degree in Science. The pass out students from this Institution are pursuing higher studies at HP
University Shimla, Shoolini University, Uttrakhand University Dehradun and Eternal University
Badu Sahib.</p>
                       <p class="mt-2 text-darkText italic text-md">A number of students after successful completion of their PG and Ph.D. degrees are serving as
College and School Teachers, Scientists, Civil Servants and holding other prestigious positions</p>

                       <p class="mt-4 text-black  font-bold text-md">DISTINGUISHED ALUMNAE (Faculty of Sciences)
</p>
                       <p class="mt-2 text-darkText italic text-md">1. Sh. Sudesh Mokta, IAS</p>
                       <p class="mt-2 text-darkText italic text-md">2. Dr. Anita Mehta, Post-Doctoral Fellow at Germany</p>
                       <p class="mt-2 text-darkText italic text-md">3. Dr. Ankush, Asst. Prof. Dept. of Biotechnology, HPU</p>




                 ';
        }

        if ($type === 'MEDICAL-ZOOLOGY') {
            $title = 'DEPARTMENT OF ZOOLOGY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                     <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Zoology']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '


                       <p class="mt-4 text-black  font-bold text-md">ABOUT THE DEPARTMENT</p>
                       <p class="mt-2 text-darkText italic text-md">The Department of Zoology at LBSGPGC Saraswatinagar was established in 1986. The
department runs a B.Sc. Three Years Degree Course under “Choice Based Credit System”
(CBCS). The course not only includes a study of diversity of Kingdom Animalia but also
offers a comprehensive overview of animal diversity, comparative study of vertebrates along
with its embryology, physiology, reproduction, genetics, biochemistry, applied zoology and
immunology. Along with that the Skill Enhancement Course (SEC) is also in practice which
ensures the thorough understanding of applicability of the taught subjects in real life. The
Department of Zoology is well equipped with most of the updated academic and
technological facilities required for an efficient quality teaching that includes a well
maintained Laboratory and a smart classroom. The Department routinely organizes field
activities to study local fauna. The department has an active Eco-club, which organises
various awareness programmes on the campus and outside the campus. The Department often
organizes Power Point Presentations, classroom tests, quizzes and seminars. Thus, the
Department aims at the overall development of students so as they can comfortably pursue
their career in any of the diversified branches of Zoology.</p>

                       <p class="mt-4 text-black  font-bold text-md">FACULTY PROFILE</p>
                       <p class="mt-2 text-darkText italic text-md">Dr Punam Chauhan, Assistant Professor, M.Sc., Ph.D. (SLET)</p>
                       <p class=" text-darkText italic text-md">Teaching Experience: 4 years</p>
                       <p class=" text-darkText italic text-md">Specialization: Fishery Sciences</p>






                       <p class="mt-4 text-black  font-bold text-md">FACILITIES </p>
                       <p class="mt-2 text-darkText italic text-md">The facilities available with the Department of Zoology are:</p>
                       <p class="mt-2 text-darkText italic text-md">➢ One well equipped laboratory</p>
                       <p class="mt-2 text-darkText italic text-md">Instruments: Trinocular Microscope with camera, binocular light microscopes, students
microscopes, OHP, Models & Charts, Specimens, Sphygmomanometer, Digital
Interactive Board, Glasswares and Other Apparatus etc</p>
                       <img src="' . asset('assets/images/courses/Zoology/1.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/courses/Zoology/2.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/courses/Zoology/3.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/courses/Zoology/4.png') . '" alt="" class="rounded-md mt-2">



                       <p class="mt-4 text-black  font-bold text-md">TEACHING - LEARNING</p>
                       <p class="mt-2 text-darkText italic text-md">In order to make teaching more effective and interesting, use of modern technological
methods is made. Power Point Presentations, internal seminars / Paper Presentations by
students, preparation of Working Models, Group Discussions, Quizzes, Class Tests,
Assignments and Interactive sessions are organized regularly and students are encouraged to
participate religiously in all of these activities. The practical classes are conducted with the
help of specimens and permanent slides.</p>

                       <p class="mt-4 text-black  font-bold text-md">CAPACITY BUILDING
</p>
                       <p class="mt-2 text-darkText italic text-md">Workshops and seminars on relevant topics are also organized by the Department for students
and teachers. The Department also organizes excursions for students. The Department often
organizes PowerPoint Presentations, classroom tests, interactive sessions, quizzes and
internal seminars to make students aware of the ongoing research and opportunities in various
fields of Zoology. Students were also being imparted the vocational training in computer use
(Certificate course in computer application). Thus, the Department aims at the overall
development of students so as they can comfortably pursue their career in any of the
diversified branches of Zoology</p>

                       <p class="mt-4 text-black  font-bold text-md">STUDENT PROGRESSION</p>
                       <p class="mt-2 text-darkText italic text-md">Many students pursue post-graduation in Zoology and other disciplines after completing UG
degree in Science. The pass out students from this Institution are pursuing higher studies at
HP University Shimla, Shoolini University, Uttrakhand University Dehradun and Eternal
University Badu Sahib. A number of students after successful completion of their PG and
Ph.D. degrees are serving as College and School Teachers, Scientists, Civil Servants and
holding other prestigious positions.
</p>

                       <p class="mt-4 text-black  font-bold text-md">DISTINGUISHED ALUMNAE (Faculty of Sciences)
</p>
                       <p class="mt-2 text-darkText italic text-md">1. Sh. Sudesh Mokta, IAS</p>
                       <p class="mt-2 text-darkText italic text-md">2. Dr. Anita Mehta, Post-Doctoral Fellow at Germany
</p>
                       <p class="mt-2 text-darkText italic text-md">3. Dr. Ankush, Asst. Prof. Dept. of Biotechnology, HPU</p>




                 ';
        }

        if ($type === 'NON-MEDICAL-PHYSICS') {
            $title = 'DEPARTMENT OF PHYSICS';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'Physics']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '


                       <p class="mt-4 text-black  font-bold text-md">About the Department</p>
                       <p class="mt-2 text-darkText italic text-md">The department of Physics, LBS Govt. College was established in the year 1986. In addition to
imparting knowledge of Physics, the department aims to provide a conducive environment for
overall development of the students. For this the department has all the necessary facilities such as
digital teaching system, fully equipped laboratory, separate dark room for conducting experiments
requiring dark conditions etc.</p>



                       <p class="mt-4 text-black  font-bold text-md">Faculty Profile</p>
                       <p class="mt-2 text-darkText italic text-md">Dr. Radha Raman Gautam, Assistant Professor, M.Sc., PhD, NET</p>
                       <p class="mt-2 text-darkText italic text-md">Teaching experience 3 years, Specialization: Particle Physics</p>


                       <p class="mt-4 text-black  font-bold text-md">Teaching Learning</p>
                       <p class="mt-2 text-darkText italic text-md">The students of the department are encouraged to actively participate in various teaching learning
activities. In addition to the regular teaching as per the university syllabus, information sharing and
confidence building activities such as Quiz competitions, Power Point Presentations, etc. are
regularly conducted in the department for the all around development of the students. Regular class
tests are also conducted to check the academic development of the students.</p>


                       <p class="mt-4 text-black  font-bold text-md">Student Progression</p>
                       <p class="mt-2 text-darkText italic text-md">A number of students have pursued higher studies at Himachal Pradesh University, IISER Mohali,
Shoolini University, and other universities after completing their studies in this institution.</p>


                       <p class="mt-4 text-black  font-bold text-md">Facilities</p>
                       <p class="mt-2 text-darkText italic text-md">The department of physics has latest state of the art Digital Teaching System with overhead
projector and smart board which is utilized for daily teaching and learning activities. The
department has all the necessary apparatus for conducting Physics experiments mentioned in the
University syllabus. A separate dark room is available in the Physics Department for experiments
requiring dark conditions</p>
                       <img src="' . asset('assets/images/courses/Physics/1.png') . '" alt="" class="rounded-md mt-2">
                         <p class="mt-4 text-darkText italic text-md">Partial list of the apparatus available in the Physics Laboratory:</p>
                         <p class="mt-2 text-black text-md">1. Helium Neon LASER setup</p>
                         <p class="mt-2 text-black text-md">2. Optical Spectroscopes</p>
                         <p class="mt-2 text-black text-md">3. Optical Bench</p>
                         <p class="mt-2 text-black text-md">4. Cathode Ray Oscilloscopes</p>
                         <p class="mt-2 text-black text-md">5. Bar Pendulum</p>
                         <p class="mt-2 text-black text-md">6. Kater’s Pendulum</p>
                         <p class="mt-2 text-black text-md">7. Torsion Pendulum</p>
                         <p class="mt-2 text-black text-md">8. Fly Wheel setup</p>
                         <p class="mt-2 text-black text-md">9. Determination of Planck’s constant using LEDs apparatus</p>
                         <p class="mt-2 text-black text-md">10. Digital Multimeter (FLUKE)</p>
                         <p class="mt-2 text-black text-md">11. De Sauty Bridge</p>
                         <p class="mt-2 text-black text-md">12. Flashing and Quenching of Neon gas apparatus</p>
                         <p class="mt-2 text-black text-md">13. PNP, NPN Characteristics apparatus</p>
                         <p class="mt-2 text-black text-md">14. Zener diode Characteristics apparatus</p>
                         <p class="mt-2 text-black text-md">15. PN-junction diode characteristics apparatus</p>
                         <p class="mt-2 text-black text-md">16. Melde’s electrical vibrator</p>
                         <p class="mt-2 text-black text-md">17. Determination of e/m by Helical Method apparatus</p>
                         <p class="mt-2 text-black text-md">18. LCR Resonance apparatus</p>
                         <p class="mt-2 text-black text-md">19. Newton’s rings setup</p>
                         <p class="mt-2 text-black text-md">20. Solar Cell Characteristics apparatus</p>
                         <p class="mt-2 text-black text-md">21. Determination of Stefan’s constant apparatus</p>
                         <p class="mt-2 text-black text-md">22. Variation of Induced EMF (Magnetic Induction apparatus)</p>
                         <p class="mt-2 text-black text-md">23. Verification of Norton’s Theorem apparatus</p>
                         <p class="mt-2 text-black text-md">24. Verification of Thevenin’s Theorem apparatus</p>
                       <img src="' . asset('assets/images/courses/Physics/2.png') . '" alt="" class="rounded-md mt-2">



                 ';
        }

        if ($type === 'BVOC') {
            $title = 'Bvoc Department Hospitality & Tourism';
            $pageContent =
                '
                    <div class="w-full flex justify-center">
                       <img src="https://www.lbsgcsnagar.edu.in/assets/images/bvoc/1.jpg" alt="" class="rounded-md mt-2">
                      </div>

                 ';
        }


        if ($type === 'BCA') {
            $title = 'DEPARTMENT OF COMPUTER SCIENCE AND TECHNOLOGY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                         <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'BCA Department']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '
                       <p class="mt-4 text-black  font-bold text-md">Department of Computer Science and Technology</p>
                       <img src="' . asset('assets/images/courses/Bca/1.png') . '" alt="" class="rounded-md mt-2">
                       <p class="mt-4 text-black  font-bold text-md">Faculty (BCA, Add-On, PGDCA)</p>
                       <table class="border-black border-[1px] border-collapse mt-8">
                            <tr>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Sr.No.</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Name</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Designation</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Qualification</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Experience Years</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">D.O.J.</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Ranjana Dilta</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Lecturer</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">M. Phil Maths(SET)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">5.5</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">06-12-2016</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Chander Mohan</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Lecturer</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">MCA</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">5</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">27-02-2017</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Manu Panatu</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Add-On Instructor </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">PGDCA, MA</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">5</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">01-03-2017</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Shiwani Rawat </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Lecturer</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">MCA</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">02-12-2019</td>
                            </tr>
                         </table>
                 ';
        }

        if ($type === 'PGDCA') {
            $title = 'DEPARTMENT OF PGDCA';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                       <a href="' . route('pdfViewer',['folder'=>'departments','file'=>'PGDCA']). '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '
                       <p class="mt-4 text-black  font-bold text-md">( First Batch to be admitted this year)</p>
                        <p class="mt-2 text-darkText italic text-md">In order to cater to the growing demand of computer awareness among the youth, this College has introduced a
Post Graduate Diploma in Computer Applications (PGDCA) from this academic session</p>
                        <p class="mt-2 text-darkText italic text-md">The duration of PGDCA course is one year spread over two semesters. The examinations will be held at the end
of each semester</p>


                       <p class="mt-4 text-black  font-bold text-md">Distribution of Seats</p>
                       <table class="border-black border-[1px] border-collapse mt-2">
                            <tr>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Sr.No.</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Category</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">No. of seats</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">1</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Subsidized Seats </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">30</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">2</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Non-Subsidized Seats</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">10</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2"></td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Total (1 +2) </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">40</td>
                            </tr>

                         </table>

                        <p class="mt-4 text-black  font-bold text-md">ELIGIBLITY CONDITIONS:</p>
                        <p class="mt-2 text-darkText italic text-md">Any graduate from recognized university or its equivalent with at least 50% marks (45% marks in case of
SC/ST candidates).</p>

                        <p class="mt-4 text-black  font-bold text-md">AGE LIMIT: </p>
                        <p class="mt-2 text-darkText italic text-md">The maximum age limit for the candidates seeking admission to PGDCA programme shall be 26 years for male
candidates, 28 years for female candidates and 29 years for SC/ST (M/F) candidates as on 1st July of the
admission year.
</p>

                        <p class="mt-4 text-black  font-bold text-md">ADMISSION CRITERIA: </p>
                        <p class="mt-2 text-darkText italic text-md">The admission to PGDCA course will be on the basis of merit drawn in the Entrance Test conducted in the
College. There will be only one paper of 100 marks and the duration of the test will be 90 minutes. The
entrance test shall include two sections as:
</p>
                        <p class="mt-2 text-black  font-bold text-md">Section A: - General Aptitude Mathematics (+2 level) </p>
                        <p class=" text-black  font-bold text-md">Section B: - Computer Science </p>

                        <p class="mt-4 text-black  font-bold text-md">NOTE: </p>
                        <p class="mt-2 text-darkText italic text-md">Rechecking/Re-evaluation of answer books of the entrance test will not be allowed.</p>

                        <p class="mt-4 text-black  font-bold text-md">RESERVATION:  </p>
                        <p class="mt-2 text-darkText italic text-md">Admission to the course except for the seats reserved for NRIs/NRI sponsored candidates shall be subjected to
the following conditions:</p>
                        <p class="mt-1 text-darkText italic text-md">1. 15% and 7.5% seats shall be reserved for schedule caste and schedule tribe candidates respectively who
have passed their BA/B.Sc./B.Com. or any other equivalent degree from any recognized university.
</p>
                        <p class="mt-1 text-darkText italic text-md">2. The remaining 77.5% seats shall be filled as under:
</p>
                        <p class="mt-2 text-darkText italic text-md"> (i) 25% of the seats for admission shall be open for all the candidates irrespective of the institution from
where they have passed their qualifying examination</p>
                        <p class="mt-2 text-darkText italic text-md">(ii) 75% of the seats shall be filled out of the candidates who have passed their graduation degree from
Himachal Pradesh University subjected to the following reservations:
</p>
                        <p class="mt-2 text-darkText italic text-md">(a). 5% of the seats shall be reserved for outstanding sportsmen/women.(Certificates required) </p>
                        <p class="mt-2 text-darkText italic text-md">(b). 5% of the seats shall be reserved for outstanding cultural activists. . (Certificates required)</p>
                        <p class="mt-2 text-darkText italic text-md">(c). 3% of the seats shall be reserved for physically handicapped candidates. . (Certificates required)</p>
                        <p class="mt-2 text-darkText italic text-md">The H.P. University 120 point roaster for admission showing reservations of various categories shall be
followed</p>


                        <p class="mt-4 text-black  font-bold text-md">CATEGORY -I</p>
                        <p class="mt-4 text-black  font-bold text-md">ANNUAL FEE SCHEDULE FOR SUBSIDIZED CATEGORY</p>
                        <p class="mt-2 text-darkText italic text-md"></p>
                         <table class="border-black border-[1px] border-collapse mt-2">
                            <tr>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Sr.No.</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Description</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Amount (Rs.)</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">01</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Admission Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">02</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Tuition Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">600.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">03</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Migration Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">50.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">04</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Examination Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">-----</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">05</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Registration Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">30.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">06</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Continuation Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">10.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">07</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Sports Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">15.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">08</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Medical Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">06.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">09</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Holiday Home Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">01.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">10</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Student Aid Fund </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">02.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">11</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Youth Welfare Fund </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">02.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">12</td>
                                <td class="border-[1px] border-black font-normal text-black p-2"> Identity Card</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">12.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">13</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Magazine</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">14</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Cultural Activities Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">10.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">15</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Garden Fund </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">10.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">16</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Building Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">120.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">17</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Book Replacement Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">18</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Furniture Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">10.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">19</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Amalgamated Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">240.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">20</td>
                                <td class="border-[1px] border-black font-normal text-black p-2"></td>
                                <td class="border-[1px] border-black font-normal text-black p-2">16.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">21</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Campus Development Fund </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">10.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">22</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Subject Society Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">05.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">23</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">PTA Fund</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">100.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">24</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Library Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">200.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Security Deposit (Refundable)</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">1100.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">26</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Guest Faculty Fee</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">7000.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">27</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Computer Fee </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">4400.00</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2"></td>
                                <td class="border-[1px] border-black font-normal text-black p-2">TOTAL </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">14,022.00/-</td>
                            </tr>


                         </table>




                        <p class="mt-4 text-black  font-bold text-md">CATEGORY II</p>
                        <p class="mt-4 text-black  font-bold text-md">SELF FINANCING STUDENTS (NON-SUBSIDIZED CATEGORY)</p>
                        <p class="mt-2 text-darkText italic text-md">This applies only to NRI\'s/NRI sponsored /Foreign Nationals/Payment category. This scheme admits students
as per the merit in the examinations passed by the candidates. Top 10 candidates who had applied in this
category shall be admitted.
</p>
                        <p class="mt-2 text-darkText italic text-md">In addition to the eligibility conditions mentioned above, a candidate shall be required to submit along with the
application form, anyone of the following documents as may be applicable for the category of their candidature.</p>
                        <p class="mt-1 text-darkText italic text-md">1. Proof of Nationality in case of Foreign Nationals</p>
                        <p class="mt-1 text-darkText italic text-md">2. Proof of their status in the case of NRI\'s. For this purpose, either of the following documents shall be
considered as a proper proof:</p>
                        <p class="mt-2 text-darkText italic text-md">(i) Copy of Non-resident card/Employment card issued by the employer</p>
                        <p class="mt-1 text-darkText italic text-md">(ii) Photocopy of the immigration card/employment VISA entry on the passport along with the details of the
passport.</p>
                        <p class="mt-1 text-darkText italic text-md">(iii) Certificate issued by the Indian Embassy/High Commission in the country where the NRI is residing</p>
                        <p class="mt-1 text-darkText italic text-md">(iv) Photocopy of the latest assessment order of Income Tax authorities either in India or the country of
employment filed in the status of NRI.</p>
                        <p class="mt-2 text-darkText italic text-md">1. Certificate of sponsorship form NRI in the case of a sponsored candidate along with a proof of NRI
status of the sponsorer required under para (B).</p>
                        <p class="mt-1 text-darkText italic text-md">2. Photocopy of the latest assessment order of the Income Tax authorities in India and the Permanent
Account
</p>
                        <p class="mt-2 text-darkText italic text-md">Number (PAN) of the sponsorer issued by the Income Tax Department.</p>
                        <p class="mt-1 text-darkText italic text-md">Candidates granted admission under self-financing scheme shall be required to pay an annual consolidated fee
of US$ 550 (Five hundred and fifty US Dollars) in case of Foreign Nationals or NRls and Rs 25000/- in
case of NRI sponsored/Non-subsidized candidates. These dues have to be submitted at the time of admission.</p>


                        <p class="mt-4 text-black  font-bold text-md">NOTE:</p>

                        <p class="mt-2 text-darkText italic text-md">1. Fee once deposited shall not be refunded.</p>
                        <p class="mt-1 text-darkText italic text-md">2. The student admitted will be governed by the rules and regulations mentioned in the prospectus.</p>
                        <p class="mt-4 text-black  font-bold text-md">DOCUMENTS REQUIRED WITH THE APPLICATION FORM:</p>
                        <p class="mt-2 text-darkText italic text-md">Any student interested in seeking admission must pay Prospectus cumAdmission Form fee through online mode by visiting college website
www.lbsgcsnagar.edu.in. After going through the prospectus and
admission form, he/she should upload all necessary documents required
with admission form.</p>


                        <p class="mt-4 text-darkText italic text-md">The detailed course outline for PGDCA is given below which is subjected to any change by the Board of Studies
approved by Academic Council and Executive Council of Himachal Pradesh University. </p>
                        <p class="mt-4 text-darkText italic text-md">Outline of PGDCA Course (1 year) - two semesters and scheme of examination.</p>


                        <p class="mt-4 text-black  font-bold text-md">SEMESTER –I</p>
                         <table class="border-black border-[1px] border-collapse mt-2">
                            <tr>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Course Code</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Paper</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Max. Marks Theory</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Internal Assess.</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Exams. Duration (Hrs.)</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-101 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Fundamentals of Programming Using C</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-102 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">PC Software </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-103 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Operating system </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-104 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Computer Organization and Architecture </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-105 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Practical-I ( C Language) </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">50</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">50</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-106 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Practical-I I (PC Software)  </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">50</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">50</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>



                         </table>

                          <p class="mt-4 text-black  font-bold text-md">SEMESTER –II</p>
                         <table class="border-black border-[1px] border-collapse mt-2">
                            <tr>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Course Code</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Paper</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Max. Marks Theory</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Internal Assess.</td>
                                <td class="border-[1px] border-black font-semibold text-black p-2">Exams. Duration (Hrs.)</td>
                            </tr>
                            <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-201 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Data and File Structure </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-202 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">System Analysis and Design </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-203 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Object Oriented Programming & C ++ </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-204 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Data base Management system </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-205 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Practical-III (DFS Using C ++ </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-206 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Practical-IV (Data base Management system) </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">75</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">25</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">3</td>
                            </tr>
                              <tr>
                                <td class="border-[1px] border-black font-normal text-black p-2">DCS-207 </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">Project Work  </td>
                                <td class="border-[1px] border-black font-normal text-black p-2">200</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">-</td>
                                <td class="border-[1px] border-black font-normal text-black p-2">-</td>
                            </tr>
                         </table>

                          <p class="mt-4 text-darkText italic text-md">The project should be involve development of application software for some industry/ Institute.</p>




                 ';
        }


        return view('academics', compact( 'tableHeader', 'tableData', 'type', 'folderName', 'filePath', 'title', 'pageContent', 'pageType'));
    }
    public function aboutCollege($type, $folder = null, $file = null){
        $filePath = null;
        if ($file!=null)
        {
            $filePath = asset('assets/pdf/'.$folder.'/'.$file.'.pdf');
        }
        return view('aboutCollege', compact( 'type', 'folder', 'filePath' ));

    }
    public function administration($type){
        return view('administration', compact( 'type' ));

    }
    public function activities( $type)
    {
        if ($type === 'NSS') {
            $title = 'NSS';
            $tableHeader = ['NSS', 'Year'];
            $folderName = 'activities';
            $tableData = [
                ['Report', '2023-2024',  'NSS Annual  report 2023-24'],
                ['Report', '2021-2022',  'NSS Annual  report 2021-22'],
                ['Report', '2020-2021',  'NSS annual report 2020-21'],
                ['Report', '2019-2020',  'NSS Report 2019-20'],
            ];
        }
        if ($type === 'NCC') {
            $title = 'NCC';
            $tableHeader = ['NCC', 'Year'];
            $folderName = 'activities';
            $tableData = [
                ['Report', '2023-2024',  '#',],
                ['Report', '2022-2023',  'NCC Report 2022 2023',],
                ['Report', '2021-2022',  '#',],
                ['Report', '2020-2021',  '#',],
                ['Report', '2019-2020', '#',],
            ];
        }
        if ($type === 'ROVERS-RANGERS') {
            $title = 'ROVERS & RANGERS';
            $folderName = 'activities';
            $tableHeader = ['Rovers & Rangers Activity Report', 'Year'];
            $tableData = [
                ['Rovers & Rangers Activity Reports 2', '2021-2022',  '#',],
                ['Rovers & Rangers Activity Reports 1', '2019-2020',  '#',],
            ];
        }
        if ($type === 'ECO-CLUB') {
            $title = 'ECO CLUB';
            $folderName = 'activities';
            $tableHeader = ['ECO CLUB', 'Year'];
            $tableData = [
                ['Report', '2023-2024',  'Eco Club 2023 24',],
                ['Report', '2022-2023',  'Eco Club 2022 23',],
                ['Report', '2021-2022',  '#',],
                ['Report', '2020-2021',  '#',],
                ['Report', '2019-2020',  '#',],
            ];
        }
        if ($type === 'RED-RIBBON-CLUB') {
            $title = 'RED RIBBON ANNUAL REPORTS';
            $folderName = 'activities';
            $tableHeader = ['Annual Report', 'Year'];
            $tableData = [ ['RRC report ', '2023-2024',  'Red Ribbon Club 2023 24',],
                ['RRC report ', '2022-2023',  'Red Ribbon Club 2022 23',],
                ['RRC report ', '2021-2022',  '#',],
                ['RRC report ', '2020-2021',  '#',],
                ['RRC report ', '2019-2020',  'Red Ribbon Club 2019-20'],

            ];
        }
        if ($type === 'REGULAR-ACTIVITIES') {
            $title = 'REGULAR ACTIVITIES';
            $folderName = 'activities';
            $tableHeader = ['Regular Activities', 'Year'];
            $tableData = [
                ['	Regular Activities Reports 2', '2021-2022',  '#',],
                ['	Regular Activities Reports 1', '2021-2022',  '#',],

            ];
        }
        if ($type === 'ACADEMIC-ACTIVITIES') {
            $title = 'ACADEMIC ACTIVITIES';
            $folderName = 'activities';
            $tableHeader = ['	Academic Activities', 'Year'];
            $tableData = [
                ['  Academic Activities Report', '2023-24',  'ACADEMIC COMMITTEE REPORT 23-24'],
                ['	Academic Activities Report', '2022-23',  'ACADEMIC COMMITTEE REPORTS 22-23'],
                ['	Academic Activities Report', '2021-22',  'ACADEMIC COMMITTEE REPORT 2021-22'],
                ['	Academic Activities Report', '2020-21',  '#',],
                ['	Academic Activities Report', '2019-20',  '#',],
            ];
        }
        if ($type === 'EXPERIENTIAL-LEARNING') {
            $title = 'EXPERIENTIAL LEARNING';
            $folderName = 'activities';
            $tableHeader = ['	Experiential Learning Report', 'Year'];
            $tableData = [
                ['Experiential Learning Report', '2023-24',  'Experiential Learning 2023-24'],
                ['Experiential Learning Report', '2022-23',  'EXPERIENTIAL LEARNING 2022-23'],
            ];
        }
        if ($type === 'CONFERENCES-SEMINARS-WORKSHOPS') {
            $title = 'CONFERENCES REPORTS';
            $folderName = 'activities';
            $tableHeader = ['Conferences Report', 'Year'];
            $tableData = [
                ['  National Webinar plastic report-23-24', '',  'NATIONAL WEBINAR-PLASTIC REPORT-23-24'],
                ['  Report National Seminar NANO-23-24', '',  'REPORT NATIONAL SEMINAR-NANO-23-24'],
                ['  IQAC FDP Report 23-24', '',  'IQAC-FDP REPORT23-24'],
                ['  Anti Drugs Report 23-24', '',  'ANTI-DRUGS REPORT23-24'],
                ['	IQAC Webinar', '',  'IQAC webinar'],
                ['	International Conference', '',  'International Conference'],
                ['	COVID webinar', '',  'COVID webinar'],
                ['	National webinar Report', '',  'NATIONAL WEBINAR JUNE 21 REPORT'],
                ['	National workshop Report', '',  'NATIONAL WORKSHOP NOV 21 REPORT'],
                ['	CAREER COUNSELLING WEBINAR Report', '',  'CAREER COUNSELLING WEBINAR MAY 22 REPORT'],
                ['  Chemistry Two Days Workshop Report', '',  'REPORT EXPERIENTIAL CHEMISTRY WORKSHOP 22-23'],
                ['	Science One Day Workshop Report', '', '#',],

            ];
        }
        if ($type === 'WOMEN-GRIEVANCE-REDRESSAL-CELL') {
            $title = 'WOMEN GRIEVANCE REDRESSAL CELL';
            $folderName = 'activities';
            $tableHeader = [];
            $tableData = [];
        }
        return view('activities', compact('title', 'tableHeader', 'tableData', 'type', 'folderName'));
    }
    public function report( $type)
    {
        if ($type === 'COLLEGE-ANNUAL-REPORTS') {
            $title = 'ANNUAL REPORTS';
            $tableHeader = ['Annual Report', 'Year'];
            $folderName = 'annualReport';

            $tableData = [
                ['	Annual report', '2023-24',  'Annual Report 2023-24'],
                ['	Annual report', '2022-23',  'Annual Report 2022-23'],
                ['	Annual report', '2021-22',  'Annual Report 2021-22'],
                ['	Annual report', '2020-21',  'ANNUAL REPORT 2020-21'],
                ['	Annual report', '2019-20',  'Annual  Report  2019-20'],
                ['	Annual report', '2018-19',  'Annual Report 2018-19'],
                ['	Annual report', '2017-18',  'Annual  Report  2017-18'],
                ['	Annual report', '2016-17',  'Annual Report 2016-17'],
            ];
        }
        elseif($type ==='STUDENTS-SATISFACTION-SURVEY'){
            $title = 'STUDENTS SATISFACTION SURVEY';
            $tableHeader = ['	Students Satisfaction Survey', 'Year'];
            $folderName = 'annualReport';
            $tableData = [
                ['	Students Satisfaction Survey Report', '2023-24',  'Student Satisfaction Survey(2023-24)'],
                ['	Students Satisfaction Survey Report', '2022-23',  'Student Satisfaction Survey(2022-23)'],
                ['	Students Satisfaction Survey Report', '2021-22',  'Student Satisfaction Survey (2021-2022)'],
                ['	Students Satisfaction Survey Report', '2020-21',  'Students Satisfaction Survey'],
                ['	Students Satisfaction Survey Report', '2019-20',  'Student Satisfaction Survey(2022-23)'],


            ];
        }
        elseif($type ==='STUDENTS-FEEDBACK-SURVEY'){
            $title = 'STUDENTS FEEDBACK';
            $tableHeader = ['Students Feedback', 'Year'];
            $folderName = 'annualReport';
            $tableData = [
                ['Students Feedback_2023_24_Report', 'Yearly Status Report - 2023-24',  'STUDENTS FEEDBACK 23-24'],
                ['Students Feedback_2022_23_Report', 'Yearly Status Report - 2022-23',  'Students Feedback 22-23'],
                ['Students Feedback_2021_22_Report', 'Yearly Status Report - 2021-22',  'Student Feedback 21-22'],
                ['Students Feedback_2020_21_Report', 'Yearly Status Report - 2020-21',  'Students feedback 2020-21'],
                ['Students Feedback_2019_20_Report', 'Yearly Status Report - 2019-20',  'Students Feedback 2019-20'],


            ];
        }
        elseif($type ==='TEACHERS-FEEDBACK-SURVEY'){
            $title = 'TEACHERS FEEDBACK SURVEY';
            $tableHeader = ['Teachers Feedback Survey', 'Year'];
            $folderName = 'annualReport';
            $tableData = [
                ['	Teachers Feedback_2023_24_Survey Report', 'Yearly Status Report - 2023-24',  'TEACHERS FEEDBACK 23-24'],
                ['	Teachers Feedback_2022_23_Survey Report', 'Yearly Status Report - 2022-23',  'Teachers Feedback 22-23'],
                ['	Teachers Feedback_2021_22_Survey Report', 'Yearly Status Report - 2021-22',  'Teacher Feedback 21-22'],
                ['	Teachers Feedback_2020_21_Survey Report', 'Yearly Status Report - 2020-21',  'Teachers Feedback 2020-21'],
                ['	Teachers Feedback_2019_20_Survey Report', 'Yearly Status Report - 2019-20',  'Teachers Feedback 2019-20'],


            ];
        }

        return view('reports', compact('title', 'tableHeader', 'tableData' , 'folderName'))->with('type', $type);
    }
    public function naac( $type)
    {
        $folderName = '';
        if ($type === 'college-ssr') {
            $title = 'College SSR';
            $tableHeader = ['SSR Reports', 'Year'];
            $folderName = 'naac';
            $tableData = [
                ['SSR Report', '2017-2022',  'SSR  2017-22',],
                ['SSR Report', '2012-2017',  'College SSR',],
            ];
        }


        elseif ($type === 'COLLEGE-AQAR') {
            $title = 'THE ANNUAL QUALITY ASSURANCE REPORT (AQAR)';
            $tableHeader = ['The Annual Quality Assurance Report', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['NAAC AQAR Report', 'Yearly Status Report - 2022-23',  'AQAR-Report-2022-23'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2021-22',  'AQAR 2021-22'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2020-2021',  'AQAR 2020-21'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2019-2020',  'naac_2019_20_aqar_report'],
                ['NAAC AQAR Report', 'Yearly Status Report - 2018-2019',  'naac_2018_19_aqar_report'],
                ['NAAC AQAR Report', 'Yearly status report 2017-2018',  'aqar'],
                ['NAAC AQAR Report', 'Yearly status report 2016-17',  'Aqar Report  2016-17'],
            ];
        }
        elseif ($type === 'college-aqar-data') {
            $title = 'COLLEGE AQAR DATA';
            $tableHeader = [];
            $tableData = [];
        }
//        elseif ($type === 'college-ssr') {
//            $title = 'NAAC SSR REPORTS';
//            $tableHeader = [];
//            $tableData = [];
//        }
           elseif ($type === 'college-sar') {
            $title = 'NAAC SAR REPORTS';
            $tableHeader = [];
            $tableData = [];
        }
        elseif ($type === 'NIRF') {
            $title = 'NIRF';
            $tableHeader = ['NIRF','Year'];
            $folderName = 'naac';
            $tableData = [['NIRF', '2023-24', 'nirf 2023-24']];
        }
        elseif ($type === 'BEST-PRACTICES') {
            $title = 'BEST PRACTICES';
            $tableHeader = ['Best Practices', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['Best Practices', '2023-24',  '7.2.1 Best Practices Report (2023-24)'],
                ['Best Practices', '2022-23',  '7.2.1 Best Practices Report (2022-23)'],
                ['Best Practices', '2021-22',  '7.2.1 Best Practices'],
            ];
        }
        elseif ($type === 'COMPOSITION') {
            $title = 'COMPOSITION';
            $tableHeader = ['Composition', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['Composition', '2023-24',  'IQAC Committee 2023-24'],
                ['Composition', '2022-23',  'IQAC 2022'],
                ['Composition', '2021-22',  'IQAC 2021-22'],
                ['Composition', '2020-21',  'IQAC 2020-21'],
                ['Composition', '2019-20',  'IQAC 2019-20'],
            ];
        }
        elseif ($type === 'MEETINGS') {
            $title = 'MEETINGS';
            $tableHeader = ['Meetings', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['Meetings', '2023-24',  'IQAC Meeting Minutes 2023-24'],
                ['Meetings', '2022-23',  'IQAC MEETINGS 2022-23'],
                ['Meetings', '2021-22',  'IQAC MEETINGS 21-22'],
                ['Meetings', '2020-21',  'IQAC Meeting 2020-21'],
                ['Meetings', '2019-20',  'IQAC Meetings 2019-20'],
                ['Meetings', '2018-19',  'IQAC Meeting  2018-19'],
                ['Meetings', '2017-18',  'IQAC_Meetings 2017-18'],
            ];
        }
        elseif ($type === 'MEETINGS-OUTCOMES') {
            $title = 'MEETING OUTCOME';
            $tableHeader = ['IQAC Meeting Outcome', 'Year'];
            $folderName = 'naac';
            $tableData = [
                ['Outcome', '2022-23',  'OUTCOME REPORT 22-23'],
                ['Outcome', '2021-22',  'Outcome Report  2021-22'],
                ['Outcome', '2020-21',  'OUTCOMES 2020-21'],
                ['Outcome', '2019-20',  'OUTCOMES 2019-20'],
            ];
        }
        elseif ($type === 'ACTION-TAKEN-REPORT') {
            $title = 'IQAC ACTION TAKEN REPORT';
            $tableHeader = ['Report', 'Year'];
            $folderName = 'naac';

            $tableData = [
                ['	Action taken report', '2023-24',  'Action Taken Report, IQAC 2023-24'],
                ['	Action taken report', '2022-23',  'IQAC ACTION TAKEN REPOER 2022-23'],
                ['	Action taken report', '2021-22',  'ACTION TAKEN REPORT 21-22'],
            ];
        }
        if ($type === 'institutional-distinctiveness') {
            $title = 'INSTITUTIONAL DISTINCTIVENESS';
            $tableHeader = [];
            $tableData = [];
        }
        return view('naac', compact('title', 'type', 'tableHeader', 'tableData'), compact('folderName'));
    }
    public function admissionPages($type,$folder,$file)
    {
        $filePath = asset('assets/pdf/'.$folder.'/'.$file.'.pdf');
        return view('admissionPages',)->with('filePath', $filePath)->with('type', $type);
    }
    public function nirf( $type)
    {
#         $folderName = '';
            if ($type === 'NIRF') {
            $title = 'NIRF';
            $tableHeader = ['NIRF','Year'];
            $folderName = 'nirf';
            $tableData = [['NIRF data', '2025', 'nirf 2025']];
        }
                return view('nirf', compact('title', 'type', 'tableHeader', 'tableData', 'folderName'));
    }
    public function alumni( $type)
    {
        $folderName = '';
        if ($type === 'ALUMNI-CHARTER') {
            $title = 'ALUMNI CHARTER';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'registration') {
            $title = 'REGISTRATION';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'studentComplaint') {
            $title = 'STUDENT COMPLAINT';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'OUR-ALUMNI') {
            $title = 'OUR ALUMNI';
            $tableHeader = [];
            $tableData = [];
        }
        if ($type === 'ALUMNI-FEEDBACK') {
            $title = 'ALUMNI FEEDBACK';
            $folderName = 'alumni';
            $tableHeader = [ 'Alumni Feedback', 'Year'];
            $tableData = [
                ['Alumni Feedback_2023-24_Report', 'Yearly Status Report - 2023-24','ALUMNI FEEDBACK 23-24'],
                ['Alumni Feedback_2022-23_Report', 'Yearly Status Report - 2022-23','Alumni Feedback 22-23'],
                ['Alumni Feedback_2021-22_Report', 'Yearly Status Report - 2021-22','Alumni Feedback 21-22'],
                ['Alumni Feedback_2020-21_Report', 'Yearly Status Report - 2020-21','Alumni feedback 2020-21'],
                ['Alumni Feedback_2019_20_Report', 'Yearly Status Report - 2019-20','https://www.lbsgcsnagar.edu.in/pdf/Alumni%20Feedback.pdf'],
            ];
        }
        if ($type === 'feedbackSurvey') {
            $title = 'Feedback Survey';
            $folderName = 'alumni';
            $tableHeader = [ 'Feedback', 'Link to the Questionnaire'];
            $tableData = [
                ['Student Feedback', '#','#'],
                ['Faculty Feedback', '#','#'],
                ['Alumni Feedback', '#','#'],
                ['Parents Feedback', '#','#'],
            ];
        }


        return view('alumni', compact('title', 'type', 'tableHeader', 'tableData', 'folderName'));
    }

     public function osa(){
        $osaList = OSARegistration::orderBy('created_at', 'desc')->get();
        return view('osaRegistrationData')->with('osaList', $osaList);
    }

    public function studentComplains(){
        $complains = StudentComplain::orderBy('created_at', 'desc')->get();
        return view('studentComplains')->with('complains', $complains);
    }

    public function updateStatus(Request $request){
        $complain = StudentComplain::find($request->id);
        $complain->status = $request->status;
        $complain->remark = $request->remark;
        $complain->save();

        Mail::to($complain->email)->send(new ComplainStatusUpdateMail($complain));
        return redirect()->back();
    }


}
