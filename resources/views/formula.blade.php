<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/inconheader.png')}}" >
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/formula.css') }}" rel="stylesheet">
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
    <div class="container">
    {{-- <form action="{{ route('admin.create') }}" method="POST'"> --}}
    {{ Form::open(array('route' => 'admin.create', 'method' => 'post')) }}
    
     @csrf
     <div class="form-group">
        <label for="exampleInput">Title</label>
        <input type="text" name="title" class="class-format">
        @if($errors->has('title'))
            <div class="error">{{ $errors->first('title') }}</div>
        @endif<br>
     </div>

     <div class="form-group">
        description:<br>
        <textarea type="text" name="description" class="class-format">lorem ipsum at stitamen</textarea>
        @if($errors->has('description'))
            <div class="error">{{ $errors->first('description') }}</div>
        @endif<br>
     </div>


     <div class="form-group">
        creation date:<br>
        <input type="date" name="create_date" class="class-format">
        @if($errors->has('create_date'))
            <div class="error">{{ $errors->first('create_date') }}</div>
        @endif<br>
     </div>

     <div class="form-group">
        last update<br>
        <input type="date" name="create_update" class="class-format">
         @if($errors->has('create_update'))
            <div class="error">{{ $errors->first('create_update') }}</div>
        @endif<br>
     </div>

     <div class="form-group">
        <input type="checkbox" name="enabled" class="class-format" value="1">enabled<br>
        <input type="checkbox" name="enabled" class="class-format" value="0">disenabled<br>
        
         @if($errors->has('enabled'))
            <div class="error">{{ $errors->first('enabled') }}</div>
        @endif<br>
     </div>
        <button type="submit"class="btn btn-primary">Create</button>

    {{ Form::close() }}    
    </div>
    </body>
</html>