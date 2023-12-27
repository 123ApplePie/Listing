<x-guest-layout>
    <section class="py-24 border border-b-[#f84525] border-b-8 flex items-center justify-center h-1/2 w-screen bg-cover relative" style="background-image: url('img/slider-kat-1.jpg');">
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black opacity-60"></div>
    
        <!-- Content Container -->
        <div class="mx-auto relative z-10 mt-24 flex flex-col items-center">
          <!-- Container div with margin, positioning, z-index, and flex properties -->
          
          <div class="flex justify-center items-center">
              <!-- Child div with width set to half the parent's width -->
              <p class="px-4 py-2 text-lg font-medium text-white bg-[#f84525] rounded-3xl">
                  Mapping
              </p>
              <!-- Paragraph with text styling, background color, and rounded corners -->
          </div>
      
          <div class="text-center">
              <!-- Another child div with text center alignment -->
      
              <h1 class="text-[3.5rem] font-bold leading-[4rem] tracking-tight text-white">
                  Heb je vragen?
              </h1>
              <!-- Heading with specific text styling -->
      
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

    {{-- <div id="map" class="mt-8"></div> --}}

    <div>
        <!-- component -->
<style>
    #journal-scroll::-webkit-scrollbar {
              width: 4px;
              cursor: pointer;
              /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/
  
          }
          #journal-scroll::-webkit-scrollbar-track {
              background-color: rgba(229, 231, 235, var(--bg-opacity));
              cursor: pointer;
              /*background: red;*/
          }
          #journal-scroll::-webkit-scrollbar-thumb {
              cursor: pointer;
              background-color: #a0aec0;
              /*outline: 1px solid slategrey;*/
          }
  </style>
  
  <div class="container mx-auto py-10 flex justify-center h-screen">
      <div class="w-4/12 pl-4  h-full flex flex-col">
                      <div class="bg-white text-sm text-gray-500 font-bold px-5 py-2 shadow border-b border-gray-300">
                          Op basis van jouw locatie zijn binnen een straal van 20km dit de dichtsbijzijnde dierenartsen
                      </div>
                      
                      <div class="w-full h-full overflow-auto shadow bg-white" id="journal-scroll">
  
                      <table class="w-full">
  
  
                          <tbody class="">
                            {{-- <tr class="relative transform scale-100
                                          text-xs py-1 border-b-2 border-blue-100 cursor-default
  
                                  bg-blue-500 bg-opacity-25">
                                  <td class="pl-5 pr-3 whitespace-no-wrap">
                                      <div class="text-gray-400">Today</div>
                                      <div>07:45</div>
                                  </td>
  
                                  <td class="px-2 py-2 whitespace-no-wrap">
                                      <div class="leading-5 text-gray-500 font-medium">Taylor Otwel</div>
                                      <div class="leading-5 text-gray-900">Create pull request #1213
                                          <a class="text-blue-500 hover:underline" href="#">#231231</a></div>
                                      <div class="leading-5 text-gray-800">Hello message</div>
                                  </td>
  
                              </tr> --}}
                                                      <tr class="relative transform scale-100
                                          text-xs py-1 border-b-2 border-blue-100 cursor-default
  
                                  ">
                                  <td class="pl-5 pr-3 whitespace-no-wrap">
                                      <div class="text-gray-400">24 jule</div>
                                      <div>07:45</div>
                                  </td>
  
                                  <td class="px-2 py-2 whitespace-no-wrap">
                                      <div class="leading-5 text-gray-500 font-medium">Taylor Otwel</div>
                                      <div class="leading-5 text-gray-900">Create pull request #1213
                                          <a class="text-blue-500 hover:underline" href="#">#231231</a></div>
                                      <div class="leading-5 text-gray-800">Hello message</div>
                                  </td>
  
                              </tr>
                        </tbody>
                      </table>
                      </div>
                      
                  </div>
  </div>
    </div>
    {{-- <script>
        var userLocation = {}; // Object to store user's location data
    
        // Check if the browser supports Geolocation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError, { enableHighAccuracy: true });
        } else {
            document.getElementById('location-display').innerHTML = "Geolocation is not supported by this browser.";
        }
    
        function showPosition(position) {
            // Get the latitude and longitude
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
    
            // Save the location data to the userLocation object
            userLocation.latitude = latitude;
            userLocation.longitude = longitude;
    
            // Display the location on the page
            document.getElementById('location-display').innerHTML = "Your current location is: <br> Latitude: " + latitude + "<br> Longitude: " + longitude;
    
            // Initialize the map with the user's location
            var map = L.map('map').setView([latitude, longitude], 13);
    
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
    
            // a marker at the user's current location
            var marker = L.marker([latitude, longitude]).addTo(map);
    
            // red circle with a radius of 20 km
            var circle = L.circle([latitude, longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.2,
                radius: 20000 // 20 km in meters
            }).addTo(map);
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
    </script> --}}

    <script>
        var userLocation = {}; // Object to store user's location data
        var cities = @json($cities); // Assuming $cities is a Laravel variable
        var companies = @json($companies); // Assuming $companies is a Laravel variable
    
        // Check if the browser supports Geolocation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError, { enableHighAccuracy: true });
        } else {
            document.getElementById('location-display').innerHTML = "Geolocation is not supported by this browser.";
        }
    
        function showPosition(position) {
            // Get the latitude and longitude
            var userLatitude = position.coords.latitude;
            var userLongitude = position.coords.longitude;
    
            // Filter cities within 20km
            var nearbyCities = cities.filter(function(city) {
                var cityLatitude = city.latitude;
                var cityLongitude = city.longitude;
    
                var distance = getDistance(userLatitude, userLongitude, cityLatitude, cityLongitude);
    
                return distance <= 20;
            });
    
            // Display companies within the nearby cities
            displayCompaniesInCities(nearbyCities);
        }
    
        function getDistance(lat1, lon1, lat2, lon2) {
            var R = 6371; // Radius of the earth in km
            var dLat = deg2rad(lat2 - lat1);
            var dLon = deg2rad(lon2 - lon1);
            var a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var distance = R * c; // Distance in km
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
                        <td class="pl-5 pr-3 whitespace-no-wrap">${city.accentcity}</td>
                        <td class="px-2 py-2 whitespace-no-wrap">${company.company}</td>
                        <td class="px-2 py-2 whitespace-no-wrap">${company.phone}</td>
                        <td class="px-2 py-2 whitespace-no-wrap"><a href="/details/${company.id}">Link</a></td>
                    `;
                    tableBody.appendChild(row);
                });
            });
        }
    
        function showError(error) {
            // Handle geolocation errors
            // ...
        }
    </script>
        
</x-guest-layout>