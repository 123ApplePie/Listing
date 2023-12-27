<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
</head>
<body>

<style>
    #map { height: 400px; }
</style>

<div id="location-display" class="hidden">
    <p>Loading...</p>
</div>

<div id="map"></div>

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
      <div class="w-full pl-4  h-full flex flex-col">
                      <div class="bg-white text-sm text-gray-500 font-bold px-5 py-2 shadow border-b border-gray-300">
                          Tracking events
                      </div>
                      
                      <div class="w-full h-full overflow-auto shadow bg-white" id="journal-scroll">
  
                      <table class="w-full">
  
  
                          <tbody class="">
                                                      <tr class="relative transform scale-100
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
  
                              </tr>
                                                      <tr class="relative transform scale-100
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
  
                              </tr>
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

<script>
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
</script>

</body>
</html>
