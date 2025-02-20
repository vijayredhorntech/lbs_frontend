@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center pt-[200px]  relative pb-4">
        <img class=" h-[300px] w-full object-cover z-10 absolute top-0 left-0" src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full h-[300px] bg-black/60 absolute top-0 left-0 z-10">

        </div>

        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-4 rounded-t-md">
                <span>
                    Parent Teacher Association
                </span>
            </div>
            <div class="w-full p-4">


                <p class=" text-black font-bold text-md">Parent Teacher Association</p>
                <p class=" mt-4 text-darkText italic text-md">The Parent Teacher Association (P.T.A.) is a formal organization composed of parents and teachers that is
                    intended to facilitate parental participation in an institution. It is a mandatory association in Affiliated Higher
                    Education institutions. Parent Teacher Association of the College is an active body giving constant support in all
                    the ventures of the college in academic, non-academic as well as infrastructural development. Under PTA’s
                    patronage and whole hearted co-operation all developments within the academic and non- academic area take
                    place. The PTA Executive Council meets at regular intervals and the annual general body meets offer venues of
                    sharing and interaction.
                </p>
                <p class="mt-8 text-black font-bold text-md">Parent Teacher Association</p>
                <table class="border-black border-[1px] border-collapse mt-8 w-full">
                    <tr>
                        <td class="border-[1px] border-black font-bold text-black p-2" colspan="2">OFFICE BEARERS</td>
                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-bold text-black p-2" >Sr. No.</td>
                        <td class="border-[1px] border-black font-bold text-black p-2" >Name</td>
                        <td class="border-[1px] border-black font-bold text-black p-2">Designation</td>
                        <td class="border-[1px] border-black font-bold text-black p-2">Contact No</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >1</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Satya Dev </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">President</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9805147825</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >2</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Pushpa Ranta </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">VicePresident</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9816520794</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >3</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Prof. Vijay Laxmi </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Secretary</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9805205680</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >4</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Manoj Sharma</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Joint Secretary</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9805050686</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >5</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Roshani</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Treasurer</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9418057275</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >6</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Prof. Sandeep Kumar</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Auditor</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9816433831</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >7</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Kamal Chand</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Chief Advisor</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9459363699</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-bold text-black p-2" colspan="2">MEMBERS</td>
                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                        <td class="border-[1px] border-black font-bold text-black p-2"></td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >8</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Prof. Preeti</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9418209261</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >9</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Dr. Harash Bhardwaj</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">8219898735</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >10</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Dr. Rohit Mokta</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9418072446</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >11</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Vijaylaxmi </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">759600779</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >12</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs. Sangeeta </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">8626959305</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >13</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mrs.Lalita Sharma</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">8894942121</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >14</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Hira Lal </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9418626826</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >15</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Inder Das </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">9816647922</td>
                    </tr>
                    <tr>
                        <td class="border-[1px] border-black font-medium text-black p-2" >16</td>
                        <td class="border-[1px] border-black font-medium text-black p-2" >Mr. Surender Negi </td>
                        <td class="border-[1px] border-black font-medium text-black p-2">Member</td>
                        <td class="border-[1px] border-black font-medium text-black p-2">8894936791</td>
                    </tr>


                </table>

            </div>

        </div>

    </div>
@endsection
