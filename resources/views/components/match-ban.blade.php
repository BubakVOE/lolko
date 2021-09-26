<div>
    <h1>Banned</h1>
</div>

<div class="grid grid-cols-1 gap-y-2 pb-5">

    <x-match-ban-ally :alliesBanned="$alliesBanned" :alliesBanData="$alliesBanData"/>

    <x-match-ban-enemy :enemiesBanned="$enemiesBanned" :enemiesBanData="$enemiesBanData"/> 
</div>