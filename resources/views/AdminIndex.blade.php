<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('img/inconheader.png')}}">
  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <title>Jérémie CYRILLE</title>
</head>

<body>
  <nav class="navbar navbar bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('/')}}">Jeremie CYRILLE</a>
      </div>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/about')}}">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/project')}}">Project</a>
        </li>
      </ul>
    </div>
  </nav>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <td>Title</td>
        <td>Description</td>
        <td>creation date </td>
        <td>late update</td>
        <td>city</td>
        <td>enabled/disable</td>
        <td>delete</td>
      </tr>
    </thead>
    @foreach($Project as $key => $value)
    <tr>
      <td>{{ $value->title }}</td>
      <td>{{ $value->description }}</td>
      <td>{{ $value->create_date }}</td>
      <td>{{ $value->create_update}}</td>
      <td>{{ $value->enabled}}</td>
      <td>
        <a class="btn btn-small btn-success" href="{{ URL::to('admin/update/' . $value->id) }}">Edit</a>
      </td>
      <td>
        <a class="btn btn-small btn-success" href="{{ URL::to('admin/delete/' . $value->id) }}">delete</a>
      </td>
    </tr>


    @endforeach
</body>

</html>