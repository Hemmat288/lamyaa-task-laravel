@extends('layout.navbar')
@section('show')



   <div class="card container" style="width: 18rem;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
      <img src="{{URL::asset('/image/favicon.ico')}}" class="d-block w-100" alt="..." height="150" width="100">

        <div class="card-body">
          <h5 class="card-title">{{$data["title"]}}</h5>
          <p class="card-text">{{$data["body"]}}</p>
          <p class="card-text">{{$data["slug"]}}</p>
          <a href="/posts" class="btn btn-success">Back To Posts</a>
        </div>
      </div>
@endsection

