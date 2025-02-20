<?php

namespace App\Http\Controllers;

class FacilityController extends Controller
{
    public function facility($type)
    {
        if ($type === 'LIBRARY') {
            $title = 'LIBRARY';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Library']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>
                      </div>' . '

                       <p class="mt-4 text-black  font-bold text-md">LIBRARY</p>
                       <p class="mt-2 text-darkText italic text-md">The college has a voluminous and spacious Library which caters to the educational and
recreational needs of the students as well as the staff. It has about 11,716 books on different
subjects. It subscribes to 6 newspapers and 18 periodicals to facilitate the students and
staff members. The college is also member of Inflibnet Ahmedabad.</p>
                       <img src="' . asset('assets/images/facility/library/1.png') . '" alt="" class="rounded-md mt-2">

                       <p class="mt-4 text-darkText italic text-md">The Library was equipped with new seating infrastructure during 2019-20.</p>
                       <img src="' . asset('assets/images/facility/library/2.png') . '" alt="" class="rounded-md mt-2">
                       <p class="mt-4 text-darkText italic text-md">358 new books were added during the session with more emphasis on books for
competitive exams.</p>
                       <img src="' . asset('assets/images/facility/library/3.png') . '" alt="" class="rounded-md mt-2">


                 ';
        }

        if ($type === 'ITLAB') {
            $title = 'IT LAB';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'IT lab']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <p class="mt-4 text-black  font-bold text-md">IT Lab</p>
                       <p class="mt-2 text-darkText italic text-md">India\'s IT industry is robust and continues to see growth like the previous decades. According to
surveys by multiple agencies, the industry has kept on growing by billions of dollars each year.
            IT has been a strong contributor to the country\'s socio-economic prosperity, and provides lakhs
of jobs every year. Much of the IT industry in India is active in building softwares, knowledge
and business process outsourcing sectors. IEBF states that foreign companies prefer to
outsource their IT needs to India due to its combination of skilled workers and competitive costs.
India\'s biggest IT companies include Tata Consultancy Services, Infosys, Wipro and HCL
Technologies, and some of the country\'s major technology hubs are Chennai, Hyderabad,
Delhi, Mumbai and Bangalore, which is widely known as "The Silicon Valley of India."
Due to shrinking of the government sector and in the wake of privatisation, besides involvement
of IT knowledge in public sector services, the relevance of IT education has grown manifold.
Since our college is located in the rural hilly region, the college provides an opportunity to the
students of the region to receive education in the field of Information Technology so that they
can also compete in the job market pertaining to the IT sector. Beside BCA & PGDCA , We
provide Add-on Certificate, Diploma and Advance Diploma in Computer Application .
LBS Govt Degree College Saraswati Nagar has a well furnished IT lab with modern equipped
terminals loaded with high-end soft-wares pertaining to the curriculum. The lab is properly
ventilated, has a power backup facility and has been professionally set. The campus is Wi-Fi
enabled. We have 30 computers with latest configurations; networked with high speed
broadband internet access. The network connectivity has been extended to the computer lab,
the college library, the class rooms, respective faculty rooms and the office. We have been
trying our level best so that our students do not lag behind in computer education and come at
par with students from cities in terms of IT related knowledge.</p>
                       <img src="' . asset('assets/images/facility/itLab/1.png') . '" alt="" class="rounded-md mt-2">


                 ';
        }

        if ($type === 'ICT') {
            $title = 'ICT';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                         <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'ICT Enabled Facilities']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                      <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-2">
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/4.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/5.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/6.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/7.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/8.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/9.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/10.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/11.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/12.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/13.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/14.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/15.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                            <div class="w-full h-[500px]">
                                <img src="' . asset('assets/images/facility/ict/16.jpg') . '" alt="" class="rounded-md mt-2 w-full h-full object-cover">
                             </div>
                    </div>



                 ';
        }

        if ($type === 'LANGUAGE-LAB') {
            $title = 'LANGUAGE LAB';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Language lab']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <p class="mt-4 text-black  font-bold text-md">LANGUGAE LAB</p>
                       <p class="mt-2 text-darkText italic text-md">LANGUGAE LAB: LBS. Govt Degree College Saraswati Nagar has a well equipped Language Lab. The
Lab was set-up to improve the English language skills of the students. It focuses specifically on the
listening and speaking skill of the participating students . The Lab consist of a teacher controlled system
connected to 15 student desktops that have attached headsets with microphones. Through their individual
systems each of the percipient can access the audio visual content controlled and delivered by the teacher.
The language Lab provides each student the opportunity to work, at their own pace, on betterment of their
English language skill.</p>
                       <p class="mt-2 text-darkText italic text-md">Currently the lab taters to the needs of 40 enrolled students.</p>
                       <img src="' . asset('assets/images/facility/ll.png') . '" alt="" class="rounded-md mt-2">


                 ';
        }

        if ($type === 'SCIENCE-LABORATORIES') {
            $title = 'SCIENCE LABORATORIES';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'SCIENCE LABORATORIES']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <p class="mt-4 text-black  font-bold text-md">BOTANY DEPARTMENT:</p>
                       <p class="mt-2 text-darkText italic text-md"> One well equipped laboratory.</p>
                       <p class="mt-2 text-darkText italic text-md"> Instruments: - Microtome , Autoclave, Centrifuge, Spectrophotometer, Trinocular
Microscopewith LCD display, Student microscopes, K-yan , OHP, Models and display
charts etc.</p>
                       <p class="mt-2 text-darkText italic text-md"> Herbarium.</p>
                       <img src="' . asset('assets/images/facility/scienceLab/1.png') . '" alt="" class="rounded-md mt-2">


                       <p class="mt-4 text-black  font-bold text-md">CHEMISTRY DEPARTMENT:</p>
                       <p class="mt-2 text-darkText italic text-md"> Laboratory No. 1 with Apparatus and Instruments including, Digital Conductivity
Meter, Digital Photo Colorimeter, Digital Potentiometer, pH Meter, UV Observation
Instrument, Kohlrausch Conductivity Bridge, Double Distillation Unit, Heating Rota
Mantle, Water Bath, Centrifugation Machine, Polarimeter, Digital Colorimeter, Magnetic
Stirrer with Hot Plate, Conductivity Bridge, Thermodynamic Isolated System,
UV/Visible Spectrophotometer, Digital Weighing Balance, Vacuum Filteration Unit,
Column Chromatography Assembly, Hot Air Oven, Melting Point Apparatus, Thin Layer
Chromatography Units.</p>
                       <img src="' . asset('assets/images/facility/scienceLab/2.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/scienceLab/3.png') . '" alt="" class="rounded-md mt-2">
                        <p class="mt-4 text-darkText italic text-md"> Laboratory No. 2 with Apparatus and Instruments, Glassware and Other Apparatus.</p>
                       <img src="' . asset('assets/images/facility/scienceLab/4.png') . '" alt="" class="rounded-md mt-2">


 <p class="mt-4 text-black  font-bold text-md">PHYSICS DEPARTMENT:</p>
                       <p class="mt-2 text-darkText italic text-md">All the necessary apparatus for conducting Physics experiments mentioned in the University
syllabus.
</p>
                       <p class="mt-2 text-darkText italic text-md">A separate dark room is available in the Physics Department for experiments requiring dark
conditions.</p>
                       <img src="' . asset('assets/images/facility/scienceLab/5.png') . '" alt="" class="rounded-md mt-2">


 <p class="mt-4 text-black  font-bold text-md">ZOOLOGY DEPARTMENT:</p>
                       <p class="mt-2 text-darkText italic text-md">One well equipped laboratory</p>
                       <p class="mt-2 text-darkText italic text-md">Instruments: Trinocular Microscope with camera, binocular light microscopes, simple
microscopes, OHP, Models & Charts, Specimens, Sphygmomanometer, Digital Interactive
Board, Glasswares and Other Apparatus etc.</p>
                       <img src="' . asset('assets/images/facility/scienceLab/6.png') . '" alt="" class="rounded-md mt-2">










                 ';
        }

        if ($type === 'SEMINAR-HALL') {
            $title = 'SEMINAR HALL';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                         <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Seminar Hall']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <img src="' . asset('assets/images/facility/sh1.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/sh2.png') . '" alt="" class="rounded-md mt-2">

                 ';
        }

        if ($type === 'SPORTS') {
            $title = 'SPORTS';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                     <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Sports']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <img src="' . asset('assets/images/facility/sp1.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/sp2.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/sp3.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/sp4.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/sp5.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/sp6.png') . '" alt="" class="rounded-md mt-2">

                 ';
        }

        if ($type === 'GYMNASIUM') {
            $title = 'GYMNASIUM';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Gymnesium']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <img src="' . asset('assets/images/facility/g1.png') . '" alt="" class="rounded-md mt-2">
                       <img src="' . asset('assets/images/facility/g2.png') . '" alt="" class="rounded-md mt-2">

                 ';
        }

        if ($type === 'HEALTH-ROOM') {
            $title = 'HEALTH ROOM';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                         <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'HEALTH AID ROOM']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                        <p class="mt-2 text-darkText italic text-md">The College has a well-equipped medical room with one bed. It is equipped with basic health
and care facilities. First aid facilities, a wheel chair, Stretcher, a blood pressure machine,
glucose monitor, oximeter, thermostat are available in this medical room. The first aid facility
is given to the needed students in case of emergencies in the college premises. In case of any
emergency, the student is rushed to a nearby hospital immediately.
</p>

                       <img src="' . asset('assets/images/facility/hr1.png') . '" alt="" class="rounded-md mt-2">

                 ';
        }

        if ($type === 'CANTEEN') {
            $title = 'CANTEEN';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                        <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Canteen']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                        <p class="mt-2 text-darkText italic text-md">Canteen is undoubtedly such an important part of any college campus that it is not at all an
exaggeration to say that it is as significant as the classrooms or the auditorium. One can rather
say that a canteen is more happening and lively than any other part of a college. Canteens are
the place where friendships start and hostilities end. Time spent at the canteen gives rise to
ideas for assignments, projects, and planning for parties and vacations. There is no way such
an important place can be taken lightly and it is for the same reason that LBS Govt College
Saraswati Nagar has ensured that standards of our canteen stays upto the mark.</p>
                        <p class="mt-2 text-darkText italic text-md">The college has provided a canteen facility to the students as well as teaching and non-teaching
staff of the college; it is capable of catering the demands of the students and can accommodate
around 35 people at a time. It has a spacious and properly maintained room as well as kitchen.
Generally, the college provides it to any individual on contract basis after proper official
formalities. The College canteen also caters to the functions organized in the college
programmes like seminars, conferences , annual function , sports meet and workshops.
Canteen staff takes care to provide the students and staff a nutritious and hygienic food at our
campus canteens. A variety of food and snack items includes Indian meals, Chinese foods,
fresh juices, etc. Our administration checks from time to time that level of food and hygiene in
canteen remains high.</p>
                 ';
        }

        if ($type === 'HOSTEL') {
            $title = 'HOSTEL';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                       <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Hostel Facilities']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                        <p class="mt-2 text-darkText italic text-md">The college has a well-furnished Girls\' Hostel with capacity to accommodate
105 students. Each hostel room is comfortably furnished with cots, chairs,
study tables, and individual lockable cupboards for storage. The hostel is
            provided with all basic facilities.</p>
                       <img src="' . asset('assets/images/facility/hostel1.png') . '" alt="" class="rounded-md mt-2">
                        <p class="mt-2 text-darkText italic text-md">The spacious common/TV room and adequate dining facilities are available for
all the hostellers. Students have sports/leisure activities i.e. Table Tennis,
Chess, Carrom board and other recreational
facilities within the hostel premises. </p>
                       <img src="' . asset('assets/images/facility/hostel2.png') . '" alt="" class="rounded-md mt-2">
                        <p class="mt-2 text-darkText italic text-md">Other Facilities</p>
                        <p class="mt-1 text-darkText italic text-md">* RO water purifier for drinking water</p>
                        <p class="mt-1 text-darkText italic text-md">* CCTV cameras at the entrance of the hostel </p>
                        <p class="mt-1 text-darkText italic text-md">* 24X7 water supply in hostel </p>
                        <p class="mt-1 text-darkText italic text-md">* Solar panels installed in the hostel for hot water</p>
                        <p class="mt-1 text-darkText italic text-md">* Solar lights </p>
                        <p class="mt-1 text-darkText italic text-md">* Sanitary napkin incinerator</p>
                        <p class="mt-1 text-darkText italic text-md">* Sanitary napkin vending machine</p>
                        <p class="mt-1 text-darkText italic text-md">* Food and Organic waste compost machine.</p>
                        <p class="mt-1 text-darkText italic text-md">* Hands free sanitizer dispenser machine. </p>
                        <p class="mt-1 text-darkText italic text-md">* Guest room for visiting parents/Guardians</p>
                        <p class="mt-1 text-darkText italic text-md">* Small Library for students.</p>


                 ';
        }

        if ($type === 'MAINTENANACE') {
            $title = 'MAINTENANACE';
            $pageContent =
                '
                    <div class="w-full flex justify-end">
                                          <a href="' . route('pdfViewer',['folder'=>'facility','file'=>'Procedures and Policies for MUPASF']) . '" class="text-xs font-semibold underline text-danger" target="_blank">View Document <i class="fa fa-angles-right"></i> </a>

                      </div>' . '

                       <p class="mt-4 text-black  font-bold text-md">Procedures and Policies for maintaining and utilizing Physical, Academic and Support facilities</p>
                        <p class="mt-2 text-darkText italic text-md">The college utilizes the available resources while following the guidelines communicated by the Govt. from
time to time. The finance available with the college is allocated on need basis for maintenance of such
facilities. All the work carried out is executed through various committees constituted for the purpose. The
following are the procedure adopted by the college for maintenance of physical, academic and support
facilities:
</p>

                       <p class="mt-4 text-black  font-bold text-md">College Purchase Committee:</p>
                        <p class="mt-2 text-darkText italic text-md"> This committee is constituted by the college every year. The committee take
care of all the requirements submitted in the office . The purchases are made mainly through GeM portal ,
however , the quotation procedure is followed for transparency and optimum budget utilization if some
local purchase is needed.</p>

                       <p class="mt-4 text-black  font-bold text-md">Building Fund Committee:</p>
                        <p class="mt-2 text-darkText italic text-md">The committee is constituted by college, including a technical person of JE or
above rank from PWD . The committee is got approved by the Directorate of Higher Education. The minor
repairs are carried by Building fund committee after having approved all these works in Building fund
committee meeting. However, if the nature of work requires a higher amount, an estimate is demanded from the
PWD and submitted to higher authorities for Budget. Cleanliness work of classrooms, corridors , toilets and
campus is routinely carried by sweepers appointed for this purpose. </p>

                       <p class="mt-4 text-black  font-bold text-md">Laboratories:</p>
                        <p class="mt-2 text-darkText italic text-md">The laboratory staff ensures that equipment are in good working conditions. The students are
sensitized and trained how to use laboratory equipment . All do’s and don’ts are explained to them. The
poster regarding explosive and dangerous chemical is also displayed in the lab. The support staff is always
there to help them . Minor repairs and calibration are carried at local levels; however, the person with
expertise are hired from other places for major </p>

                       <p class="mt-4 text-black  font-bold text-md">Library: </p>
                        <p class="mt-2 text-darkText italic text-md"> The library is open for students from 10.00am to 5.00pm. The students are free to use reference
books , periodicals and newspapers for reading at library. Beside this textbooks are issued to students as per
requirements –maximum of four. The stock verification of books is done annually. The old & worn out books
are weeded out after the recommendations of committee. The fund is also made available for binding of books</p>

                        <p class="mt-4 text-darkText italic text-md">The sports infrastructure is made available to the students throughout the day . The sports infrastructure and the
equipment in the gymnasium are well maintained from time to time, out of sports fund charged from the
students. All other facilities on the campus like RO’s, CCTV , Xerox machine and Solar lights are also
periodically checked and maintained</p>


                 ';
        }

        return view('facility', compact('title', 'pageContent', 'type'));
    }
}
