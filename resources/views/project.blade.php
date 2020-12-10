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
          <section id="work" class="portfolio-mf sect-pt4 route"> 
          <div class="row"> 
           @foreach($Project as $key => $value)    
        <div class="col-md-4">        
          <div class="work-box">
            <a href="{{ asset('img/IMG_0237.jpeg') }}" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="{{ asset('img/IMG_0237.jpeg') }}" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">{{ $value->title }}</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">{{ $value->create_date }}</span>
                    </div>
                    <div class="w-more">
                    {{ $value->description }}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="ion-ios-plus-outline"></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
       @endforeach 
      </div>
      
          </section>
</body>
</html>     