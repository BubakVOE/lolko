<div style="width: 12%" class="fixed left-0 h-full flex justify-between flex-col  bg-black p-5 z-20 ">
    <div>
        <img src="{{ asset('images/logo.png') }}">
    </div>

    <div>
        <div class="py-2 ">
            <a href="{{ route('nav-home') }}" class="{{ active(['/']) }} py-2 px-3 border-gray-800 flex items-center justify-between text-blue-light font-poppins capitalize border-b-2 hover:border-blue-light transition text-lg">
                <h1 class="mr-3">Domů</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>
        </div>
    
        <div class="py-2 ">
            <a href="{{ route('summoner-index') }}" class="{{ active(['summoners']) }} py-2 px-3 border-gray-800 flex items-center justify-between text-blue-light font-poppins capitalize border-b-2 hover:border-blue-light transition text-lg">
                <h1 class="mr-3">Hráči</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
            </a>
        </div>

        <div class="py-2">
            <a href="{{ route('champion-index') }}" class=" {{ active(['champions', 'champions/']) }} py-2 px-3 border-gray-800 flex items-center justify-between text-blue-light font-poppins capitalize border-b-2 hover:border-blue-light transition text-lg">
                <h1 class="mr-3">Champions</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </a>
        </div>

        <div class="py-2 ">
            <a href="{{ route('items-index') }}" class="{{ active(['items']) }} py-2 px-3 border-gray-800 flex items-center justify-between text-blue-light font-poppins capitalize border-b-2 hover:border-blue-light transition text-lg">
                <h1 class="mr-3">itemy</h1>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
            </a>
        </div>
    </div>

        
    <div>
        <a href="{{ route('news-index') }}" class=" {{ active(['novinky', 'novinky/']) }} border-l-2 border-r-2 border-gray-800 py-2 px-3 flex items-center justify-between text-blue-400 font-poppins capitalize text-lg">
            <h1 class="mr-3">Novinky</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
        </a>
    </div>
</div>



