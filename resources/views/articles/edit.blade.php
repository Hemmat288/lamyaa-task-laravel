@extends('layout.navbar')
@section("contact")
    <h1 class="text-center text-danger">
        Edit Articles
    </h1>

    <form class="container" action="/articles/{{$data['id']}}" method="POST">
        @method("put")
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" value="{{old('title',$data['title'])}}" class="form-control" name="title">
          <label  class="text-danger">{{$errors->first('title')}}</label>

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" value="{{old('body',$data['body'])}}"  class="form-control" name="body" style="height: 100px">
          <label  class="text-danger">{{$errors->first('body')}}</label>

        </div>
          {{-- <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" value="{{old('body',$data['body'])}}" name="body" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label  class="text-danger">{{$errors->first('body')}}</label>

        </div> --}}
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Rate</label>
          <input type="text" value="{{old('rate',$data['rate'])}}"  class="form-control" name="rate" >
          <label  class="text-danger">{{$errors->first('rate')}}</label>

        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>



@endsection
