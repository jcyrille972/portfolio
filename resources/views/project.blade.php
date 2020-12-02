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
    <section>
      <div class="project">
        <img src="https://www.zelda.com/breath-of-the-wild/assets/media/wallpapers/desktop-4.jpg" alt="zeldaShell">
        <p>legend of zelda dungeon<p>
        <p>create at:-last update at:</p>
        <p>The game is a turn-by-turn RPG.<br>
           You incarnate a character that challenges the Hyrule Castle, a tower composed of 10 floors.<br>
           Each floor you encounter an enemy and on the last floor, you challenge the Boss.<br>
           The gaame is made in Shell command.<br>
</p>
    </div>

    </section>
        </body>
</html>     