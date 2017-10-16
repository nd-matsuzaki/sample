<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>無題ドキュメント</title>
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script>
function init() {
  var map = L.map('map').setView([36.3219088　, 139.0032936], 14);
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
    maxZoom: 18
  }).addTo(map);
}
</script>
</head>
 
<body onload='init();'>

<?php include ('./conf/header.html'); ?>

<div id="map" style='width: 500px; height: 500px; border: solid 1px #999;'></div>

<?php include ('./conf/footer.html'); ?>

</body>
</html>
