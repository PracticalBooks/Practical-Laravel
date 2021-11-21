@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
  <div class="card-header">
    Manage Products
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["products"] as $product)
        <tr>
          <td>{{ $product->getId() }}</td>
          <td>{{ $product->getName() }}</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
