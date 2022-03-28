 @extends('layout.navbar')
@section('contact')
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >

    {{-- {{dd($auth()->user->name)}} --}}

{{-- <p>{{$data}}</p> --}}
@foreach ($data as $item)

          <div {{$item->user->id}}>
            {{$item->user->name}} Profile
          </div>

        @endforeach

<table class="table table-info table-hover">
    @if(!empty($data))
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Article Title</th>
      <th scope="col">Article Description</th>
      <th scope="col"> Article Rate</th>
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
    </tr>

@endforeach



  </tbody>
</table>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>

</html>

@endsection
