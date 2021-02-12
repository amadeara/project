@extends('layout/main')

@section('container')


<div class="container mt-10">
  <div class="row mt-10">
  <div class="card mb-3 m-10" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/{{ $movie->photo }}" class="card-img" alt="...">
    </div>
      <div class="col-md-8">
        <div class="card-body mt-10">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">{{ $movie->description }}</p>
          
          <ul class="list-group">
          @foreach($episodes as $lis)
              @if($lis->movie_id === $movie->id)
              <li class="list-group-item active">{{ $lis->title }}</li>
              @endif
          @endforeach
          </ul>
        

        </div>
    </div>
  </div>
  </div>
</div>

@endsection