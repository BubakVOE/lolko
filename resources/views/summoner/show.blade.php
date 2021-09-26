@extends('layouts.app')
@section('container')

    <div class="w-10/12 m-auto">
        <div class="flex items-center bg-gradient-to-r mt-5 from-gray-500 to-gray-light shadow-out w-full">
            <div class="w-6/12 m-auto   ">
                <div class="flex  justify-evenly w-full p-2 ">
                    <div class="text-center font-montserrat">
                        <h1 class="text-1xl my-1">statistiky hráče</h1>
                        <h1 class="text-3xl my-1">{{ $summoner->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-40 m-auto mt-1/12">
            <div class="shadow-out p-5 rounded-2xl bg-gradient-to-br from-gray-500 to-gray-light">
                <div class="font-bold font-poppins flex flex-row shadow-insetSmaller bg-gray-500 rounded-lg p-5">
                    {{-- name/img --}}
                    <div class="flex flex-col items-center  ">
                        <h1 class="text-xl ">{{ $summoner->name }}</h1>
            
                        <div class="flex w-full ">
                            <div class="relative" style="width: 150px; height:150px">
                                <div class="w-full ">
                                    <img class="rounded-xl  border-2 border-black" src="https://ddragon.leagueoflegends.com/cdn/11.15.1/img/profileicon/{{ $summoner->profileIconId }}.png" style="width: 250px" >
                                    <h1 class="absolute top-1/2 -right-5 transform -translate-y-1/2 bg-gray-500 font-bold font-poppins border-2 border-black px-2 py-1">{{ $summoner->summonerLevel }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-r border-gray-light h-52 ml-10">

                    {{-- Game stats --}}
                    <div class="font-normal w-full ">
                        <div class="flex items-center justify-evenly w-full ">
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 5</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 6</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 7</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 8</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 9</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 10</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 11</h1>
                            <h1 class="text-xl transform scale-50 mx-1 font-extrabold border-b border-gray-500 hover:text-xl hover:scale-100 hover:w-28 hover:border-black">Season 12</h1>
                            <h1 class="text-xl w-28 border-b border-black font-extrabold mx-1">Season 13</h1>
                        </div>
                
                        {{-- podmínka pro typ rankedu soloq/flexky --}}
                        <div class="flex justify-evenly w-full items-start mt-5 ">

                            @if ($rankInf[0]['queueType'] == 'RANKED_SOLO_5x5' )

                                <div class="flex flex-col justify-center w-11/12 ">
                                    <div class="flex items-center  justify-between">
                                        <div class="flex items-center ">

                                            <div class="">
                                                <h1 class="font-bold mb-1">soloq/duoq</h1>
                                                <h1>Vyhráno her - <span class="font-bold text-green-500">{{ $rankInf[0]['wins'] }}</span></h1>
                                                <h1>Prohráno her - <span class="font-bold text-red-500">{{ $rankInf[0]['losses'] }}</span></h1>    
                                                <h1>celkem - <span class="font-bold">{{ $rankInf[0]['wins']+$rankInf[0]['losses'] }}</span></h1>
                                                <h1>wr - {{ $rankInf[0]['wins'] / ($rankInf[0]['wins']+$rankInf[0]['losses'])*100 }}%</h1>
                                            </div>

                                            <div class="ml-4 text-center ">
                                                <img src="{{ asset('images/ranked/emblems/Emblem_'.$rankInf[0]['tier'].'.png') }}" style="width: 100px">
                                                <h1>LP - {{ $rankInf[0]['leaguePoints'] }} </h1>
                                                <h1>{{ $rankInf[0]['tier'] }} {{ $rankInf[0]['rank'] }}</h1>
                                            </div>
                                        </div>
                                        
                                        <div class="flex items-center ">
                                            <div class="">
                                                <h1 class="font-bold mb-1"> flex</h1>
                                                <h1>Vyhráno her - <span class="font-bold text-green-500">{{ $rankInf[1]['wins'] }}</span></h1>
                                                <h1>Prohráno her - <span class="font-bold text-red-500">{{ $rankInf[1]['losses'] }}</span></h1>    
                                                <h1>celkem - <span class="font-bold">{{ $rankInf[1]['wins']+$rankInf[1]['losses'] }}</span></h1>
                                                <h1>wr - {{ $rankInf[1]['wins'] / ($rankInf[1]['wins']+$rankInf[1]['losses'])*100 }}%</h1>
                                            </div>
                                            <div class="ml-4 text-center  ">
                                                <img src="{{ asset('images/ranked/emblems/Emblem_'.$rankInf[1]['tier'].'.png') }}" style="width: 100px">
                                                <h1>LP - {{ $rankInf[1]['leaguePoints'] }} </h1>
                                                <h1>{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>
                                            </div>
                                        </div>

                                        <div class="flex flex-col ">
                                            <h1 class="font-bold mb-1">Dohromady</h1>
                                            <h1>Vyhráno her - <span class="font-bold text-green-500">{{ $rankInf[1]['wins'] + $rankInf[0]['wins'] }}</span></h1>
                                            <h1>Prohráno her - <span class="font-bold text-red-500">{{ $rankInf[1]['losses']+ $rankInf[0]['losses'] }}</span></h1>    
                                            <h1>celkem - <span class="font-bold">{{ $rankInf[1]['wins']+$rankInf[1]['losses']+$rankInf[0]['wins']+$rankInf[0]['losses'] }}</span></h1>
                                        </div> 
                                    </div>
                                </div>   

                            @else 
                                <div class="flex flex-col justify-center w-11/12 ">
                                    <div class="flex items-center  justify-between">

                                        <div class="flex items-center justify-between w-full ">
                                            <div class="">
                                                <h1 class="font-bold mb-1"> soloq/duoq</h1>
                                                <h1>Vyhráno her - <span class="font-bold text-green-500">{{ $rankInf[1]['wins'] }}</span></h1>
                                                <h1>Prohráno her - <span class="font-bold text-red-500">{{ $rankInf[1]['losses'] }}</span></h1>    
                                                <h1>celkem - <span class="font-bold">{{ $rankInf[1]['wins']+$rankInf[1]['losses'] }}</span></h1>
                                                <h1>wr - 53.22 %</h1>
                                                {{-- <h1>wr - {{ $rankInf[1]['wins'] / ($rankInf[1]['wins']+$rankInf[1]['losses'])*100 }}%</h1> --}}
                                            </div>

                                            <div class="flex flex-col justify-center items-center">
                                                <img src="{{ asset('images/ranked/emblems/Emblem_'.$rankInf[1]['tier'].'.png') }}" style="width: 70px">
                                                <h1>LP - {{ $rankInf[1]['leaguePoints'] }} </h1>
                                                <h1>{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>
                                            </div>
                                        </div>

                                        <hr class="border-r border-gray-light h-36 ml-10">
                                        
                                        <div class="flex flex-col text-center w-8/12 ">
                                            <h1 class="font-bold mb-1">Dohromady</h1>
                                            <h1>Vyhráno her - <span class="font-bold text-green-500">{{ $rankInf[1]['wins'] + $rankInf[0]['wins'] }}</span></h1>
                                            <h1>Prohráno her - <span class="font-bold text-red-500">{{ $rankInf[1]['losses']+ $rankInf[0]['losses'] }}</span></h1>    
                                            <h1>celkem - <span class="font-bold">{{ $rankInf[1]['wins']+$rankInf[1]['losses']+$rankInf[0]['wins']+$rankInf[0]['losses'] }}</span></h1>
                                        </div> 

                                        <hr class="border-r border-gray-light h-36 mr-10">

                                        <div class="flex items-center justify-between  w-full ">
                                            <div class="text-center ">
                                                <img src="{{ asset('images/ranked/emblems/Emblem_'.$rankInf[0]['tier'].'.png') }}" style="width: 70px">
                                                <h1>LP - {{ $rankInf[0]['leaguePoints'] }} </h1>
                                                <h1>{{ $rankInf[0]['tier'] }} {{ $rankInf[0]['rank'] }}</h1>
                                            </div>

                                            <div class="">
                                                <h1 class="font-bold mb-1">Flex</h1>
                                                <h1>Vyhráno her - <span class="font-bold text-green-500">{{ $rankInf[0]['wins'] }}</span></h1>
                                                <h1>Prohráno her - <span class="font-bold text-red-500">{{ $rankInf[0]['losses'] }}</span></h1>    
                                                <h1>celkem - <span class="font-bold">{{ $rankInf[0]['wins']+$rankInf[0]['losses'] }}</span></h1>
                                                <h1>wr - 55.36%</h1>
                                                {{-- <h1>wr - {{ $rankInf[0]['wins'] / ($rankInf[0]['wins']+$rankInf[0]['losses'])*100 }}%</h1> --}}
                                            </div>
                                        </div>



                                    </div>
                                </div>  
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div> 

    {{-- histore/nejhranější/sledovat --}}
        {{-- <div class="my-16 border-t-2 border-b-2 border-gray-light">
            <div class=" w-4/12 flex justify-evenly my-4  ">
                <a class="font-apple border-b-2 border-blue-light text-blue-light " href="#">Historie zápasů</a>
                <a class="font-apple border-b-2 border-gray-light text-blue-light hover:border-blue-light" href="#">Nejhranější postavy</a>
                <a class="font-apple border-b-2 border-gray-light text-blue-light hover:border-blue-light" href="#">Sledovat živě</a>
            </div>
        </div> --}}
    {{-- mastery level --}}
        <div class="flex flex-col mt-1/12">
            <div class="flex flex-col">
                <h1 class="font-bold text-xl border-gray-light font-poppins">Mastery level</h1>
                <hr class="border border-gray-light my-1">
                <h1 class="font-poppins">Top 6 tvých postav <span class="font-sans opacity-40">(podle skóre)</span></h1>
                
            </div>


            <div class="grid grid-cols-6 gap-x-5 h-96">
                <x-champion-mastery :champMasteries="$champMasteries[0]"/>
                <x-champion-mastery :champMasteries="$champMasteries[1]"/>
                <x-champion-mastery :champMasteries="$champMasteries[3]"/>
                <x-champion-mastery :champMasteries="$champMasteries[4]"/>
                <x-champion-mastery :champMasteries="$champMasteries[5]"/>
                <x-champion-mastery :champMasteries="$champMasteries[6]"/>
            </div>
        </div>
    {{-- match history --}}


         {{-- <div class="grid grid-cols-2">

            <div>

                <div>
                    <h1 class="text-center">Tvůj team</h1>
                </div>

                <div class="flex flex-col">
                    <x-match-player :player="$teamsPlayers[0]"/>
                    <x-match-player :player="$teamsPlayers[1]"/>
                    <x-match-player :player="$teamsPlayers[2]"/>
                    <x-match-player :player="$teamsPlayers[3]"/>
                    <x-match-player :player="$teamsPlayers[4]"/>
                </div>
                
            </div>

            <div>
                <div>
                    <h1 class="text-center">Enemy team</h1>
                </div>
                
                <div class="flex flex-col">
                    <x-match-player :player="$teamsPlayers[5]"/>
                    <x-match-player :player="$teamsPlayers[6]"/>
                    <x-match-player :player="$teamsPlayers[7]"/>
                    <x-match-player :player="$teamsPlayers[8]"/>
                    <x-match-player :player="$teamsPlayers[9]"/>
                </div>
            </div>

        </div> --}}




        <div class="pb-52 mt-1/12">
            <div class="flex flex-col mb-5">
                <h1 class="font-bold text-xl border-gray-light font-poppins">Historie zápasů</h1>

                <hr class="border border-gray-light my-1">

                @if ( $matchDetails['gameMode'] == 'CLASSIC')
                    <h1>Ranked</h1>
                @else
                    <h1>Unknown mode</h1>
                @endif
            </div>

            <div class="grid grid-cols-1 gap-y-4 px-5 py-2">
                
            {{-- zápas --}}
                <div class="flex flex-row items-center w-full pr-5 bg-gray-light border-2 border-gray-600 hover:bg-gray-500 p-2 ">
                {{-- výsledek --}}
                    <div class=" mx-4 w-1/12 m-auto text-center">
                        <x-match-result :username="$summoner->name" :matchDetails="$matchDetails"/>
                    </div>
                {{-- champ za kterého bylo hráno --}}
                    <div class="mx-4 w-1/12">
                        <x-match-champ :username="$summoner->name" :matchDetails="$matchDetails"/>
                    </div>
                {{-- kda --}}
                    <div class="w-2/12 mx-4 flex flex-col items-center justify-center  h-full ">
                        <x-match-kda :username="$summoner->name" :matchDetails="$matchDetails"/>    
                    </div>
                {{-- itemy --}}
                    <div class="w-2/12 mx-4 h-full">
                        <x-match-items  :matchDetails="$matchDetails['participants'][5]"/>
                    </div>
                {{-- bany --}}
                    <div class="flex flex-col items-center justify-between w-3/12 h-full ">
                        <x-match-ban :alliesBanned="$alliesBanned" :alliesBanData="$alliesBanData" :enemiesBanned="$enemiesBanned" :enemiesBanData="$enemiesBanData"/>
                    </div>
                {{-- picked --}}
                    <div class="flex flex-col items-center justify-between h-full w-4/12">
                        <x-match-picks :matchDetails="$matchDetails"/>
                    </div>
                {{-- detaily o zápase --}}
                    <div class="flex items-center justify-center">
                        <a href="/summoner/{{ $summoner->name }}/match/{id}" class="bg-green-500 px-2 py-1 rounded-lg text-white font-bold">Detaily</a>
                    </div>
                    
                </div>

            </div>
            
        </div>

        <div>
            {{-- @foreach ($saveMatchIds as $saveMatchId)
                {{ Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/EUN1_'.$saveMatchId.'?api_key=RGAPI-461ed6f6-5b87-4bcd-af44-fedfc2188d12')}}
            @endforeach --}}
        </div>

    </div>
@endsection




{{-- @if ($rankInf[1]['tier'] == 'BRONZE')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>
@elseif ($rankInf[1]['tier'] == 'SILVER')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@elseif ($rankInf[1]['tier'] == 'GOLD')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@elseif ($rankInf[1]['tier'] == 'PLATINUM')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@elseif ($rankInf[1]['tier'] == 'DIAMOND')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@elseif ($rankInf[1]['tier'] == 'MASTER')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@elseif ($rankInf[1]['tier'] == 'GRANDMASTER')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@elseif ($rankInf[1]['tier'] == 'CHALLENGER')
    <h1 class="bg-red-500 py-1 rounded-full mt-1">{{ $rankInf[1]['tier'] }} {{ $rankInf[1]['rank'] }}</h1>

@else 
    <h1>unranked doggo</h1>


@endif --}}