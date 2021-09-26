<h1>Picked</h1>

<div class="grid grid-cols-1 gap-y-2 ">
    <div class="grid grid-cols-5 gap-2 ">
        <x-match-champ-ally :matchDetails="$matchDetails['participants'][0]"/>
        <x-match-champ-ally :matchDetails="$matchDetails['participants'][1]"/>
        <x-match-champ-ally :matchDetails="$matchDetails['participants'][2]"/>
        <x-match-champ-ally :matchDetails="$matchDetails['participants'][3]"/>
        <x-match-champ-ally :matchDetails="$matchDetails['participants'][4]"/>
    </div>

    <div class="grid grid-cols-5 gap-2 ">
        <x-match-champ-enemy :matchDetails="$matchDetails['participants'][5]"/>
        <x-match-champ-enemy :matchDetails="$matchDetails['participants'][6]"/>
        <x-match-champ-enemy :matchDetails="$matchDetails['participants'][7]"/>
        <x-match-champ-enemy :matchDetails="$matchDetails['participants'][8]"/>
        <x-match-champ-enemy :matchDetails="$matchDetails['participants'][9]"/>
    </div>
</div>