@extends('..layouts.homeLayout')
@section('container')
<div>
  <ul>
      <li>{{ $client->name }}</li>
  </ul>
</div>
@endsection