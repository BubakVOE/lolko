<div class="flex justify-around items-center p-10 w-8/12 m-auto h-10/12 ">

    <div class="">
        <img src="{{ $icon }}" style="width: 220px">
    </div>

    <div class="w-6/12 ">
        <div class="border-b-2 border-gray-light " >
            <div class="flex items-center justify-between font-poppins">
                <h1 class="py-1 font-bold">název</h1>

                <div class="flex text-right items-center">
                    <h1 class="py-1 w-20">základní hodnoty</h1>
                    <h1 class="py-1 w-16">další level</h1>
                </div>
            </div>
        </div>

        <div class="mt-5 ">
{{-- HP / HP REG --}}
            <div>
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/hp.png') }}" >
                        <h1 class="py-1 font-bold font-inter">životy</h1>
                    </div>

                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["hp"] }}</h1> 
                        <h1>+</h1> 
                        <h1>{{ $champStats["hpperlevel"] }}</h1>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/hpregen.png') }}" >
                        <h1 class="py-1 font-bold">regenerace zdraví</h1>
                    </div>

                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["hpregen"] }}/s</h1> 
                        <h1>+</h1> 
                        <h1> {{ $champStats["hpregenperlevel"] }}/s</h1>
                    </div>
                </div>
            </div>

{{-- MANA / MANA REG --}}
            <div class="my-2">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/mp.png') }}" >
                        <h1 class="py-1 font-bold">mana</h1>
                    </div>

                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1 class="">{{ $champStats["mp"] }}</h1> 
                        + 
                        <h1>{{ $champStats["mpperlevel"] }}</h1>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/mpregen.png') }}" >
                        <h1 class="py-1 font-bold">regenerace many</h1>
                    </div>

                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1 class="">{{ $champStats["mpregen"] }}</h1> 
                        + 
                        <h1>{{ $champStats["mpregenperlevel"] }}</h1>
                    </div>
                </div>
            </div>

{{-- ARMOR / MR --}}
            <div class="mb-2">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/armor.png') }}" >
                        <h1 class="py-1 font-bold">brnění</h1>
                    </div>
    
                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["armor"]}} </h1>
                        + 
                        <h1>{{ $champStats["armorperlevel"] }}</h1>
                    </div>
                </div>
    
            
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/spellblock.png') }}" >
                        <h1 class="py-1 font-bold">odolnost vůči magii</h1>
                    </div>
    
                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["spellblock"] }} </h1>
                        + 
                        <h1>{{ $champStats["spellblockperlevel"] }}</h1>
                    </div>
                </div>
            </div>

{{-- AD / CRIT / AS --}}
            <div class="mb-2">      
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/attackdamage.png') }}" >
                        <h1 class="py-1 font-bold">útočné poškození</h1>
                    </div>
    
                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["attackdamage"] }} </h1>
                        + 
                        <h1>{{ $champStats["attackdamageperlevel"] }}</h1>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/crit.png') }}" >
                        <h1 class="py-1 font-bold">kritický dmg</h1>
                    </div>
    
                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["crit"] }} </h1>
                        + 
                        <h1>{{ $champStats["critperlevel"] }}</h1>
                    </div>
                </div>
        
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <img class="pr-3" src="{{ asset('images/stats/attackspeed.png') }}" >
                        <h1 class="py-1 font-bold">rychlost útoku</h1>
                    </div>
    
                    <div class="grid grid-cols-3 text-center w-3/12">
                        <h1>{{ $champStats["attackspeed"] }}</h1> 
                        + 
                        <h1>{{ $champStats["attackspeedperlevel"] }}</h1>
                    </div>
                </div>
            </div>

{{-- MOVEMENT SPEED --}}
            <div class="flex justify-between">
                <div class="flex items-center">
                    <img class="pr-3" src="{{ asset('images/stats/movespeed.png') }}" >
                    <h1 class="py-1 font-bold">pohybu</h1>
                </div>

                <div class="w-3/12 text-center">
                    <h1>{{ $champStats["movespeed"] }}</h1>
                </div>
            </div>
{{-- RANGE --}}
            <div class="flex justify-between">
                <div class="flex items-center">
                    <img class="pr-3" src="{{ asset('images/stats/attackrange.png') }}" >
                    <h1 class="py-1 font-bold">dosah</h1>
                </div>

                <div class="w-3/12 text-center">
                    <h1>{{ $champStats["attackrange"] }}</h1>
                </div>
            </div>

        </div>
    </div>
</div>
