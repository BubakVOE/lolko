<div class="border-2">

    <a href= {{ url('https://lolko.test/summoner/'. $player['summonerName']) }} class="font-bold">{{ $player['summonerName'] }}</a>

    <div>


        <div class="flex flex-col items-center justify-center">
            <h1 class="font-bold border-b border-gray-light mb-3">KDA</h1>
    
            <div class="flex items-center justify-center h-5">
                <h1 class="">{{ $player['kills'] }}</h1>
                <hr class="border-r border-gray-light h-full mx-1">
                <h1 class="">{{ $player['assists'] }}</h1>
                <hr class="border-r border-gray-light h-full mx-1">
                <h1 class="">{{ $player['deaths'] }}</h1>
            </div>
        </div>


        <div>
            <h1>lvl - {{ $player['champLevel'] }}</h1>
            <h1>id - {{ $player['championId'] }}</h1>
            <h1>name - {{ $player['championName'] }}</h1>

        </div>
    </div>



    {{ $player['wardsPlaced'] }}
    {{ $player['visionWardsBoughtInGame'] }}

</div>