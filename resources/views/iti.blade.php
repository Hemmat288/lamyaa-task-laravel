{{-- <h1>
    welcome {{$data}}
</h1> --}}
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<table class="table table-success table-striped">
    @if(!empty($data))
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  @endif
  <tbody>
      {{-- @if ($desc>10 )
welcome
      @endif --}}
      @forelse ($data as $item)
<h1 class="text-warning">
    {{$item["title"]}}
</h1>
      @empty
enter vaild posts
      @endforelse


@foreach ($data as $item)
    <tr>
        <td>
            {{$item["title"]}}
        </td>
         <td>
            {{$item["description"]}}
        </td>
     <td>   <button type="button" class="btn btn-success">View</button></td>
 <td> <button type="button" class="btn btn-warning">Edit</button></td>
   <td> <button type="button" class="btn btn-danger">Delete</button></td>
    </tr>

@endforeach



  </tbody>
</table>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
{{-- <h3>
    @foreach ($data as $item)
{{$item}}
@endforeach
</h3> --}}
