@extends('layout.navbar')
@section('contact')

{{-- user Details --}}

   <div class="card container" style="width: 18rem;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
      <img src="{{URL::asset('/image/favicon.ico')}}" class="d-block w-100" alt="..." height="150" width="100">

        <div class="card-body">
          <h1 class="card-title">{{$data["name"]}}</h1>
          <h5 class="card-text">{{$data["email"]}}</h5>
          <a href="/articles" class="btn btn-secondary">Back To Article</a>
        </div>
      </div>
@endsection
