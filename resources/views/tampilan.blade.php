<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
     crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SISTEM INFORMASI GEOGRAFIS DBD KAB. SIDRAP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
</nav>

    <a href="/test">home</a>
    <p>input</p>
    <p>Tahun</p>

    <div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    Silahkan Pilih Tahun
  </button>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
    <!--<button class="dropdown-item" type="button">2019</button>
    <button class="dropdown-item" type="button">2018</button>
    <button class="dropdown-item" type="button">2017</button>
    <button class="dropdown-item" type="button">2016</button>
    <button class="dropdown-item" type="button">2015</button>-->

    @foreach($tahun as $t)
        <button class="dropdown-item" type="button">{{$t->tahun}}</button>
    @endforeach

  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    Silahkan Pilih Kecamatan
  </button>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
    

    @foreach($kecamatans as $kec)
        <button class="dropdown-item" type="button">{{$kec->kecamatan}}</button>
    @endforeach
  </div>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
    Silahkan Pilih kelompok
  </button>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
    

    @foreach($kelompok as $kel)
        <button class="dropdown-item" type="button">C{{$kel->kelompok}}</button>
    @endforeach
  </div>
</div>

<div id="mapid"></div>

<style>
#mapid { height: 180px; }
</style>

<script>
var mymap = L.map('mapid').setView([51.505, -0.09], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiaXRza3VyMTUiLCJhIjoiY2toYWQzaG11MDB3NDJxcDdwcnc0bjJjMiJ9.udRM6CbTx3Wo76lDTgO-Vg'
}).addTo(mymap);


var circle = L.circle([51.508, -0.11], {
    color: 'blue',
    fillColor: '#303',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap);

var polygon = L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
], {
    color: 'blue',
    fillColor: '#123',
}).addTo(mymap);


</script>

  </body>
</html>