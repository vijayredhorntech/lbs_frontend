@extends('Layouts.layout')
@section('content')
    <div class="w-full flex flex-col items-center lg:pt-[200px] md:pt-[200px] pt-[100px] relative pb-4 px-4">
        <img class=" lg:h-[300px] md:h-[300px] h-[120px] w-full object-cover z-10 absolute top-0 left-0"
             src="{{asset('assets/images/administration/campus.jpg')}}">
        <div class="w-full lg:h-[300px] md:h-[300px] h-[120px]   bg-black/60 absolute top-0 left-0 z-10">
        </div>
        <div class="lg:w-[40%] w-full z-20 flex flex-col-reverse gap-4">
            <div class=" w-full bg-white  py-4 px-4">
                <div class="w-full flex flex-col items-center p-4 relative">
                    <div class=" w-full bg-white shadow-lg shadow-gray-300 rounded-md z-20">
                        <div class="w-full rounded-md p-4 shadow-lg shadow-gray-300" style="background-color: whitesmoke">
                            @if (session()->has('error'))
                                <div class="mb-4 text-green-800">
                                    * {{ session('error') }}
                                </div>
                            @endif

                                <form {{route('login')}} method="post" class="grid lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 grid-cols-1 gap-2">
                                    @csrf

                                    <div class="mb-4 w-full">
                                        <label class="block mb-2 text-sm font-semibold" for="email">Email</label>
                                        <input type="email" name="email" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Email" />
                                        @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-4 w-full">
                                        <label class="block mb-2 text-sm font-semibold" for="name">Password</label>
                                        <input type="password" name="password" class="w-full p-3 text-sm border border-[1px] border-darkTheme text-darkText placeholder-darkTheme rounded shadow focus:outline-none focus:shadow-outline" placeholder="Password" />
                                        @error('password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="mb-4 w-full ">
                                        <button class="w-full p-3 font-bold text-white bg-darkTheme rounded-full focus:outline-none" type="submit">
                                            Login
                                        </button>
                                    </div>
                                </form>

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection

