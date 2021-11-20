@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">{{ $description }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">{{ $author }}</p>
    </div>
  </div>
</div>
@endsection
