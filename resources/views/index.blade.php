@extends('layout/main')


@section('container')

<div class="container">
  <div class="row">
    @foreach($movies as $movies)
    <div class="col mt-5">
    <div class="card" style="width: 18rem;">
    <img src="{{ $movies->photo }}" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">{{ $movies->title }}</h5>

      <a href="/film/{{ $movies->id }}" class="btn btn-dark">Lihat Film</a>
      </div>
    </div>
  </div>
  @endforeach  
</div>

@endsection