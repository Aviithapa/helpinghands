<script>

    $('body').on('click', "button.genericMap",function(){
        loadMap("geo_lat", "geo_lng");
    });

</script>
<!--Map JS-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvICABM6mjEuXWsYsw0GZoxfGI7pQU9aw&libraries=places&callback=initAutocomplete" async defer></script>
<script src="{{asset('/assets/js/google_map.js')}}"></script>
