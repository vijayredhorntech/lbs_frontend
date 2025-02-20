<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body style="background-color: whitesmoke">
<div class="w-full bg-lightTheme h-max lg:flex  md:flex hidden justify-center mt-2 p-2">
    <div class="lg:w-70 md:w-90 w-full flex justify-end ">
        <div class="text-black text-sm font-normal w-max flex justify-center col-span-2">
            <ul class="flex gap-2 text-darkText">
                <a href="https://lbsgcsnagar.highalteducation.in" target="_blank">
                    <li class="border-r-[1px] border-black pr-2 italic underline">
                        Online Admission 2023-24
                    </li>
                </a>
                <a href="{{asset('assets/pdf/covid.pdf')}}" target="_blank">
                    <li class=" text-danger border-black pr-2 font-semibold">
                        Covid-19 Guidelines
                    </li>
                </a>

            </ul>
        </div>
    </div>
</div>

<div class="w-full lg:h-36 md:h-32 sm:h-28 h-20 flex  justify-center px-2 pb-2">
    <img class="h-full w-auto" src="{{asset('assets/images/logo.png')}}" alt="">
</div>


<div class="w-full sticky top-0 z-50">
    <div
        class="bg-darkTheme w-full flex flex-col justify-center lg:items-center md:items-center items-start gap-2 relative px-2">
        <div class="w-max h-max lg:hidden md:hidden flex">
            <i id="toggleButton"
               class="fa-solid fa-bars  ml-1 text-lg text-lightTheme p-2 rounded-sm hover:bg-lightTheme hover:text-darkTheme transition ease-in duration-2000"
               onclick="
            let menuList = document.getElementById('menuList');
            if(menuList.classList.contains('hidden')){
                menuList.classList.remove('hidden');
            }else{
                menuList.classList.add('hidden');
            }
            " aria-hidden="true"></i>
        </div>
        <ul class="lg:flex md:flex hidden lg:flex-row md:flex-row flex-col text-lightTheme" id="menuList">
            <a href="https://gcharipurdhar.edu.in">
                <li class="py-2.5 hover:bg-lightTheme hover:text-darkTheme px-8 transition ease-in duration-2000">
                    Home
                </li>
            </a>
            <a href="javascript:void(0)">
                <li class="relative py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-8 transition ease-in duration-2000 group  items-center">
                    <a href="javascript:void(0)">
                        Administration
                        <i class="fa-solid fa-caret-right ml-1 text-sm group-hover:rotate-90 transition ease-in duration-2000"
                           aria-hidden="true"></i>
                    </a>
                    <ul class="lg:absolute md:absolute static left-0 top-10 z-20 hidden group-hover:block bg-darkTheme text-lightTheme">

                        <a href="https://gcharipurdhar.edu.in/principalMessage">
                            <li class="w-[250px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                Principal's Message
                            </li>
                        </a>

                        <a href="javascript:void(0)">
                            <li class="w-[250px] py-2.5 lg:hover:bg-lightTheme  md:hover:bg-lightTheme lg:hover:text-darkTheme md:hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed relative group/items justify-between">
                                <a href="javascript:void(0)">
                                    <span> Academic Staff</span>
                                    <i class="fa-solid fa-caret-right ml-1 text-sm absolute right-2 top-2 lg:group-hover/items:rotate-0 md:group-hover/items:rotate-0 group-hover/items:rotate-90  transition ease-in duration-2000"
                                       aria-hidden="true"></i>
                                </a>
                                <ul class="lg:absolute md:absolute static left-[250px] top-0 hidden group-hover/items:block bg-darkTheme text-lightTheme">
                                   <a href="https://gcharipurdhar.edu.in/sciencestaff">
                                        <li class="w-[200px] py-2.5 hover:bg-lightTheme hover:text-darkTheme px-4 transition ease-in duration-2000 border-b-[1px] border-white border-dashed">
                                            Science Staff
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </a>

                    </ul>

                </li>
            </a>


        </ul>
    </div>
</div>
</body>
</html>
