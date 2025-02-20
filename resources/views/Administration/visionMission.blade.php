@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>Vision & Mission</span>
            </div>
            <div class="w-full p-4">
                <p class=" mt-8 text-darkText  text-md">This college was established in July 1986 in a tough hilly terrain of Himachal Pradesh to cater to
                    the higher educational needs of the people of this area. This college was opened with the aim of
                    providing education to the students at their doorstep, enabling them to acquire Higher Education
                    with professional skills and confidence to face the world.</p>
                <p class=" mt-8 text-darkText  text-md">
                    <span class="text-black font-bold">Vision:</span> <span class="italic">“ To impart quality and value based education that empowers students to sift truth
                    from falsehood and to integrate the value of truth into their character”</span>

                </p>
                <p class=" mt-8 text-darkText  text-md">This institutional vision is derived from the motto – “Stayam Param Dhimahi” which
                    literally means Truth is supreme. The institution aims at providing a distinct environment
                    of excellence in education and inculcating in them human values like truthfulness, honesty,
                    hard work, character building, capacity building and social commitment . Thus the institution
                    aims at enhancing the skills and holistic development of the personality of the students.</p>
                <p class=" mt-8 text-black font-bold  text-md">Mission:</p>
                <p class=" mt-8 text-darkText  text-md ml-4">To provide quality higher education to the students residing at this tough hilly terrain
                    and to make them fit for global society.</p>
                <p class=" mt-8 text-darkText  text-md ml-4">To provide a fair chance to both the genders, poor and socially disadvantaged to attain
                    knowledge</p>
                <p class=" mt-8 text-darkText  text-md ml-4">To enable students to acquire various professional skills in order to increase the chances of
                    their employability.
                </p>
                <p class=" mt-8 text-darkText  text-md ml-4">To focus on the development of personality of students through curricular and extracurricular
                    activities</p>
                <p class=" mt-8 text-darkText  text-md ml-4">To sensitize the students towards various social concerns, human rights, gender issues and
                    environmental issues.</p>

            </div>

        </div>

    </div>
@endsection
