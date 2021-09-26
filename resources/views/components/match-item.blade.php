<div class="w-10 h-10 flex items-center justify-center p-1 bg-gray-500 m-1">
    @if ($matchDetails == 0)
        <h1 class="text-gray-400">N/A</h1> 
    @else
        <img src={{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/item/'.$matchDetails.'.png' }}>
    @endif
</div>