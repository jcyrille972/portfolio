<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('img/inconheader.png')}}">
  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/about.css') }}" rel="stylesheet">
  <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
  <title>Jérémie CYRILLE</title>
</head>

<body>
  <nav class="navbar navbar-custom">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('/')}}">Jeremie CYRILLE</a>
      </div>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <button type="button">
            <a class="nav-link" href="{{URL::to('/')}}">Home <span class="sr-only">(current)</span></a>
          </button>
        </li>
        <li class="nav-item">
          <button type="button">
            <a class="nav-link" href="{{URL::to('/about')}}">About me</a>
          </button>
        </li>
        <li class="nav-item">
          <button type="button">
            <a class="nav-link" href="{{URL::to('/project')}}">Project</a>
          </button>
        </li>
      </ul>
    </div>
  </nav>@foreach($me as $key => $value)
  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="{{asset('img/IMG_0237.jpeg')}}" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">

                      <p><span class="title-s">Name: </span> <span>{{ $value->firstname }} {{ $value->lastname }}</span></p>
                      <p><span class="title-s">Profile: </span> <span>CS student</span></p>
                      <p><span class="title-s">Email: </span> <span>{{ $value->email }}</span></p>
                      <p><span class="title-s">Phone: </span> <span>{{ $value->phone }}</span></p>

                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Programing language:</p>
                  <p>HTML/CSS, JS,PHP(symfony/Laravel), C,SQL</p>
                  <p class="title-s">Programing skill:</p>
                  <p>Linux,git</p>
                  <p class="title-s">language:</p>
                  <p>fluent english</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  {!! $value->description !!}
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div> @endforeach
  </section>
  <section class="LOL">

    <div class="test">
      <p class="display-4">CARRER</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="{{asset('img/UHXzdngc_400x400.jpeg')}}" class="img-fluid rounded b-shadow-a" alt="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">School: ETNA </span> </p>
                    <p><span class="title-s">branch: CS </span>
                    <p><span class="title-s">Years: 2020-2023</span></p>

                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <p><span class="title-s">Bachelor Cycle d'Ingénierie Informatique</span></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="{{asset('img/v-UQTR.png')}}" class="img-fluid rounded b-shadow-a" alt="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">School: UQTR(Canada,Quebec) </span> </p>
                    <p><span class="title-s">branch: CS </span>
                    <p><span class="title-s">Years: 2019-2020</span></p>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <p><span class="title-s">Une année validée en Baccalauréat informatique à
                    l'Université du Quebec a Trois-Rivières (bac+2)</span></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="{{asset('img/v-UQTR.png')}}" class="img-fluid rounded b-shadow-a" alt="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">School: UQTR(Canada,Quebec) </span> </p>
                    <p><span class="title-s">branch: electrical engenering </span>
                    <p><span class="title-s">Years: 2018-2019</span></p>

                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <p><span class="title-s">Une année validée en génie électrique a l'Université du
                    Québec à Trois-Rivières (bac+1)</span></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-6 col-md-5">
                  <div class="about-img">
                    <img src="{{asset('img/LNA.png')}}" class="img-fluid rounded b-shadow-a" alt="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">School: Lycee Nord Atlantique </span> </p>
                    <p><span class="title-s">branch: Scientifique </span>
                    <p><span class="title-s">Years: 2017-2018</span></p>

                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <p><span class="title-s">Une année validée en génie électrique a l'Université du
                    Québec à Trois-Rivières (bac+1)</span></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>