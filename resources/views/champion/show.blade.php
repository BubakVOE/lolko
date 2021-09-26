@extends('layouts.app')
@section('container')



<div class="w-10/12 m-auto h-full">

    <div>
        <x-champion-header :champion='$champion' :tags='$tags' />
    </div>

{{-- základní informace --}}

<div class="mt-1/12">
    <div class="flex flex-col items-center justify-center border-b-2 border-gray-light pb-5 mb-10">
        <h1 class=" text-center font-bold text-xl border-gray-light font-poppins">Základni informace</h1>
    </div>
    <div class="shadow-out p-5 rounded-2xl bg-gradient-to-br from-gray-500 to-gray-light">
        <div class="shadow-insetSmaller bg-gray-500 rounded-lg">

            <x-champion-stats :champStats=$champStats :icon=$icon/>

        </div>
    </div>
</div>

{{-- desc --}}
<div class="mt-1/12 ">
    <div class="flex flex-col items-center justify-center border-b-2 border-gray-light pb-5 mb-10">
        <h1 class="font-bold text-left text-xl w-full border-gray-light font-poppins">Příběh</h1>
    </div>

    <div class="flex items-center w-6/12">
        <div class="shadow-out p-5 rounded-2xl bg-gradient-to-br from-gray-500 to-gray-light h-7/12">
            <div class="shadow-insetSmaller p-10 bg-gray-500 rounded-lg h-full flex flex-col items-center justify-center">
                <p class="pl-5">{{ $champDesc }}</p>
            </div>    
        </div> 
    </div> 
</div>


{{-- Rady a tipy --}}
    <div class="my-1/12 ">
        <div class="flex flex-col items-center justify-center border-b-2 border-gray-light pb-5 mb-10">
            <h1 class=" text-center font-bold text-xl border-gray-light font-poppins">Rady a tipy</h1>
        </div>
        
        <div class="grid grid-cols-2 gap-x-10 ">
            <div class="shadow-out p-5 rounded-2xl bg-gradient-to-br from-gray-500 to-gray-light ">
                <div class="shadow-insetSmaller bg-gray-500 rounded-lg h-full p-5">
                    <h1 class="pb-1 font-montserrat">How to play with <span class="font-bold text-green-500 ml-1 border-b border-green-500 pb-1">{{ $champion->name }}</span></h1>
    
                    @foreach ($champInfs['allytips'] as $allytip)
                        <li class="text-green-500 my-2 flex pl-5">
                            <span class="text-black ">{{ $allytip }}</span>
                        </li>
                    @endforeach
                </div>
            </div>

            <div class="shadow-out p-5 rounded-2xl bg-gradient-to-br from-gray-500 to-gray-light ">
                <div class="shadow-insetSmaller bg-gray-500 rounded-lg h-full p-5">
                    <h1 class="pb-1 font-montserrat">How to play against <span class="font-bold text-red-500 ml-1 border-b border-red-500 pb-1">{{ $champion->name }}</span></h1>
                    @foreach ($champInfs['enemytips'] as $enemytip)
                        <li class="text-red-500 my-2 flex pl-5">
                            <h1 class="text-black">{{ $enemytip }}</h1>
                        </li>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>

{{--  Skinny --}}
    <div class="w-full ">
        <div class="flex flex-col items-center justify-center border-b-2 border-gray-light pb-5 mb-10">
            <h1 class=" text-center font-bold text-xl border-gray-light font-poppins">Další skiny ve hře</h1>
        </div>

        <div class="">            
            <div class="">
                 @foreach ($champSkins as $champSkin )
                    <div class="slides w-full flex flex-col justify-between items-center text-center m-5">
                        <div class=" relative flex justify-center w-7/12 m-auto ">

                            <div class="shadow-out p-5 rounded-3xl bg-gradient-to-br from-gray-500 to-gray-light">
                                <div class="shadow-insetSmaller bg-gray-500 rounded-2xl flex p-5">
                                    <img class="rounded-xl" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{ $champion->name }}_{{ $champSkin['num'] }}.jpg" >
                                </div>
                            </div>
    
                            <div class="absolute top-1/2 transform -translate-y-1/2 w-full">
                                <div class="relative flex justify-between items-center ">
                                    <a class="text-black bg-gray-500  bg-opacity-10 relative left-10 font-extrabold text-xl py-5 px-3 rounded-r-xl cursor-pointer backdrop-filter backdrop-blur-xl " onclick="plusSlides(-1)">&#10094</a>
                                    <a class="text-black bg-gray-500 bg-opacity-10 relative right-10 font-extrabold text-xl py-5 px-3 rounded-l-xl cursor-pointer backdrop-filter backdrop-blur-xl " onclick="plusSlides(1)">&#10095</a>
                                </div>
                            </div>

                            <div class="absolute bottom-0 bg-yellow-50 bg-opacity-10 py-2 px-5 rounded-t-xl backdrop-filter backdrop-blur-xl ">
                                @if ($champSkin['name'] == 'default')
                                    <h1 class="font-poppins text-lg font-bold ">{{ $champion->name }}</h1>
                                @else
                                    <h1 class="font-poppins text-lg font-bold ">{{ $champSkin['name'] }}</h1>
                                @endif
                            </div>

                            <div class="absolute -bottom-8 py-1 px-4 rounded-b-xl bg-gray-light ">
                                <div class="flex">
                                    <h1 class="mr-2">{{ $champSkin['num']+1 }}. z {{ $overallSkins['num']+1 }} </h1>
                                    <h1>skin</h1>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

{{-- spelly --}}
    <div class="flex flex-col justify-evenly my-1/12 p-10 ">
        <div class="flex flex-col items-center justify-center border-b-2 border-gray-light pb-5 mb-10">
            <h1 class="text-center font-poppins text-xl font-bold">Spelly</h1>
            <h2>název, popis a další informace</h2>
        </div>
        
        <div class="flex">
            <div class="w-1/12 flex flex-col items-center justify-around">
                <h1 class="font-bold">Passive</h1>
                <h1 class="font-bold">Q</h1>
                <h1 class="font-bold">W</h1>
                <h1 class="font-bold">E</h1>
                <h1 class="font-bold">R</h1>
            </div>
            <div class="w-full">
                                {{-- passivka --}}
                <div class="flex flex-row justify-center items-center mb-3">
                    <div class="">
                        <img src="https://ddragon.leagueoflegends.com/cdn/11.15.1/img/passive/{{ $passive['image']['full'] }}" style="width: 80px;">
                    </div>
        
                    <div class="w-3/12 text-center">
                        <h1 class="font-poppins text-boldd">{{ $passive['name']}}</h1>
                    </div>
        
                    <div class='overflow-auto w-6/12 m-auto'>
                        <h1 class="">{!! $passive['description'] !!}</h1>
                    </div>
        
                    <div class="w-5/12 m-auto">
                        <div class="float-right text-left w-6/12">
                            {{-- další informace --}}
                        </div>
                    </div>
        
                </div>
        
            {{-- další spelly --}}
                <div class="">
                    @foreach ($spells as $spell)
                        <div class="flex flex-row justify-center items-center my-3 ">
                            
                            <div class="">
                                <img src="https://ddragon.leagueoflegends.com/cdn/11.15.1/img/spell/{{ $spell['image']['full'] }}" style="width: 80px;">
                            </div>
            
                            <div class="w-3/12 text-center ">
                                <h1 class="font-poppins text-bold">{{ $spell['name'] }}</h1>
                            </div>
            
                            <div class='overflow-auto w-6/12 m-auto'>
                                <h1 class=""><span>{{ $spell['description'] }}</span></h1>
                            </div>
            
                            <div class="w-5/12 m-auto">
                        
                                <div class="float-right text-left w-6/12">
                                    <h1>cd -<span class="mx-1 font-bold">{{ $spell['cooldownBurn'] }}s</span></h1>
                                    <h1>mana -<span class="mx-1 font-bold">{{ $spell['costBurn'] }}</span></h1>
                                    <h1>range -<span class="mx-1 font-bold">{{ $spell['rangeBurn'] }}</span></h1>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <x-footer/>
</div>



<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    }
</script>


@endsection


{{-- 
    

        
        <div class="shadow-out p-5 rounded-2xl bg-gradient-to-br from-gray-500 to-gray-light ">
            <div class="shadow-insetSmaller bg-gray-500 rounded-lg flex p-5  overflow-auto">

                @foreach ($champSkins as $champSkin )
                    <div class="w-full h-56 flex flex-col justify-between items-center text-center m-5 ">
                        @if ($champSkin['name'] == 'default')
                            <h1 class="font-poppins text-lg font-bold ">{{ $champion->name }}</h1>
                        @else
                            <h1 class="font-poppins text-lg font-bold ">{{ $champSkin['name'] }}</h1>
                        @endif

                        <div class="w-72">
                            <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/{{ $champion->name }}_{{ $champSkin['num'] }}.jpg" style="width: 700px">
                        </div>
                    </div>
                @endforeach

            </div>
        </div> 

    
    --}}


{{-- 
            <div class="border-2">
            <div class="grid grid-cols-3 text-center">
                <h1>název</h1>
                <h1>-</h1>
                <h1>{{ $spell['name'] }}</h1>
            </div>
            <div class="grid grid-cols-3 text-center">
                <h1>popis</h1>
                <h1>-</h1>
                <h1>{{ $spell['description'] }}</h1>
            </div>
        
            <div class="grid grid-cols-3 text-center">
                <h1>typ</h1>
                <h1>-</h1>
                <h1>{{ $spell['leveltip']['label'][0] }}</h1>
            
            </div>
            
            <div class="grid grid-cols-3 text-center">
                <h1>cd</h1>
                <h1>-</h1>
                <h1>{{ $spell['cooldownBurn'] }}</h1>
            </div>
           
            <div class="grid grid-cols-3 text-center">
                <h1>mana</h1>
                <h1>-</h1>
                <h1>{{ $spell['costBurn'] }}</h1>
            </div>
            <div class="grid grid-cols-3 text-center">
                <h1>range</h1>
                <h1>-</h1>
                <h1>{{ $spell['rangeBurn'] }}</h1>
            </div>
        </div>
 --}}
