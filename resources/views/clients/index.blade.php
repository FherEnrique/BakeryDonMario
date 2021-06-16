@extends('..layouts.homeLayout')
@section('container')
<div>
  <ul>
    @foreach ($clients as $client)
      <li>{{ $client->name }}</li>
    @endforeach
  </ul>
</div>
@endsection