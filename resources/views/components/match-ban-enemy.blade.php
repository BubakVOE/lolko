<div class="grid grid-cols-5 gap-2">

    <div class="w-6 h-6">
        @if ($enemiesBanned[0] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($enemiesBanData[0])
            <a href="/champion/{{ $enemiesBanData[0]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$enemiesBanData[0]['img'] }}">
            </a>
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($enemiesBanned[1] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($enemiesBanData[1])
            <a href="/champion/{{ $enemiesBanData[1]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$enemiesBanData[1]['img'] }}">
            </a>
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($enemiesBanned[2] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($enemiesBanData[2])
            <a href="/champion/{{ $enemiesBanData[2]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$enemiesBanData[2]['img'] }}">
            </a>
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($enemiesBanned[3] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($enemiesBanData[3])
            <a href="/champion/{{ $enemiesBanData[3]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$enemiesBanData[3]['img'] }}">
            </a>
        @endif
    </div>

    <div class="w-6 h-6">
        @if ($enemiesBanned[4] == -1)
            <img src="https://cdn.communitydragon.org/11.15.1/champion/generic/square" alt="">
        @elseif ($enemiesBanData[4])
            <a href="/champion/{{ $enemiesBanData[4]['id'] }}">
                <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$enemiesBanData[4]['img'] }}">
            </a>
        @endif
    </div>

</div>

