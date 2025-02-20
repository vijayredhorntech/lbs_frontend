@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px] relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[80%] w-full z-20 flex flex-col-reverse gap-4">
            <div class="w-full grid grid-cols-1 ">

                <div class="bg-darkTheme text-white px-4 py-2 rounded-t-md font-semibold">
                    Student Complains
                </div>
                <div class="w-full flex flex-col shadow-lg shadow-black/30 border-[1px] border-white rounded-b-md overflow-x-auto bg-white">
                    <div class="w-full bg-white lg:mt-0 md:mt-0 mt-4 lg:py-8 md:py-8 py-0 rounded-b-md">
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
                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Class
                                                    </th>
                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Roll Number
                                                    </th>
                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Contact Number
                                                    </th>

                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Email
                                                    </th>

                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Message
                                                    </th>

                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="px-4 py-2.5 border-[1px] border-darkTheme text-md font-bold text-left rtl:text-right text-darkText">
                                                        Remarks
                                                    </th>

                                                </tr>
                                                </thead>


                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach($complains as $complain)
                                                    <tr class="border-[1px] border-darkTheme">
                                                        <td class="px-4 py-1 text-sm text-darkTheme font-bold whitespace-nowrap border-[1px] border-darkTheme">{{$loop->iteration}}</td>
                                                        <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                            <h2 class="text-sm font-semibold text-darkTheme">{{$complain->name}}</h2>
                                                        </td>
                                                         <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                             <h2 class="text-sm font-semibold text-darkTheme">{{$complain->class}}</h2>
                                                         </td>
                                                         <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                             <h2 class="text-sm font-semibold text-darkTheme">{{$complain->roll_number}}</h2>
                                                         </td>
                                                         <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                             <h2 class="text-sm font-semibold text-darkTheme">{{$complain->phone_number}}</h2>
                                                         </td>
                                                         <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                             <h2 class="text-sm font-semibold text-darkTheme">{{$complain->email}}</h2>
                                                         </td>
                                                         <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                             <h2 class="text-sm font-semibold text-darkTheme">{{$complain->message}}</h2>
                                                         </td>
                                                        <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                            <form action="{{ route('updateStatus', $complain->id) }}" method="POST">
                                                                @csrf
                                                                <div class="flex flex-col">
                                                                    <select {{ $complain->status == 'resolved' ? 'disabled' : '' }} name="status" id="status_{{ $complain->id }}" class="border-[1px] border-darkTheme rounded-[3px] px-2 py-1" onchange="toggleFields({{ $complain->id }})">
                                                                        <option value="pending" {{ $complain->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                        <option value="resolved" {{ $complain->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                                                    </select>

                                                                    @if($complain->status == 'pending')
                                                                    <textarea name="remark" id="remark_{{ $complain->id }}" cols="30" rows="2" placeholder="Remark" class="border-[1px] border-darkTheme rounded-[3px] px-2 py-1 mt-2 {{ $complain->status == 'Resolved' ? 'hidden' : '' }}">{{ $complain->remark ?? '' }}</textarea>
                                                                    <input type="submit" value="Update Status" id="submit_{{ $complain->id }}" class="bg-darkTheme text-white px-2 py-1 rounded-[3px] cursor-pointer mt-2 {{ $complain->status == 'Resolved' ? 'hidden' : '' }}">
                                                                    @endif
                                                                </div>
                                                            </form>
                                                        </td>
                                                         <td class="px-4 py-1 text-sm whitespace-nowrap border-[1px] border-darkTheme">
                                                             <h2 class="text-sm font-semibold text-darkTheme">{{$complain->remark}}</h2>
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



