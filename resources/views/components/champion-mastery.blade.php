<div class="flex flex-col justify-between items-center h-10/12 my-auto">
    <div class="flex flex-col justify-evenly items-center h-full">
        <h1 class="font-montserrat">{{ $champMasteries->staticData->name}}</h1>

        <div>
            <img src="{{ 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/'.$champMasteries->staticData->image->full }}" style="width: 80px">
        </div>
    </div>
    
    <div class="flex flex-col justify-evenly items-center h-full">
        <img src="{{ asset('images/masteryLevel/mastery-'.$champMasteries->championLevel.'.png') }}" alt="">
        <h1>{{ $champMasteries->championPoints}}</h1>
   </div>
</div>
