<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/inconheader.png')}}" >
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/project.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="{{ asset('github-widget-master\github-widget.css') }}" rel="stylesheet" type="text/css" />
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
          <div class="github-widget" data-user="jcyrille972"></div>
          <script src="{{ asset('github-widget-master/github-widget.min.js') }}"></script>

</body>
</html>     