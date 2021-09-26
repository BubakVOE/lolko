<footer class="bg-black py-4 absolute right-0" style="width: 88%">
    <div class="grid grid-cols-3 w-10/12 m-auto">

        <div class="text-left">
            <x-footer-text footer-text='Další odkazy'/>

            <div class="flex justify-evenly flex-col">
                <a href="{{ route('champion-index') }}" class="text-gray-500 hover:text-white">Postavy</a>
                <a href="{{ route('summoner-index') }}" class="text-gray-500 hover:text-white">Nejlepší hráčí</a>
                <a href="#" class="text-gray-500 hover:text-white">Itemy</a>
            </div>
        </div>

        <div class="text-center">
            <x-footer-text footer-text='Sociální sítě'/>

            <div class="flex justify-evenly items-center w-4/12 m-auto ">
                <div class="bg-gray-500 hover:bg-blue-500 rounded-full  m-1">
                    <img src="{{ asset('images/socialmeadia/facebook.png') }}" style="width: 40px;">
                </div>
                <div class="bg-gray-500 hover:bg-red-500 rounded-full  m-1">
                    <img src="{{ asset('images/socialmeadia/youtube.png') }}" style="width: 40px;">
                </div>
                <div class="bg-gray-500 bg-gradient-to-br hover:from-purple-700 hover:to-pink-400 rounded-full  m-1">
                    <img src="{{ asset('images/socialmeadia/instagram.png') }}" style="width: 40px;">
                </div>
            </div>

        </div>

        <div class="text-right">
            <x-footer-text footer-text='Kontaktuje nás'/>

            <div class="float-right">
                <div class="text-gray-500">
                    <h1>Olomouc, Smetanovy Sady</h1>
                    <h1>BubakVOE@gmail.com</h1>
                    <h1>+420 730 681 670</h1>
                </div>
            </div>
        </div>

    </div>
</footer>