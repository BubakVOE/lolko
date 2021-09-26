@extends('layouts.app')

@section('container')

    <div class="w-10/12 m-auto">

        <div class="flex items-center w-full mt-5 bg-gradient-to-r from-gray-500 to-gray-light shadow-out">
            <div class="w-6/12 m-auto ">
                <div class="flex w-full p-2 justify-evenly ">
                    <div class="text-center font-montserrat">
                        <h1 class="my-1 text-3xl uppercase">Hráči</h1>
                        <h1 class="my-1 text-sm uppercase">nejznámnější, nejlepší, <span class="text-red-500">elita</span></h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-2 my-32">
            <div class="w-10/12 m-auto">
                <h1>Nejlepší hráči na <span class="font-bold">EUNE</span></h1>
        
                <div>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci at ex id blanditiis dicta numquam. Velit magni reprehenderit aliquam placeat.
                </div>
            </div>
            <div class="w-10/12 m-auto">
                <h1>Nejlepší hráči na <span class="font-bold">NA</span></h1>
        
                <div>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci at ex id blanditiis dicta numquam. Velit magni reprehenderit aliquam placeat.
                </div>
            </div>
        </div>


        <div class="bg-gray-500 rounded-2xl">
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

        <div class="my-32">
            <div>
                <h1 class="text-2xl border-b-2 border-gray-light pb-1 w-3/12 text-center font-bold"><span class="text-red-500">Žíve hry</span>, které právě začaly</h1>
                <h2 class="w-3/12 my-2">Podívej se na profesionály, aby jsi získal inspiraci pro lepší buildy a taktiky</h2>
            </div>

            <div class="grid grid-cols-3 my-2 gap-10">
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
                <div class="w-full h-48 border-2">

                </div>
            </div>

        </div>


    </div>

    <x-footer/>
@endsection