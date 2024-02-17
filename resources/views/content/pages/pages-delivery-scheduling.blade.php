@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Shipment ID</th>
      <th scope="col">Route ID</th>
      <th scope="col">Delivery Date</th>
      <th scope="col">Delivery Status</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
    </tr>


  </tbody>
</table>

@endsection
