@extends('layouts.app')

@section('container')


    <div class="relative">
    {{-- nadpis --}}
        <div class="w-10/12 m-auto">
            <div class="flex items-center w-full mt-5 bg-gradient-to-r from-gray-500 to-gray-light shadow-out">
                <div class="w-6/12 m-auto ">
                    <div class="flex w-full p-2 justify-evenly ">
                        <div class="text-center font-montserrat">
                            <h1 class="my-1 text-3xl uppercase">Postavy</h1>
                            <h1 class="my-1 text-1xl">buildy, staty, taktiky</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-hidden my-1/12 h-52">
            <img src="{{ asset('images/bg/aatrox.png') }}">
        </div>

        <div class="w-10/12 mx-auto ">
            
        {{-- filter --}}
            <div class="z-30 flex w-full p-5 m-auto  bg-gray-500 rounded-lg shadow-pokusout ">
                <div class="flex flex-col w-full">

                    <div class="z-10">
                        <h1 class="my-1 text-2xl font-montserrat ">Filtry</h1>
                    </div>

                    <div class="flex justify-around w-full">
                        <div class="flex items-center justify-between w-3/12 p-2 px-4 rounded-lg shadow-inset ">
                            <input type="text" name="username" class="w-11/12 px-2 py-1 text-white bg-transparent outline-none focus:outline-none" placeholder="Vyhledat postavu">

                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>

                        <div>
                            <h1>seřadit podle</h1>
                            <select name="">
                                <option type="checkbox" value="">abecedy</option>
                                <option value="">datum přidání</option>
                                <option value="">obtížnost</option>
                            </select>
                        </div>

                        <div class="flex items-center w-3/12 justify-evenly">
                            <img class="border-2 border-black hover:border-red-500" src="{{ asset('images/roles/top.png') }}" style="width: 40px; height: 40px">
                            <img class="border-2 border-black hover:border-red-500" src="{{ asset('images/roles/jungle.png') }}" style="width: 40px; height: 40px">
                            <img class="border-2 border-black hover:border-red-500" src="{{ asset('images/roles/mid.png') }}" style="width: 40px; height: 40px">
                            <img class="border-2 border-black hover:border-red-500" src="{{ asset('images/roles/bot.png') }}" style="width: 40px; height: 40px">
                            <img class="border-2 border-black hover:border-red-500" src="{{ asset('images/roles/support.png') }}" style="width: 40px; height: 40px">
                        </div>

                        <div class="flex items-center justify-center w-3/12">
                            <div>
                                <div class="flex items-center">
                                    <input type="checkbox" name="free_rotations">
                                    <h1 class="ml-2">Free rotations</h1>
                                </div>

                                <div class="flex items-center">
                                    <input type="checkbox" name="for_newbie">
                                    <h1 class="ml-2">Free rotations for newbie</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- celkový počet  --}}
            <div class="flex flex-col items-center my-14">
                <h1 class="text-xl font-poppins text-gray-800">Celkový počet postav je <span class="font-bold text-black">{{ $amount }}</span></h1>
                <h2 class="text-xs mt-2">patch - {{ $new }}</h2>
            </div>
            
            <div class="">
    {{-- všechny postavy --}}
                <div class="grid grid-cols-5 gap-x-10 gap-y-10 p-10 shadow-pokusout  ">
                    @foreach ($champions as $champion)
                        <x-champion-card :champion="$champion" />
                    @endforeach
                </div>
    {{-- free rotace --}}
                <div class="my-10 py-5">

                    <div class="w-full h-20 shadow-out flex items-center">
                        <div class="flex justify-center w-2/12 ">
                            <h1 class="text-xl font-bold font-montserrat">Free rotace</h1>
                        </div>
                    </div>

                    <div class="grid grid-cols-5 gap-x-10 gap-y-10 p-10 shadow-pokusout my-20">
                        @foreach ($freeChampions as $champion)
                            <x-champion-card :champion="$champion" />
                        @endforeach
                    </div>

                </div>
    {{-- rotace pro nováčky --}}
                <div class="my-10 py-5">

                    <div class="w-full h-20 shadow-out flex items-center">
                        <div class="flex justify-center w-5/12 ">
                            <h1 class="text-xl font-bold font-montserrat flex items-center">Rotace pro nováčky do {{ $newbieLVL }} levelu <span class="font-normal text-sm px-2"> (maximální level) </span></h1>
                        </div>
                    </div>

                    <div class="grid grid-cols-5 gap-x-10 gap-y-10 p-10 shadow-pokusout my-20">
                        @foreach ($newbieChampions as $champion)
                            <x-champion-card :champion="$champion"/>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>


    </div>
    
    
    <x-footer/>
@endsection
