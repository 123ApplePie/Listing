<x-guest-layout>
    <section class="py-24 border border-b-[#f84525] border-b-8 flex items-center justify-center h-1/2 w-screen bg-cover relative" style="background-image: url('img/slider-kat-1.jpg');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
    
        <div class="mx-auto relative z-10 mt-24 flex flex-col items-center">
            <div class="flex justify-center items-center">
                <p class="px-4 py-2 text-lg font-medium text-white bg-[#f84525] rounded-3xl">
                    Mapping
                </p>
            </div>
    
            <div class="text-center">
                <h1 class="text-[3.5rem] font-bold leading-[4rem] tracking-tight text-white">
                    Heb je vragen?
                </h1>
    
                <p class="mt-3 text-lg leading-relaxed text-slate-400">
                    Voor meer informatie kun je ons een bericht sturen.
                </p>
            </div>
        </div>
    </section>

    <style>
        #map { height: 400px; }
    </style>

    <div id="location-display" class="hidden">
        <p>Loading...</p>
    </div>

    <div>
        <style>
            #journal-scroll::-webkit-scrollbar {
                width: 4px;
                cursor: pointer;
            }

            #journal-scroll::-webkit-scrollbar-track {
                background-color: rgba(229, 231, 235, var(--bg-opacity));
            }

            #journal-scroll::-webkit-scrollbar-thumb {
                cursor: pointer;
                background-color: #a0aec0;
            }
        </style>
    
        <div class="container mx-auto py-10 flex justify-center h-screen">
            <div class="w-1/2 pl-4 h-full flex flex-col">
                <div class="bg-white text-md text-[#1e3a8a] font-bold px-5 py-2 shadow border-b border-gray-300">
                    Op basis van jouw locatie zijn binnen een straal van 20 km de dichtstbijzijnde dierenartsen:
                </div>
                
                <div class="w-full h-full overflow-auto shadow bg-white" id="journal-scroll">
                    <table class="w-full">
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        var userLocation = {};
        var cities = @json($cities);
        var companies = @json($companies);
    
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError, { enableHighAccuracy: true });
        } else {
            document.getElementById('location-display').innerHTML = "Geolocation is not supported by this browser.";
        }
    
        function showPosition(position) {
            var userLatitude = position.coords.latitude;
            var userLongitude = position.coords.longitude;
    
            var nearbyCities = cities.filter(function(city) {
                var cityLatitude = city.latitude;
                var cityLongitude = city.longitude;
                var distance = getDistance(userLatitude, userLongitude, cityLatitude, cityLongitude);
                return distance <= 20;
            });
    
            displayCompaniesInCities(nearbyCities);
        }
    
        function getDistance(lat1, lon1, lat2, lon2) {
            var R = 6371;
            var dLat = deg2rad(lat2 - lat1);
            var dLon = deg2rad(lon2 - lon1);
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var distance = R * c;
            return distance;
        }
    
        function deg2rad(deg) {
            return deg * (Math.PI / 180);
        }
    
        function displayCompaniesInCities(nearbyCities) {
            var tableBody = document.getElementById('journal-scroll');
    
            nearbyCities.forEach(function(city) {
                var cityCompanies = companies.filter(function(company) {
                    return company.city_id === city.id;
                });
    
                cityCompanies.forEach(function(company) {
                    var row = document.createElement('tr');
                    row.innerHTML = `
                        <td class="pl-5 pr-3 whitespace-no-wrap"><span class="font-bold">Stad: </span>${city.accentcity}</td>
                        <td class="px-2 py-2 whitespace-no-wrap"><span class="font-bold">Naam: </span>${company.company}</td>
                        <td class="px-2 py-2 whitespace-no-wrap"><span class="font-bold">Telefoon: </span>${company.phone}</td>
                        <td class="px-2 py-2 whitespace-no-wrap"><a class="bg-green-500 text-white px-4 py-2 font-semibold rounded-lg" href="/details/${company.id}">Meer Info</a></td>
                    `;
                    tableBody.appendChild(row);
                });
            });
        }
    
        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    document.getElementById('location-display').innerHTML = "User denied the request for Geolocation.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    document.getElementById('location-display').innerHTML = "Location information is unavailable.";
                    break;
                case error.TIMEOUT:
                    document.getElementById('location-display').innerHTML = "The request to get user location timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    document.getElementById('location-display').innerHTML = "An unknown error occurred.";
                    break;
            }
        }
    </script>
</x-guest-layout>
