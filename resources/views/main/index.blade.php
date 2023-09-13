@extends('main.layout')
@section('content')

@if ( session()->has('success') )
<div class="alert alert-success block">
  <p>{{ session()->get('success') }}</p>
</div>
@endif

<div class="container">
    <div class="row">
        <h1>welcome {{Auth::user()->name}}</h1>
    </div>
</div>
@endsection