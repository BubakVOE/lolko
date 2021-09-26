
    @if ( $matchDetails['participants'][0]['summonerName'] ==  $username )
    
        @if ($matchDetails['participants'][0]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif    
    
    @elseif ($matchDetails['participants'][1]['summonerName'] ==  $username)
        @if ($matchDetails['participants'][1]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif 

    @elseif ($matchDetails['participants'][2]['summonerName'] ==  $username)
        @if ($matchDetails['participants'][2]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif  

    @elseif ($matchDetails['participants'][3]['summonerName'] ==  $username)
        @if ($matchDetails['participants'][3]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif 

    @elseif ($matchDetails['participants'][4]['summonerName'] ==  $username)
        @if ($matchDetails['participants'][4]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif

    @elseif ($matchDetails['participants'][5]['summonerName'] ==  $username)
        @if ($matchDetails['participants'][5]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif  

    @elseif ($matchDetails['participants'][6]['summonerName'] ==  $username)
        @if ($matchDetails['participants'][6]['win'] == 'true')
            <h1 class="font-bold text-green-500">Výhráno</h1>
        @else
            <h1 class="font-bold text-red-500">Prohráno</h1>
        @endif   

    @endif


