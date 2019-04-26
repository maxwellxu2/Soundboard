<?php session_start();
date_default_timezone_set('America/Chicago');
?>
<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script>
  var time;
  var recording = false;
  var timesnotup = true;
  var x = setInterval(function() {
    var now = Date.now();
    var distance = now - time;
    var seconds = Math.floor((distance % (1000 * 60)) / 10);
    if(timesnotup && recording) {
      document.getElementById("timerdisplay").innerHTML = seconds + "/500 ms ";
    }
    if(seconds == 500) {
      timesnotup = false;
      recording = false;
    }
  }, 10);
  var audioMap = new Map();

  var snd = new Audio("Sounds/Pizza Time.mp3");
  var cantina = new Audio("Sounds/CantinaBand.mp3");
  var starwars = new Audio("Sounds/StarWars.mp3");
  var taunt = new Audio("Sounds/taunt.mp3");
  var waterfall = new Audio("Sounds/Waterfall.mp3");
  var cheering = new Audio("Sounds/Cheering.mp3");

  function playCantinaSound()
  {
    if(cantina.duration > 0 && !cantina.paused) {
      cantina.currentTime = 0;
    }
    else {
      cantina.play();
    }
    audioMap.set(Date.now(), cantina);
    console.log(audioMap);
  }
  function playStarWarsSound()
  {
    starwars.play();
  }
  function playTauntSound()
  {
    taunt.play();
  }
  function playWaterfallSound()
  {
    waterfall.play();
  }
  function playCheeringSound()
  {
    cheering.play();
  }
  document.onkeydown = function (e) {
    var keyCode = e.keyCode;
    if(keyCode == 81) {
        document.getElementById("Cantina").click();
        document.getElementById("Cantina").setAttribute("data-toggle", "button");
    }
    if(keyCode == 87) {
      document.getElementById("StarWars").click();
      document.getElementById("StarWars").setAttribute("data-toggle", "button");
    }
    if(keyCode == 16) {
      time = Date.now();
      if(!recording) {
      recording = true;
      timesnotup = true;
    }
      else {
        recording = false;
        timesnotup = false;
      }
    }
}
  </script>
  <title>Bootstrap Assignment</title>
</head>
<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-end">
      <?php
      if(isset($_SESSION['loggedin']))
      {
        echo '<a href="logouthandler.php" class="btn btn-danger">Log Out</a>';
      }
      else
      {
        echo '<a href="loginhandler.php" class="btn btn-primary">Log In</a>';
      }
      ?>

    </nav>
  </div>

  <div class="container-fluid">
    <div class="jumbotron">
      <h1 class="display-4">WELCOME</h1>
      <?php
      if(isset($_SESSION['loggedin']))
      {
        echo "<p class='lead'>Thank you for logging in ";
        echo $_SESSION['loggedin'];
        echo "!</p>";
      }
      else
      {
        echo "You are not logged in!";
      }
      ?>
      <hr class="my-4">
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playCantinaSound()" id="Cantina" type="button" class="btn btn-primary btn-lg btn-block">Cantina</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playStarWarsSound()" id="StarWars" type="button" class="btn btn-primary btn-lg btn-block">Star Wars</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playTauntSound()" type="button" class="btn btn-primary btn-lg btn-block">Taunt</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playWaterfallSound()" type="button" class="btn btn-primary btn-lg btn-block">Waterfall</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playCheeringSound()" type="button" class="btn btn-primary btn-lg btn-block">Cheering</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

  </div>

  <br>
  <p id="timerdisplay"></p>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
