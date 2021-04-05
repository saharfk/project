function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat:37.19365335520844, lng: 49.64100578881923};

    var map = new google.maps.Map(document.getElementById('myMap'), {
        zoom: 15,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'University of Guilan, IR' // Title Location
    });
}
