
<div>
    @if ( $teamsDetails[0]['objectives']['baron']['first'] == true)
        <h1 class="font-bold">First baron <span class="font-normal">( {{  $teamsDetails[0]['objectives']['baron']['kills'] }}x )</span></h1>
    
        @else    
            <h1>enemy</h1>
    @endif

    @if ( $teamsDetails[0]['objectives']['champion']['first'] == true)
        <h1 class="font-bold">First blood</h1>
        @else
            <h1>enemy</h1>
    @endif

    @if ( $teamsDetails[0]['objectives']['dragon']['first'] == true)
        <div class="flex">
            <h1 class="font-bold">First drake <span class="font-normal">( {{ $teamsDetails[0]['objectives']['dragon']['kills'] }}x )</span></h1>
        </div>

        @else
            <h1>enemy</h1>
    @endif

    @if ( $teamsDetails[0]['objectives']['inhibitor']['first'] == true)
        <h1 class="font-bold">First inhibitor <span class="font-normal">( {{ $teamsDetails[0]['objectives']['inhibitor']['kills'] }}x )</span></h1>
    
        @else
            <h1>enemy</h1>
    @endif

    @if ( $teamsDetails[0]['objectives']['riftHerald']['first'] == true)
        <h1 class="font-bold">First Rift Herald <span class="font-normal">( {{ $teamsDetails[0]['objectives']['riftHerald']['kills'] }}x )</span></h1>
        
        @else
            <h1>enemy</h1>
    @endif

    @if ( $teamsDetails[0]['objectives']['tower']['first'] == true)
        <h1 class="font-bold">First tower <span class="font-normal">( {{ $teamsDetails[0]['objectives']['tower']['kills'] }}x )</span></h1>

        @else
            <h1>enemy</h1>
    @endif
</div>