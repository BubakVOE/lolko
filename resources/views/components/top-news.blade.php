<div class="relative w-10/12 m-auto z-20">
    <div class="absolute flex items-center bg-gradient-to-r mt-5 from-gray-500 to-gray-light shadow-out w-full m-auto ">
        <div class="mx-auto w-11/12 ">
            <div class="flex justify-evenly w-6/12  my-5 mx-auto ">
                <a href="{{ route('news-lolko') }}" class="w-full mx-2 {{ active('web') }}">
                    <div class=" h-16 flex justify-evenly items-center w-full shadow-insetSmaller rounded-xl p-2 mx-5 cursor-pointer">
                        <h1 class="ml-5 font-poppins ">League of legends</h1>
                    </div>
                </a>

                <a href="{{ route('news-web') }}" class="w-full mx-2 {{ active('lolko') }}">
                    <div class="h-16 flex justify-evenly items-center w-full rounded-xl p-2 mx-5 cursor-pointer hover:shadow-insetSmaller text-gray-700 hover:text-black" >
                        <h1 class="ml-5 font-poppins ">Web</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
