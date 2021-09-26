
    <div class="flex flex-col items-center">
        <h1 class="font-bold">KDA</h1>
        <h1 class="text-xs opacity-60">zabití / smrti / assits</h1>
    </div>

    <div class="flex w-28">

        @if ( $matchDetails['participants'][0]['summonerName'] ==  $username )

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][0]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][0]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][0]['assists'] }}</h1>
                </div>
            </div>


        @elseif ($matchDetails['participants'][1]['summonerName'] ==  $username)

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][1]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][1]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][1]['assists'] }}</h1>
                </div>
            </div>

        @elseif ($matchDetails['participants'][2]['summonerName'] ==  $username)

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][2]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][2]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][2]['assists'] }}</h1>
                </div>
            </div>

        @elseif ($matchDetails['participants'][3]['summonerName'] ==  $username)

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][3]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][3]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][3]['assists'] }}</h1>
                </div>
            </div>

        @elseif ($matchDetails['participants'][4]['summonerName'] ==  $username)

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][4]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][4]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][4]['assists'] }}</h1>
                </div>
            </div>

        @elseif ($matchDetails['participants'][5]['summonerName'] ==  $username)

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][5]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][5]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][5]['assists'] }}</h1>
                </div>
            </div>

        @elseif ($matchDetails['participants'][6]['summonerName'] ==  $username)

            <div class="flex justify-evenly w-full">
                <div>
                    <h1>{{ $matchDetails['participants'][6]['kills'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][6]['deaths'] }}</h1>
                </div>
                <div>
                    <h1>{{ $matchDetails['participants'][6]['assists'] }}</h1>
                </div>
            </div>

        @endif

    </div>
