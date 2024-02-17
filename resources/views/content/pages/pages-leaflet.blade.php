@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/vendor/libs/leaflet/leaflet.css" />
</head>
<body>
<div class="leaflet-map" id="basicMap"></div>

<script>
  const basicMap = L.map('basicMap').setView([42.35, -71.08], 10);
L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
  maxZoom: 18
}).addTo(basicMap);
</script>
</body>
</html>

@endsection
