<?php
// maps-one.php
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
var map;
<?php $code = get_sub_field( 'point-one' );?>
var myLatLang = new google.maps.LatLng(<?php echo esc_attr( $code['coordinates'] );?>);
function initialize() {
var mapOptions = {
zoom: 15,
center: myLatLang,
mapTypeId: google.maps.MapTypeId.ROADMAP
};
map = new google.maps.Map(document.getElementById('map-canvas<?php echo esc_attr( get_the_ID() );?>'),
mapOptions);
var marker = new google.maps.Marker({
position: myLatLang,
map: map,
title:"Hello World!"
});
};
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map-canvas<?php echo esc_attr( get_the_ID() );?>" style="height: 300px"></div>
