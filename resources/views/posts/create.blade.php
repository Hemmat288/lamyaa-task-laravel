@extends('layout.navbar')
@section("contact")
    <h1 class="text-center text-success">
        Create Post
    </h1>

    <form class="container" action="/store" method="post">
        
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text"  class="form-control" name="title">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" class="form-control" name="description" >
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Slug</label>
          <input type="text" class="form-control" name="slug" >
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>



@endsection
