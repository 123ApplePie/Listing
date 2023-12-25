<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    
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

        // Add a marker at the user's current location
        var marker = L.marker([latitude, longitude]).addTo(map);

        // Add a red circle with a radius of 20 km
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
