@extends('Layouts.layout')
@section('content')
    <img class=" h-[200px] w-full object-cover " src="{{asset('assets/images/gallery/47.jpg')}}">


    <div class="w-full flex flex-col items-center p-4  relative">
        <div class="absolute top-0 left-0 w-full h-24 bg-lightTheme z-10">

        </div>
        <div class="lg:w-[70%] md:w-[80%] w-full bg-white  shadow-lg shadow-gray-300  rounded-md z-20">
            <div class="w-full bg-darkTheme text-white font-bold text-xl p-2">
                <span>{{$title}}</span>
            </div>
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

        </div>
    </div>
@endsection
