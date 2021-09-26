@extends('layouts.app')


@section('container')

    <x-top-navbar/>

    <div class="h-full flex justify-center items-center mt-20  ">
        <div class="w-full h-8/12 flex relative">  
            {{-- vlny --}}
            <div class="w-full h-full pt-13 absolute">
                <div class="w-10/12 m-auto h-full">
                    <svg class="animate-backdrop rounded-3xl" width="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient"><stop offset="5%" stop-color="#002bdc66"></stop><stop offset="95%" stop-color="#ff000066"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,150 0,150 C 128.26794258373207,167.01435406698565 256.53588516746413,184.0287081339713 341,191 C 425.46411483253587,197.9712918660287 466.12440191387554,194.8995215311005 553,176 C 639.8755980861245,157.1004784688995 772.9665071770336,122.37320574162678 878,120 C 983.0334928229664,117.62679425837322 1060.0095693779904,147.60765550239236 1149,158 C 1237.9904306220096,168.39234449760764 1338.9952153110048,159.1961722488038 1440,150 C 1440,150 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150" transform="rotate(-180 720 300)"></path><defs><linearGradient id="gradient"><stop offset="5%" stop-color="#002bdc88"></stop><stop offset="95%" stop-color="#ff000088"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,300 0,300 C 97.77033492822966,321.1961722488038 195.54066985645932,342.39234449760767 285,344 C 374.4593301435407,345.60765550239233 455.6076555023924,327.6267942583732 554,306 C 652.3923444976076,284.3732057416268 768.0287081339712,259.10047846889955 878,252 C 987.9712918660288,244.89952153110045 1092.2775119617224,255.9712918660287 1185,267 C 1277.7224880382776,278.0287081339713 1358.8612440191387,289.0143540669857 1440,300 C 1440,300 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150" transform="rotate(-180 720 300)"></path><defs><linearGradient id="gradient"><stop offset="5%" stop-color="#002bdcff"></stop><stop offset="95%" stop-color="#ff0000ff"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,450 0,450 C 101.69377990430621,430.3636363636364 203.38755980861242,410.7272727272727 307,412 C 410.6124401913876,413.2727272727273 516.1435406698564,435.4545454545455 612,431 C 707.8564593301436,426.5454545454545 794.0382775119617,395.4545454545454 890,408 C 985.9617224880383,420.5454545454546 1091.7033492822968,476.7272727272728 1185,491 C 1278.2966507177032,505.2727272727272 1359.1483253588517,477.6363636363636 1440,450 C 1440,450 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" class="transition-all duration-300 ease-in-out delay-150" transform="rotate(-180 720 300)"></path></svg>
                </div>
            </div>

            <div class="absolute -top-12  left-20  ">
                <div class="w-32 h-32 relative rounded-full shadow-out  sh bg-blue- flex justify-center items-center ">
                    <div class="w-20 h-20 rounded-full shadow-insetSmaller"></div>
                </div>
            </div>
            <div class="absolute -bottom-12  left-20  ">
                <div class="w-32 h-32 relative rounded-full shadow-out  flex justify-center items-center ">
                    <div class="w-20 h-20 rounded-full shadow-inset"></div>
                </div>
            </div>

            <div class="absolute -bottom-12  right-20 transform rotate-45 ">
                <div class="w-32 h-32 relative  shadow-out flex justify-center items-center ">
                    <div class="w-20 h-20  shadow-inset"></div>
                </div>
            </div>
{{-- content --}}
        {{-- designe prvního --}}
            <div class="flex items-center justify-center flex-col w-10/12 m-auto h-full backdrop-filter backdrop-blur-2xl rounded-xl border-2 border-blue-glass">
                <div class="flex justify-evenly items-center w-full h-6/12 mb-32">
                    <div class="flex flex-col justify-center text-2xl h-10/12 w-2/12 font-montserrat">
                        <div class="flex items-center justify-between">
                            <h1 class="py-5">rychlejší</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-between">
                            <h1 class="py-5">přehlednější</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-between">
                            <h1 class="py-5">modernější</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </div>
                    </div>
        
                    <div >
                        <img  src="{{ asset('images/bg/logo-lol.png') }}" style="width: 100px">
                    </div>
                </div>
        {{-- search bar --}}
                <div class="bg-gray-500  w-11/12 mx-auto rounded-2xl">
                    <div class="shadow-out bg-gradient-to-br from-gray-light to- p-3 rounded-2xl  ">
                        <div class="flex justify-between items-center">
                            <form action="/vyvolavac/"  method="GET" class="w-full">
                                <div class="flex justify-between px-4 items-center rounded-l-lg shadow-inset p-2 w-full ">
                                    <input type="text" name="username" class="w-11/12 px-2 py-1 bg-transparent text-white outline-none focus:outline-none" placeholder="Vyhledat hráče">

                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
    
                            <div class="mx-1 bg-black  px-2 py-3">
                                <h1 class="text-blue-light font-bold font-poppins">EUNE</h1>
                            </div>
    
            {{-- modulární --}}
                            <div class="flex justify-center items-center bg-black rounded-r-lg">
                                <button id="myBtn" class="flex  px-2 py-3 cursor-pointer outline-none text-blue-light focus:outline-none transition delay-100 duration-300 ease-in-out hover:text-gray-500">
                                    <h1 class="mr-2 font-poppins ">Regiony</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </button>  
                            </div> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        
        <div id="Opacity" class="fixed hidden top-0 left-0 w-full h-screen backdrop-filter backdrop-brightness-50 z-20">
            <div class="h-full w-full flex items-center justify-center">
                <div class="w-8/12 h-8/12 ">
                    <div class="bg-gray-500 w-full h-full relative" >
                        <div class="text-center">
                            <span id="close" class="cursor-pointer close absolute top-5 right-5 w-10 h-10 border-2 border-gray-400 text-blue-light rounded-xl text-2xl font-bold z-30 ">&times;</span>
                        </div>
    
                        <div class="flex w-full h-full top-0 absolute justify-center items-center flex-col text-center ">
    
                            <div class="w-full flex justify-center">
                                <h1 class="text-blue-light w-8/12 font-montserrat text-xl mt-10 pb-1 border-b-2 border-gray-400">Region</h1>
                            </div>
    
                            <div class="w-full h-full  flex justify-center items-center ">
                                <form action="" class="w-full">

                                    <div class="w-full h-full flex flex-col justify-center items-center">
                                        <div class="grid grid-cols-2 gap-10 w-6/12 mt-5">
        
                                            <div class="grid gap-3">
                                                <div class="flex region-active opacity-75 hover:opacity-100 hover:border-red-500 justify-around items-center cursor-pointer pt-1 pb-2 border-r border-gray-400  ">
                                                    <div class="flex justify-between w-9/12">
                                                        <img src="{{ asset('images/regions/region-eune.png') }}" alt="">
                                                        <h1 class="font-bold font-montserrat">Europe Nordic & East</h1>
                                                    </div>
                                                    
                                                </div>
                                                <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-r border-gray-400  ">
                                                    <div class="flex justify-between w-9/12">
                                                        <img src="{{ asset('images/regions/region-euw.png') }}" alt="">
                                                        <h1 class="font-bold font-montserrat">Europe West</h1>
                                                    </div>
                                                    
                                                </div>
                                                <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-r border-gray-400  ">
                                                    <div class="flex justify-between w-9/12">
                                                        <img class="s object-cover" src="{{ asset('images/regions/region-na.png') }}" alt="">
                                                        <h1 class="font-bold font-montserrat">North America</h1>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                
                                            <div class="grid gap-3">
                                                <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-l border-gray-400  ">
                                                    
                                                    <div class="flex justify-between items-center w-9/12">
                                                        <h1 class="font-montserrat font-bold">Las</h1>
                                                        <img src="{{ asset('images/regions/region-las.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-l border-gray-400  ">
                                                    
                                                    <div class="flex justify-between w-9/12">
                                                        <h1 class="font-bold font-montserrat">Lan</h1>
                                                        <img src="{{ asset('images/regions/region-lan.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="hover:border-red-500 opacity-75 hover:opacity-100 flex justify-around items-center cursor-pointer pt-1 pb-2 border-l border-gray-400  ">
                                                    
                                                    <div class="flex justify-between w-9/12">
                                                        <h1 class="font-bold font-montserrat">Oceania</h1>
                                                        <img src="{{ asset('images/regions/region-oceania.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
        
                                            
                                        </div>
    

                                        <form action="">
                                            <select name="region">
                                                <option value="eune">eune</option>
                                                <option value="euw">euw</option>
                                                <option value="na">na</option>
                                                <option value="las">las</option>
                                            </select>
    
                                            <div class="mt-20">
                                                <button type="submit" class="bg-black text-blue-light px-4 py-2 font-poppins font-bold">Změnit</button>
                                            </div>
                                        </form>


                                    </div>
    

                                </form>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

{{-- další stránky --}}
    <x-another-sites/>

{{-- footer --}}
    <x-footer/>


@endsection

@section('script')

@endsection




{{-- 
    
            {{-- další odkazy  --}}
            {{-- <div class="w-full flex flex-col border-2">
                <x-footer-text footer-text='Další odkazy'/>

                <div class="h-full flex justify-evenly flex-col pl-4">
                    <a href="#" class="text-gray-500 hover:text-white">Postavy</a>
                    <a href="#" class="text-gray-500 hover:text-white">Nejlepší hráčí</a>
                    <a href="#" class="text-gray-500 hover:text-white">Itemy</a>
                </div>
            </div> --}}

        {{-- Social media --}}
            {{-- <div class="w-full h-full flex flex-col items-center border-2 ">
                <x-footer-text footer-text='Sociální sítě'/>

                <div class="flex justify-evenly items-center w-4/12 m-auto ">
                    <div class="bg-gray-500 hover:bg-blue-500 rounded-full  m-1">
                        <img src="{{ asset('images/socialmeadia/facebook.png') }}" style="width: 40px;">
                    </div>
                    <div class="bg-gray-500 hover:bg-red-500 rounded-full  m-1">
                        <img src="{{ asset('images/socialmeadia/youtube.png') }}" style="width: 40px;">
                    </div>
                    <div class="bg-gray-500 bg-gradient-to-br hover:from-purple-700 hover:to-pink-400 rounded-full  m-1">
                        <img src="{{ asset('images/socialmeadia/instagram.png') }}" style="width: 40px;">
                    </div>
                </div>
            </div> --}}

        {{-- kontakty --}}
            {{-- <div class="w-full text-right border-2">
                <x-footer-text footer-text='Kontaktuje nás'/>

                <div class="w-full float-right flex relative">
                    <div class="text-left absolute right-0">
                        <h1>Olomouc, Smetanovy Sady</h1>
                        <h1>BubakVOE@gmail.com</h1>
                        <h1>+420 730 681 670</h1>
                    </div>
                </div>
            </div> --}}
    






{{-- @extends('layouts.app')

@section('content')
<div>
    <form method="GET" action="summoner.get">
        @csrf
        <input type="text" name="username" required>
        <button>Můj ofil</button>
    </form>
</div>
@endsection --}}