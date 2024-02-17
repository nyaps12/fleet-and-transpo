@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle  Type</th>
      <th scope="col">Plate Number</th>
      <th scope="col">Capacity</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
    </tr>


  </tbody>
</table>
@endsection
