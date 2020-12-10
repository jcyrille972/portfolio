<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/inconheader.png')}}" >
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
                            @foreach($me as $key => $value)
                              <p><span class="title-s">Name: </span> <span>{{ $value->firstname }} {{ $value->lastname }}</span></p>
                              <p><span class="title-s">Profile: </span> <span>CS student</span></p>
                              <p><span class="title-s">Email: </span> <span>{{ $value->email }}</span></p>
                              <p><span class="title-s">Phone: </span> <span>{{ $value->phone }}</span></p>
                              @endforeach
                            </div>
                          </div>
                        </div>
                        <div class="skill-mf">
                          <p class="title-s">Skills</p>
                          <span>HTML</span> <span class="pull-right">80%</span>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="85" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                          <span>CSS3</span> <span class="pull-right">70%</span>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                          <span>PHP</span> <span class="pull-right">50%</span>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                          <span>C</span> <span class="pull-right">30%</span>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="90" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="about-me pt-4 pt-md-0">
                          <div class="title-box-2">
                            <h5 class="title-left">
                              About me
                            </h5>
                          </div>
                          {{$value->description}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>  
        <section class="mosaiqueTable"> 
          <div>
            <p class="display-4">Language program,framework and logiciel<br> i'm learning an use </p> 
          </div>
          <div class="containerTab">
            <table border="0" cellpadding="0" cellspacing="0" class="containerTab">
              <tr >
                <td><img src="{{ asset('img/AltiumDesigner.png')}}"></td>
                <td><img src="{{ asset('img/laravel.png')}}"></td>
                <td><img src="{{ asset('img/symfony.png')}}"></td>
                <td><img src="{{ asset('img/sql.png')}}"></td>
              </tr>
              <tr>    
                <td><img src="{{ asset('img/debian.png')}}"></td>
                <td><img src="{{ asset('img/c.png')}}"></td>
                <td><img src="{{ asset('img/js.png')}}"></td>
                <td><img src="{{ asset('img/solidworks.png')}}"></td>
              </tr>
            </table>            
          </div>
        </section>
        <section class="section-tertiary" id="exp">
          <div class="test">
          <p class="display-4">CARRER</p> 
        </div>
          <div class="container">
              <div class="row">
                  <div class="col col-sm-12 col-md-7">
                      <h3>Experiences</h3>
                      <p class="h6">current and target study</p>
                      <div class="stepper">
                      <div class="step">
                              <p class="step-number"></p>
                              <p class="step-title">CS study</p>
                              <p>2020-2023 master CS study a ETNA</p>
                            </div>   
                      <div class="stepper">
                        <div class="step">
                          <p class="step-number"></p>
                          <p class="step-title">CS study</p>
                          <p>2020-2023 bachelor CS study a ETNA </p>
                        </div></div></div>
                      <p class="h6">Ended</p>
                      <div class="stepper">
                          <div class="step">
                              <p class="step-number">3</p>
                              <p class="step-title">Baccalaureat informatique study</p>
                              <p>2019-2020 informatique Baccalaureat in Canada at l'University of Quebec at Trois-Riviere</p>
                          </div>
                          <div class="step">
                              <p class="step-number">2</p>
                              <p class="step-title">Electrical engenerer study</p>
                              <p>2018-2019  electric ingenner speciality infor in Canada at l'University of Quebec at Trois-Riviere</p>
                          </div>
                           <div class="step">
                              <p class="step-number">1</p>
                              <p class="step-title">Baccalaureat scientifique</p>
                              <p>French Baccalaureat scientifique obtain at 2018 with "assez-bien" mention</p>
                          </div>
                      </div>
                  </div>
                  <div class="col col-sm-12 col-md-5">
                      <h3>Languages</h3>
                      <ul>
                          <li>French (native)</li>
                          <li>fluent English </li>
                      </ul><br>
                      <h3>Hobbies</h3>
                      <ul>
                          <li>Informatique / Programmation</li>
                          <li>Robotic</li>
                          <li>Badminton</li>
                          <li>Anime/manga</li>

                      </ul>
                  </div>

              </div>
          </div>
      </section>
      </body>
</html>