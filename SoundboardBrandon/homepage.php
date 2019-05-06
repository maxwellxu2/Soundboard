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
  var recordingtime;
  var recording = false;
  var playingtime;
  var playing = false;
  var x = setInterval(function() {
    var now = Date.now();
    var distance = now - recordingtime;
    var seconds = Math.floor((distance % (1000 * 60)) / 10);
    if(recording) {
      document.getElementById("timerdisplay").innerHTML = Math.floor(seconds / 100) + "." + Math.floor(seconds % 100 / 10) + Math.floor(seconds % 10) + "/5.00 s ";
    }
    if(seconds == 500) {
      recording = false;
    }
  }, 1);
  var y = setInterval(function() {
    var now = Date.now();
    var distance = now - playingtime;
    var seconds = Math.floor((distance % (1000 * 60)) / 10);
    if(playing) {
      document.getElementById("playingtimer").innerHTML = Math.floor(seconds / 100) + "." + Math.floor(seconds % 100 / 10) + Math.floor(seconds % 10) + "/5.00 s ";
    }
    if(seconds == 500) {
      playing = false;
    }
    if(playing && audioMap.get(seconds) != null) {
      if(audioMap.get(seconds).duration > 0 && !audioMap.get(seconds).paused) {
        audioMap.get(seconds).currentTime = 0;
      }
      else {
      audioMap.get(seconds).play();
    }
    }
  }, 1);
  var audioMap = new Map();
  var sounds= "Sounds";
  var defauld= "Sounds";
  var pianoSounds= "Piano Sounds";
  var cantina //= new Audio(sounds+"/CantinaBand.mp3");
  var starwars// = new Audio("Sounds/StarWars.mp3");
  var taunt //= new Audio("Sounds/taunt.mp3");
  var waterfall //= new Audio("Sounds/Waterfall.mp3");
  var cheering //= new Audio("Sounds/Cheering.mp3");
  var ankithhey// = new Audio("Sounds/ankithhey.mp3");
  var caleboh// = new Audio("Sounds/caleboh.mp3");
  var laugh //= new Audio("Sounds/laugh.mp3");
  var sagedeun //= new Audio("Sounds/sagedeun.mp3");
  var tandoaleueleu //= new Audio("Sounds/tandoaleueleu.mp3");
  var sound80
  var sound65
  var sound83
  var sound68
  var sound70
  var sound71
  var sound72
  var sound74
  var sound75
  var sound76
  var alpha = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
  var bbab = document.getElementById("81");

  function useSounds(soundFont)
  {
    var sounds=soundFont;

    if(sounds==="Sounds")
    {
      cantina = new Audio(sounds+"/81.mp3");
      starwars = new Audio(sounds+"/87.mp3");
      taunt = new Audio(sounds+"/69.mp3");
      waterfall = new Audio(sounds+"/82.mp3");
      cheering = new Audio(sounds+"/84.mp3");
      ankithhey = new Audio(sounds+"/89.mp3");
      caleboh = new Audio(sounds+"/85.mp3");
      laugh = new Audio(sounds+"/73.mp3");
      sagedeun = new Audio(sounds+"/79.mp3");
      sound80 = new Audio(sounds+"/80.mp3");
      sound65 = new Audio(sounds+"/65.mp3");
      sound83 = new Audio(sounds+"/83.mp3");
      sound68 = new Audio(sounds+"/68.mp3");
      sound70 = new Audio(sounds+"/70.mp3");
      sound71 = new Audio(sounds+"/71.mp3");
      sound72 = new Audio(sounds+"/72.mp3");
      sound74 = new Audio(sounds+"/74.mp3");
      sound75 = new Audio(sounds+"/75.mp3");
      sound76 = new Audio(sounds+"/76.mp3");
    }
    if(sounds==="Piano Sounds")
    {
      cantina = new Audio(sounds+"/81.mp3");
      starwars = new Audio(sounds+"/87.mp3");
      taunt = new Audio(sounds+"/69.mp3");
      waterfall = new Audio(sounds+"/82.mp3");
      cheering = new Audio(sounds+"/84.mp3");
      ankithhey = new Audio(sounds+"/89.mp3");
      caleboh = new Audio(sounds+"/85.mp3");
      laugh = new Audio(sounds+"/73.mp3");
      sagedeun = new Audio(sounds+"/79.mp3");
      sound80 = new Audio(sounds+"/80.mp3");
      sound65 = new Audio(sounds+"/65.mp3");
      sound83 = new Audio(sounds+"/83.mp3");
      sound68 = new Audio(sounds+"/68.mp3");
      sound70 = new Audio(sounds+"/70.mp3");
      sound71 = new Audio(sounds+"/71.mp3");
      sound72 = new Audio(sounds+"/72.mp3");
      sound74 = new Audio(sounds+"/74.mp3");
      sound75 = new Audio(sounds+"/75.mp3");
      sound76 = new Audio(sounds+"/76.mp3");
      //tandoaleueleu = new Audio(sounds+"/tandoaleueleu.mp3");
      document.getElementById("81").textContent=" ";
      document.getElementById("87").textContent="C#";
      document.getElementById("69").textContent="Eb";
      document.getElementById("82").textContent=" ";
      document.getElementById("84").textContent="F#";
      document.getElementById("89").textContent="G#";
      document.getElementById("85").textContent="Bb";
      document.getElementById("73").textContent=" ";
      document.getElementById("79").textContent=" ";
      document.getElementById("80").textContent=" ";
      document.getElementById("65").textContent="C";
      document.getElementById("83").textContent="D";
      document.getElementById("68").textContent="E";
      document.getElementById("70").textContent="F";
      document.getElementById("71").textContent="G";
      document.getElementById("72").textContent="A";
      document.getElementById("74").textContent="B";
      document.getElementById("75").textContent="C";
    }
  }

  function playSound(sound)
  {
    if(sound.duration > 0 && !sound.paused) {
      sound.currentTime = 0;
    }
    else {
      sound.play();
    }
    if(recording) {
    audioMap.set(Math.floor((Date.now() - recordingtime)/10), sound);
    console.log(Math.floor((Date.now() - recordingtime)/10));
  }
  }

  document.onkeydown = function (e) {
    var keyCode = e.keyCode;
    var kNum=e.keyCode.toString();
    for(var i=0; i<25;i++) {
      iKeyCode=i+65;
      if(keyCode == iKeyCode) {
        document.getElementById(kNum).click();
        document.getElementById(kNum).setAttribute("data-toggle", "button");
      }
    }
    if(keyCode == 16) {
      recordingtime = Date.now();
      if(!recording) {
      recording = true;
    }
      else {
        recording = false;
      }
    }
    if(keyCode == 32) {
      playingtime = Date.now();
      if(!playing) {
      playing = true;
    }
      else {
        playing = false;
      }
    }
}
useSounds(sounds);
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
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sound Fonts
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <button class="dropdown-item" type="button" onclick="useSounds(defauld)">Default</button>
    <button class="dropdown-item" type="button" onclick="useSounds(pianoSounds)">Piano</button>
    <button class="dropdown-item" type="button" onclick="useSounds()">Something else here</button>
  </div>
</div>
<button type="button" class="btn btn-primary" onclick="useSounds(pianoSounds)">Piano</button>
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(cantina)" id="81" type="button" class="btn btn-primary btn-lg btn-block">Cantina</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(starwars)" id="87" type="button" class="btn btn-primary btn-lg btn-block">Star Wars</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(taunt)" id="69" type="button" class="btn btn-primary btn-lg btn-block">Taunt</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(waterfall)" id="82" type="button" class="btn btn-primary btn-lg btn-block">Waterfall</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(cheering)" id="84" type="button" class="btn btn-primary btn-lg btn-block">Cheering</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(ankithhey)" id="89" class="btn btn-primary btn-lg btn-block">ankithhey</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(caleboh)" id="85" class="btn btn-primary btn-lg btn-block">caleboh</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(laugh)" id="73" class="btn btn-primary btn-lg btn-block">laugh</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(tandoaleueleu)" id="79" class="btn btn-primary btn-lg btn-block">tandoaleueleu</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound80)" id="80" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound65)" id="65" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound83)" id="83" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound68)" id="68" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound70)" id="70" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound71)" id="71" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound72)" id="72" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound74)" id="74" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound75)" id="75" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="76" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="90" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="88" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="67" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="86" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="66" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="78" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="77" class="btn btn-primary btn-lg btn-block">Sound</button>
      </div>
    </div>
  </div>

  <br>
  Recording <p id="timerdisplay">Press Shift</p>
  <br>
  Playing <p id="playingtimer">Press Space</p>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
