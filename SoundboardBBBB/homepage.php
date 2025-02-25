<?php session_start(); //THIS IS THE FINISHED VERSION
date_default_timezone_set('America/Chicago');
?>
<!doctype html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
      document.getElementById("audioMapStorage").setAttribute("value", "");
      for (var key of audioMap2.keys()) {
        document.getElementById("audioMapStorage").setAttribute("value", document.getElementById("audioMapStorage").getAttribute("value") + key + " " + audioMap2.get(key) + "/");
}
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
    if(playing && typeof audioMap.get(seconds) != 'undefined') {
      if(audioMap.get(seconds).duration > 0 && !audioMap.get(seconds).paused) {
        audioMap.get(seconds).currentTime = 0;
      }
      else{
        audioMap.get(seconds).play();

        //var clas = document.getElementById(audioMap.get(seconds).toString()).getAttribute('class');
        //document.getElementById(audioMap.get(seconds).toString()).setAttribute("class", document.getElementById(kNum).getAttribute('class') + " focus");
        //console.log(audioMap2.get(Math.floor((Date.now() - recordingtime)/10)));
        //console.log(audioDatabase.get(audioMap.get(seconds)));
        //document.getElementById(audioMap.get(seconds).toString()).setAttribute("class", clas);
}
    }
  }, 1);
  var audioMap = new Map();
  var audioMap2 = new Map();
  var audioDatabase = new Map();
  var audioDatabaseMap = new Map();
  var audioDatabaseSound = new Map();
  var audioDatabasePiano = new Map();
  var sounds= "Sounds";
  var defauld= "Sounds";
  var pianoSounds= "Piano Sounds";
  var sound81;
  var sound87;
  var sound69;
  var sound82;
  var sound84;
  var sound89;
  var sound85;
  var sound73;
  var sound79;
  var sound80;
  var sound80;
  var sound65;
  var sound83;
  var sound68;
  var sound70;
  var sound71;
  var sound72;
  var sound74;
  var sound75;
  var sound76;
  var sound90;
  var sound88;
  var sound67;
  var sound86;
  var sound68;
  var sound78;
  var sound77;
  var pianoArray=new Map();
  var soundArray=new Map();
  var pianoArrayKey=new Map();
  var soundArrayKey=new Map();
  function createArrays()
  {
    for(var i=0; i<25;i++)
    {
      var iCode=i+65;
      soundArray.set(i,new Audio("Sounds/"+iCode.toString()+".mp3"));
      pianoArray.set(i,new Audio("Piano Sounds/"+iCode.toString()+".mp3"));
      soundArrayKey.set(iCode,new Audio("Sounds/"+iCode.toString()+".mp3"));
      pianoArrayKey.set(iCode,new Audio("Piano Sounds/"+iCode.toString()+".mp3"));
    }
  }
  createArrays();
  var alpha = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
  function useSounds(soundFont)
  {
    var sounds=soundFont;
    if(sounds==="Sounds")
    {
      sound81 = new Audio(sounds+"/81.mp3");
      sound87 = new Audio(sounds+"/87.mp3");
      sound69 = new Audio(sounds+"/69.mp3");
      sound82 = new Audio(sounds+"/82.mp3");
      sound84 = new Audio(sounds+"/84.mp3");
      sound89 = new Audio(sounds+"/89.mp3");
      sound85 = new Audio(sounds+"/85.mp3");
      sound73 = new Audio(sounds+"/73.mp3");
      sound79 = new Audio(sounds+"/79.mp3");
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
      sound90 = new Audio(sounds+"/90.mp3");
      sound88 = new Audio(sounds+"/88.mp3");
      sound67 = new Audio(sounds+"/67.mp3");
      sound86 = new Audio(sounds+"/86.mp3");
      sound68 = new Audio(sounds+"/68.mp3");
      sound78 = new Audio(sounds+"/78.mp3");
      sound77 = new Audio(sounds+"/77.mp3");
      document.getElementById("81").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("87").textContent="Star Wars";
      document.getElementById("69").textContent="Taunt";
      document.getElementById("82").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("84").textContent="Cheering";
      document.getElementById("89").textContent="ankithhey";
      document.getElementById("85").textContent="caleboh";
      document.getElementById("73").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("79").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("80").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("65").textContent="aryaah";
      document.getElementById("83").textContent="Drummer";
      document.getElementById("68").textContent="Click 1";
      document.getElementById("70").textContent="Click 2";
      document.getElementById("71").textContent="Click 3";
      document.getElementById("72").textContent="Service Bell";
      document.getElementById("74").textContent="SOS";
      document.getElementById("75").textContent="Cartoon Bells";
      document.getElementById("76").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("90").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("88").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("67").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("86").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("66").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("78").setAttribute("class", "btn btn-primary btn-lg btn-block");
      document.getElementById("77").setAttribute("class", "btn btn-primary btn-lg btn-block");
      audioDatabase.set(sound81, 81);
      audioDatabase.set(sound87, 87);
      audioDatabase.set(sound69, 69);
      audioDatabase.set(sound82, 82);
      audioDatabase.set(sound84, 84);
      audioDatabase.set(sound89, 89);
      audioDatabase.set(sound85, 85);
      audioDatabase.set(sound73, 73);
      audioDatabase.set(sound79, 79);
      audioDatabase.set(sound80, 80);
      audioDatabase.set(sound65, 65);
      audioDatabase.set(sound83, 83);
      audioDatabase.set(sound68, 68);
      audioDatabase.set(sound70, 70);
      audioDatabase.set(sound71, 71);
      audioDatabase.set(sound72, 72);
      audioDatabase.set(sound74, 74);
      audioDatabase.set(sound75, 75);
      audioDatabase.set(sound76, 76);
      audioDatabase.set(sound90, 90);
      audioDatabase.set(sound88, 88);
      audioDatabase.set(sound67, 67);
      audioDatabase.set(sound86, 86);
      audioDatabase.set(sound68, 68);
      audioDatabase.set(sound78, 78);
      audioDatabase.set(sound77, 77);
    }
    if(sounds==="Piano Sounds")
    {
      sound81 = new Audio(sounds+"/81.mp3");
      sound87 = new Audio(sounds+"/87.mp3");
      sound69 = new Audio(sounds+"/69.mp3");
      sound82 = new Audio(sounds+"/82.mp3");
      sound84 = new Audio(sounds+"/84.mp3");
      sound89 = new Audio(sounds+"/89.mp3");
      sound85 = new Audio(sounds+"/85.mp3");
      sound73 = new Audio(sounds+"/73.mp3");
      sound79 = new Audio(sounds+"/79.mp3");
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
      document.getElementById("81").setAttribute("class", "invisible");
      document.getElementById("87").textContent="C#";
      document.getElementById("69").textContent="Eb";
      document.getElementById("82").setAttribute("class", "invisible");
      document.getElementById("84").textContent="F#";
      document.getElementById("89").textContent="G#";
      document.getElementById("85").textContent="Bb";
      document.getElementById("73").setAttribute("class", "invisible");
      document.getElementById("79").setAttribute("class", "invisible");
      document.getElementById("80").setAttribute("class", "invisible");
      document.getElementById("65").textContent="C";
      document.getElementById("83").textContent="D";
      document.getElementById("68").textContent="E";
      document.getElementById("70").textContent="F";
      document.getElementById("71").textContent="G";
      document.getElementById("72").textContent="A";
      document.getElementById("74").textContent="B";
      document.getElementById("75").textContent="C";
      document.getElementById("76").setAttribute("class", "invisible");
      document.getElementById("90").setAttribute("class", "invisible");
      document.getElementById("88").setAttribute("class", "invisible");
      document.getElementById("67").setAttribute("class", "invisible");
      document.getElementById("86").setAttribute("class", "invisible");
      document.getElementById("66").setAttribute("class", "invisible");
      document.getElementById("78").setAttribute("class", "invisible");
      document.getElementById("77").setAttribute("class", "invisible");
      audioDatabase.set(sound81, 81);
      audioDatabase.set(sound87, 87);
      audioDatabase.set(sound69, 69);
      audioDatabase.set(sound82, 82);
      audioDatabase.set(sound84, 84);
      audioDatabase.set(sound89, 89);
      audioDatabase.set(sound85, 85);
      audioDatabase.set(sound73, 73);
      audioDatabase.set(sound79, 79);
      audioDatabase.set(sound80, 80);
      audioDatabase.set(sound65, 65);
      audioDatabase.set(sound83, 83);
      audioDatabase.set(sound68, 68);
      audioDatabase.set(sound70, 70);
      audioDatabase.set(sound71, 71);
      audioDatabase.set(sound72, 72);
      audioDatabase.set(sound74, 74);
      audioDatabase.set(sound75, 75);
      audioDatabase.set(sound76, 76);
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
    audioMap2.set(Math.floor((Date.now() - recordingtime)/10), audioDatabase.get(sound));
  }
  }
  function isPiano()
  {
    var n = 0

    for(var i=0;i<500;i++)
    {
      for(var j=0; j<25;j++)
      {
        var jCode=j+65;
        if(typeof audioMap.get(i) != 'undefined' && typeof soundArray.get(j)!='undefined')
        {
          document.getElementById("isPiano").setAttribute("value", "");
          if(audioMap.get(i).getAttribute('src') == soundArray.get(j).getAttribute('src'))
          {
            n = 0;
          }
          if(audioMap.get(i).getAttribute('src') == pianoArray.get(j).getAttribute('src'))
          {
            n = 1;
          }
          if(j==0)
          {
            document.getElementById("isPiano").setAttribute("value", document.getElementById("isPiano").getAttribute("value") + i + " " + n + "/");
          }
        }
      }
    }
  }
  var soundd = "";

  document.onkeydown = function (e) {
    var keyCode = e.keyCode;
    var kNum = e.keyCode.toString();
    for(var i = 0; i<25; i++) {
      iKeyCode = i+65;
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
      isPiano();
      document.getElementById("audioMapStorage").setAttribute("value", "");
      for (var key of audioMap2.keys()) {
          document.getElementById("audioMapStorage").setAttribute("value", document.getElementById("audioMapStorage").getAttribute("value") + key + " " + audioMap2.get(key) + "/");
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
function databaseToMap(dMap)
{
  for(var i=0;i<500;i++)
  {
    var time = dMap.get(i);
    if(typeof time != 'undefined' && typeof audioDatabaseMap.get(i)!='undefined')
    {
      if(audioDatabasePiano.get(i) == 1)
      {
        soundd = "Piano Sounds";
      }
      else if(audioDatabasePiano.get(i) == 0)
      {
        soundd = "Sounds";
      }
      audioMap.set(i, new Audio(soundd + '/' + dMap.get(i).toString()+'.mp3'));
    }
  }
}

function resetMap()
{
  audioMap = new Map();
}
useSounds(sounds);
</script>
<script>
$(document).ready(function(){
    $('.sendButton').attr('disabled',true);
    $('#message').keyup(function(){
        if($(this).val().length !=0)
            $('.sendButton').attr('disabled', false);
        else
            $('.sendButton').attr('disabled',true);
    });
});
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
        echo "<p class='lead'>Thanks for logging in ";
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

  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sound Fonts
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <button class="dropdown-item" type="button" onclick="useSounds(defauld)">Default</button>
    <button class="dropdown-item" type="button" onclick="useSounds(pianoSounds)">Piano</button>
    <button class="dropdown-item" type="button" onclick="useSounds()">Something else here</button>
  </div>
</div>
<!--button type="button" class="btn btn-primary" onclick="useSounds(pianoSounds)">Piano</button-->
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound81)" id="81" type="button" class="btn btn-primary btn-lg btn-block">Cantina</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound87)" id="87" type="button" class="btn btn-primary btn-lg btn-block">Star Wars</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound69)" id="69" type="button" class="btn btn-primary btn-lg btn-block">Taunt</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound82)" id="82" type="button" class="btn btn-primary btn-lg btn-block">Waterfall</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound84)" id="84" type="button" class="btn btn-primary btn-lg btn-block">Cheering</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound89)" id="89" class="btn btn-primary btn-lg btn-block">ankithhey</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound85)" id="85" class="btn btn-primary btn-lg btn-block">caleboh</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound73)" id="73" class="btn btn-primary btn-lg btn-block">laugh</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound79)" id="79" class="btn btn-primary btn-lg btn-block">tandoaleueleu</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound80)" id="80" class="btn btn-primary btn-lg btn-block">sagedeun</button>
      </div>
    </div>

  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound65)" id="65" class="btn btn-primary btn-lg btn-block">aryaah</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound83)" id="83" class="btn btn-primary btn-lg btn-block">Drummer</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound68)" id="68" class="btn btn-primary btn-lg btn-block">Click 1</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound70)" id="70" class="btn btn-primary btn-lg btn-block">Click 2</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound71)" id="71" class="btn btn-primary btn-lg btn-block">Click 3</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound72)" id="72" class="btn btn-primary btn-lg btn-block">Service Bell</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound74)" id="74" class="btn btn-primary btn-lg btn-block">SOS Morse</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound(sound75)" id="75" class="btn btn-primary btn-lg btn-block">Cartoon Birds</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="76" class="btn btn-primary btn-lg btn-block">Tibetan Bells</button>
      </div>
    </div>
  </div>

  <div class="card-group">
    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="90" class="btn btn-primary btn-lg btn-block">Tolling Bell</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="88" class="btn btn-primary btn-lg btn-block">Whistling</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="67" class="btn btn-primary btn-lg btn-block">SMS</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="86" class="btn btn-primary btn-lg btn-block">Steam Train</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="66" class="btn btn-primary btn-lg btn-block">Slap</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="78" class="btn btn-primary btn-lg btn-block">MP5</button>
      </div>
    </div>

    <div class="card">
      <h5 class="card-title"></h5>
      <div class="card-body">
        <button onclick="playSound()" id="77" class="btn btn-primary btn-lg btn-block">Shotgun</button>
      </div>
    </div>
  </div>

<button type="button" onclick="resetMap()" class="btn btn-primary">Reset</button>
  <div class="container-fluid">
  <br>
  Recording <p id="timerdisplay">Press Shift</p>
  <br>
  Playing <p id="playingtimer">Press Space</p>
</div>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content">
      <?php
      if(isset($_SESSION['loggedin']))
      {
        echo '
        <form action="savinghandler.php" method="post" role="form" class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Title</label>
    <div class="input-group">
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    </div>
    <div class="input-group">
      <input type="text" class="invisible" id="audioMapStorage" value="" name="audioMapStorage" readonly>
      <input type="int" class="invisible" id="isPiano" value="" name="isPiano" readonly>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-secondary" >Save</button>
</form>';
      }
      else
      {
        echo 'Log in to save';
      }
      ?>
    </nav>
  </div>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content">
      <?php
      if(isset($_SESSION['loggedin']))
      {
        echo '
        <form action="loadinghandler.php" method="post" role="form" class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Title</label>
    <div class="input-group">
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    </div>
    <div class="input-group">
      <input type="text" class="invisible" id="audioMapStorage" value="" name="audioMapStorage" readonly>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-secondary" >Load</button>
  </form>';
  //$tracksize=count($_SESSION['track']);
  //echo($tracksize);
  //print_r($_SESSION['track'][$i][$key]);
  for($i=0; $i<count($_SESSION['track']); $i++)
    {

      $key=key($_SESSION['track'][$i]);

      echo "
        <script>
          audioDatabaseMap.set(" . $key . "," . $_SESSION['track'][$i][$key] . ");
          audioDatabasePiano.set(" . $key . ",". $_SESSION['ispiano'][$i] . ");
        </script>";
    }
    echo "
      <script>
        resetMap();
      </script>";
    echo '<script> databaseToMap(audioDatabaseMap) </script>';
      }
      else
      {
        echo 'Log in to load';
      }
      ?>
    </nav>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
