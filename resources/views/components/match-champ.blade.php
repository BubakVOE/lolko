<div class="w-20 h-20">

    @if ( $matchDetails['participants'][0]['summonerName'] ==  $username )
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][0]['championName'].'.png' }}" alt="">

    @elseif ($matchDetails['participants'][1]['summonerName'] ==  $username)
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][1]['championName'].'.png' }}" alt="">


    @elseif ($matchDetails['participants'][2]['summonerName'] ==  $username)
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][2]['championName'].'.png' }}" alt="">


    @elseif ($matchDetails['participants'][3]['summonerName'] ==  $username)
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][3]['championName'].'.png' }}" alt="">


    @elseif ($matchDetails['participants'][4]['summonerName'] ==  $username)
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][4]['championName'].'.png' }}" alt="">


    @elseif ($matchDetails['participants'][5]['summonerName'] ==  $username)
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][5]['championName'].'.png' }}" alt="">


    @elseif ($matchDetails['participants'][6]['summonerName'] ==  $username)
        <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$matchDetails['participants'][6]['championName'].'.png' }}" alt="">


    @endif

</div>
