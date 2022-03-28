@extends('layout.navbar')
@section('contact')



   <div class="card container" style="width: 18rem;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
      <img src="{{URL::asset('/image/favicon.ico')}}" class="d-block w-100" alt="..." height="150" width="100">

        <div class="card-body">
          <h5 class="card-title">{{$data["title"]}}</h5>
          <p class="card-text">{{$data["body"]}}</p>
          <p class="card-text">{{$data["rate"]}}</p>
          <a href="/articles" class="btn btn-success">Back To Articles</a>
        </div>
      </div>
      <div class="card container" style="width: 50rem;">
      <h6> add comment</h6>
      <form action="{{route('comments.store')}}" method="POST">
@csrf
<textarea class="form-control" name="body">
</textarea>
<input type="text" name="article_id" hidden value="{{$data->id}}">
<input type="submit" class="btn btn-danger" value="Add Comment">
    </form>
      </div>
      @include('articles.displaycomment',['comments'=>$data->comments,"article_id"=>$data->id])
@endsection
