<?php 
$name = $_POST["name"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$description = $_POST["description"];
$comments = $_POST["comments"];
 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title></title>
  <script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
  <style>
    body {
      margin: 0;
      padding :0;
    }
    .map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
<div id='map-popups' class='map'> </div>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoibWVldHAxMTk3IiwiYSI6ImNqNXpkeG43ZTA3cWIyd3BvanB1amJuMm0ifQ.5N-5DyWjWAPvOL3d0XEO9g';
var mapPopups = L.mapbox.map('map-popups', 'mapbox.light')
  .setView([<?php echo $latitude ?>, <?php echo $longitude ?>], 9);
var myLayer = L.mapbox.featureLayer().addTo(mapPopups);

var geojson = [
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [<?php echo $longitude ?>, <?php echo $latitude ?>]
    },
    properties: {
      title: '<?php echo $name ?>',
      description: '<?php echo $description ?>',
      'marker-color': '#3bb2d0',
      'marker-size': 'large',
      'marker-symbol': 'rocket'
    }
  },
 
];
myLayer.setGeoJSON(geojson);
mapPopups.scrollWheelZoom.disable();
</script>
</body>
</html>