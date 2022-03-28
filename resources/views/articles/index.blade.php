@extends('layout.navbar')
@section('posts')


<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >
<div class="container">
<a class="btn btn-success"href="articles/create"> Add New Articles</a>
@can("isAdmin")
<h1 class="text-success">Welcome Admin</h1>
@elsecan("isUser")
<h1 class="text-success">Welcome User</h1>
@elsecan("isManager")
<h1>Welcome Manager</h1>

@endcan
<table class="table table-success table-striped">
    @if(!empty($data))

  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Rate</th>
      <th scope="col">Author</th>
      <th scope="col">Details</th>
      <th scope="col">View</th>
{{-- dd($user) --}}

  <th scope="col">Edit</th>
      <th scope="col">Delete</th>



    </tr>
  </thead>

  @endif
  <tbody>



@foreach ($data as $item)
    <tr>
          <td>
            {{$loop->iteration}}
        </td>
        <td>
            {{$item["title"]}}
        </td>
         <td>
            {{$item["body"]}}
        </td>
          <td>
            {{$item["rate"]}}
        </td>
          <td>
              <a href="users/{{$item->user->id}}">
            {{$item->user->name}}
          </a>
        </td>
        {{-- @dd($user) --}}
          <td>

              <a href="{{route('user.articles',$item->user)}}">
            {{$item->user->name}} Show Articles
          </a>
        </td>

     <td>   <a type="button" class="btn btn-success" href="/articles/{{$item['id']}}">View</a></td>
     @if ($item->user_id==$user)

 <td> <a type="button" class="btn btn-warning"  href="/articles/{{$item['id']}}/edit">Edit</a></td>


<td><form action="/articles/{{$item['id']}}" method="POST">
    @method("delete")
     @csrf

        <button type="submit" class="btn btn-danger"> Delete</button>

</form></td>
@endif
    </tr>

@endforeach



  </tbody>
</table>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>

</html>


@endsection
