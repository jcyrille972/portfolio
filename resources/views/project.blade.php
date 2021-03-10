<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('img/inconheader.png')}}">
  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/project.css') }}" rel="stylesheet">
  <link href="{{ asset('css/project.scss') }}" rel="text/plain">
  <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  </nav>
  <div class="test">
    <p class="display-4">Project</p>
  </div>
  <div style="width:100%; display: flex;justify-content:center;">
    <div class="grid-container">
      <div class="grid-item">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="{{asset('img/caribeanDiet.png')}}" alt="error">
          <div class="card-body">
            <h4>Website template</h4>
            <h5>HTML/CSS/JS(jquery) - personnel - Terminé</h5>
            <p class="card-text">Mise en place d'une esquisse de site web pour un projet de
              restauration.</p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="{{asset('img/google-meet6719.jpg')}}" alt="error">
          <div class="card-body">
            <h4>Recenseur de presence meet</h4>
            <h5>JS - personnel - en cours</h5>
            <p class="card-text">Mise en place d'un système de comptage de présence pour
              le site meet.</p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="{{asset('img/Screenshot from 2021-03-10 20-00-10.png')}}" alt="">
          <div class="card-body">
            <h4>Portfolio</h4>
            <h5>PHP(laravel) -ETNA - en cours</h5>
            <p class="card-text">Template open source pour la creation d'un portfolio front
              (html/css/js) et back (mysql).</p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="{{asset('img/Screenshot from 2021-03-10 20-05-30.png')}}" alt="">
          <div class="card-body">
            <h4>Video game</h4>
            <h5>SHELL -ETNA - Terminé</h5>
            <p class="card-text">Création d'un RPG en ligne de commande shell basé sur
              l'univers de Zelda.</p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="{{asset('img/bomberman.png')}}" alt="error">
          <div class="card-body">
            <h4>Video game</h4>
            <h5>C -ETNA -En cours</h5>
            <p class="card-text">Creation d'un bomberman en C avec le framework SDL</p>
          </div>
        </div>
      </div>

      <div class="grid-item">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="{{asset('img/logov2.jpg')}}" alt="error">
          <div class="card-body">
            <h4>MonAideAppart</h4>
            <h5>HTML/CSS/JS -ETNA(concours tech for good)</h5>
            <p class="card-text">Projet de site web /app pour l'aide au logement de etudiant</p>
          </div>
        </div>
      </div>
    </div>
</body>

</html>