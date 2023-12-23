<section class="py-24 border border-b-[#f84525] border-b-8 flex items-center justify-center h-screen w-screen bg-[url('https://www.usnews.com/dims4/USNEWS/d754e45/2147483647/crop/2000x1334+0+0/resize/970x647/quality/85/?url=https%3A%2F%2Fwww.usnews.com%2Fcmsmedia%2F75%2F77%2F28b9c03949ceb1e855bfa2b78c46%2F200109-veterinarian-stock.jpg')] bg-cover relative">
    <div class="absolute inset-0 bg-black opacity-60"></div><!-- Dark overlay -->
    <div class="mx-auto relative z-10">
        <div class="text-center">
            <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-white">Deskundige Zorg voor Jouw Trouwe Vriend, <br> Altijd <span class="text-[#f84525]">Dichtbij</span> .</h1>
            <p class="mt-3 text-lg leading-relaxed text-slate-400">Kwaliteitszorg voor je huisdier</p>
        </div>

        <div class="mt-24 items-center justify-center gap-4 relative">
            <div class="flex w-1/2">
                <select name="" id="" wire:model.live.debounce="provincie" class="block p-4 pl-10 w-1/2 text-sm text-white bg-[#f84525] rounded-tl-lg border-4 border-white shadow-md">
                    <option value="">--Provincie--</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region['region_code'] }}">{{ $region['region'] }}</option>
                    @endforeach
                </select>
                <select name="" id="" class="block p-4 pl-10 w-1/2 text-sm text-white bg-[#f84525] rounded-tr-lg border-4 border-white shadow-md">
                    <option value="">--Stad--</option>
                    @if (!empty($provincie))
                        @foreach ($cities as $city)
                            <option value="">{{ $city['accentcity'] }}</option>      
                        @endforeach
                    @endif
                </select>
            </div>
    
            <div class="relative w-full flex">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg>                
                </div>
                <input wire:model.live.lazy="search" type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-white rounded-bl-lg rounded-r-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Naam, Telefoon, Adres, ZIP-code..." autocomplete="off">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#f84525] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-[#f84525] font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Zoeken</button>
            </div>        

            <div class="absolute w-full left-0 bg-white rounded-lg mt-2 result hidden transition-opacity duration-300 ease-in-out">
                <!-- items -->
                <a href="/map" class="w-full flex p-3 pl-4 items-center hover:bg-red-100 rounded-lg cursor-pointer">
                    <div  class="flex items-center">
                        <div class="mr-4">
                            <div class="h-9 w-9 rounded-sm flex items-center justify-center text-3xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path>
                                    <path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="font-bold text-lg">Mijn Locatie</div>
                        </div>
                    </div>
                </a>
                
                <div class="w-full flex p-3 pl-4 items-center hover:bg-red-100 rounded-lg cursor-pointer">
                    <div class="mr-4">
                    </div>
                    <div>
                        <div class="font-bold text-lg">John Doe</div>
                        <div class="text-xs text-gray-500">
                            <span class="mr-2">No: 007886</span>
                            <span class="mr-2">gender: man</span>
                            <span class="mr-2">hobby: skiing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('default-search');
        const searchButton = document.querySelector('button[type="submit"]');
        const resultDiv = document.querySelector('.result');

        // Function to show results
        function showResults() {
            resultDiv.classList.remove('hidden');
        }

        // Function to hide results
        function hideResults() {
            resultDiv.classList.add('hidden');
        }

        // Event listener for input focus
        searchInput.addEventListener('focus', showResults);

        // Event listener for document mousedown to hide results
        document.addEventListener('mousedown', function (event) {
            const isClickInsideInput = searchInput.contains(event.target);
            const isClickInsideButton = searchButton.contains(event.target);
            const isClickInsideResult = resultDiv.contains(event.target);

            if (!isClickInsideInput && !isClickInsideButton && !isClickInsideResult) {
                hideResults();
            }
        });
    });
</script>
