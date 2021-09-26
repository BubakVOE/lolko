<div class="flex items-center w-full h-24 my-10 bg-gradient-to-r from-gray-500 to-gray-light shadow-out">
    <div class="flex items-center w-full p-2 justify-around ">

        <div class="w-1/12 flex flex-row items-center ">

            <h1 class="">obtížnost<span class="mx-2">-</span> </h1>

            @if ($champion->difficulty <= 3)
                <h1 class="text-lg  font-extrabold text-green-500">
                    <span class="text-green-500">easy</span>
                </h1>
            @elseif ($champion->difficulty <= 7)
                <h1 class="text-lg  font-extrabold text-green-500">
                    <span class="text-yellow-500">medium</span>
                </h1>
            @else
                <h1 class="text-lg  font-extrabold text-green-500">
                    <span class="text-red-500">hard</span>
                </h1>
            @endif            
        </div>


        <div class="text-center font-montserrat">
            <h1 class="my-1 text-3xl capitalize">{{ $champion->name }}</h1>
        </div>

        <div class="w-1/12 flex flex-row items-center ">
            <h1>typ<span class="mx-2">-</span></h1>
            @foreach ($tags as $tag)
                <h1 class="font-bold mx-1">{{ $tag }}</h1>
            @endforeach
        </div>
    </div>
</div>
