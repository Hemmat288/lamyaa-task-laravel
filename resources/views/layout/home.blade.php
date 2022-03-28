@extends('layout.navbar')
@section('home')
 {{-- <img src="{{URL::asset('/image/favicon.ico')}}" alt="profile Pic" height="500" width="500"> --}}
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL::asset('/image/favicon.ico')}}" class="d-block w-100" alt="..." height="500" width="500">
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('/image/b.jpg')}}"class="d-block w-100" alt="..." height="500" width="500">
    </div>
    <div class="carousel-item">
      <img src="{{URL::asset('/image/c.jpg')}}" class="d-block w-100" alt="..." height="500" width="500">
    </div>
      <div class="carousel-item">
      <img src="{{URL::asset('/image/cont1.jpg')}}" class="d-block w-100" alt="..." height="500" width="500">
    </div>
      <div class="carousel-item">
      <img src="{{URL::asset('/image/pl.jpg')}}" class="d-block w-100" alt="..." height="500" width="500">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
Home

@endsection
