<div class="grid grid-cols-5 gap-2">

    <div class="w-6 h-6">
        @if ($alliesBanned[0] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($alliesBanData[0])
            <a href="/champion/{{ $alliesBanData[0]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$alliesBanData[0]['img'] }}">
            </a>
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($alliesBanned[1] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($alliesBanData[1])
            <a href="/champion/{{ $alliesBanData[1]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$alliesBanData[1]['img'] }}">
            </a>        
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($alliesBanned[2] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($alliesBanData[2])
            <a href="/champion/{{ $alliesBanData[2]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$alliesBanData[2]['img'] }}">
            </a>        
        @endif
    </div>
    
    <div class="w-6 h-6">
        @if ($alliesBanned[3] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($alliesBanData[3])
            <a href="/champion/{{ $alliesBanData[3]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$alliesBanData[3]['img'] }}">
            </a>        
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($alliesBanned[4] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($alliesBanData[4])
            <a href="/champion/{{ $alliesBanData[4]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$alliesBanData[4]['img'] }}">
            </a>
        @endif
    </div>

</div>
