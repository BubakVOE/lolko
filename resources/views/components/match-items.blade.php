<div class="flex flex-col items-center justify-between h-full ">
    <div>
        <h1>Tvé itemy</h1>
    </div>

    <div class="grid grid-cols-4">
        <x-match-item :matchDetails="$matchDetails['item0']"/>
        <x-match-item :matchDetails="$matchDetails['item1']"/>
        <x-match-item :matchDetails="$matchDetails['item2']"/>
        <x-match-item :matchDetails="$matchDetails['item3']"/>
        <x-match-item :matchDetails="$matchDetails['item4']"/>
        <x-match-item :matchDetails="$matchDetails['item5']"/>
        <x-match-item :matchDetails="$matchDetails['item6']"/>
    </div>
</div>