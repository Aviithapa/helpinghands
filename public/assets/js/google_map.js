var marker;
var map;
var txt_lat, txt_lon;
function loadMap(lat_id, lon_id){
    txt_lat = lat_id;
    txt_lon = lon_id;
}
function initAutocomplete() {
    var center = new google.maps.LatLng(27.70450, 85.30712);
    map = new google.maps.Map(document.getElementById('google-map'), {
        center: center,
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();
        if (places.length == 0) {
            return;
        }
        // Clear out the old markers.
        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            addMarker(place.geometry.location)
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
    map.addListener('click', function(event) {
        addMarker(event.latLng);
    });
    function addMarker(location) {
        if (marker) {
            marker.setMap(null);
        }
        marker = new google.maps.Marker({
            position: location,
            title: 'This place',
            draggable: true,
            map: map
        });
        setLatLng(location);
    }
    function setLatLng(location) {
        // var custom_lat = document.getElementsByName("geo_lat-"+source);
        // var custom_lng = document.getElementsByName("geo_lng-"+source);
        // var custom_lat = document.getElementsByName(txt_lat);
        // var custom_lng = document.getElementsByName(txt_lon);
        // custom_lat[0].value = location.lat();
        // custom_lng[0].value = location.lng();
        $('#js-input-latitude').val(location.lat());
        $('#js-input-longitude').val(location.lng());
    }
    $("#google-map-modal").on("shown.bs.modal", function(e) {
        google.maps.event.trigger(map, 'resize', {});
        map.setZoom(15);
        map.setCenter(center);
    });
}