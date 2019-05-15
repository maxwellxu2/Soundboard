<?php
session_start();
$server = 'localhost';
$user = 'root';
$pass = 'usbw';
$db = 'Soundboard';

  $conn = new mysqli($server, $user, $pass, $db);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $result = $conn->query('SELECT id, username FROM users');
  $idholder;
  while($row = $result->fetch_assoc())
  {
    if( $_SESSION['loggedin'] == $row['username'])
    {
      $idholder = $row['id'];
    }
  }

  $greatest = 0;
  $result = $conn->query('SELECT userid, audioid FROM audio');
  {
    while($row = $result->fetch_assoc())
    {
      if($idholder == $row['userid'])
      {
        if($row['audioid'] > $greatest)
        {
          $greatest = $row['audioid'];
        }
      }
    }
  }
  $greatest = $greatest + 1;

  $title = $_POST['title'];
  $audioMap = $_POST['audioMapStorage'];
  $audioMapArray = explode("/", $audioMap);
  $isPiano = $_POST['isPiano'];
  $isPianoArray = explode("/", $isPiano);
  $actualAudioMap = [];
  foreach($audioMapArray as $value) {
    list($key, $code) = explode(" ", $value);
    $actualAudioMap[$key] = $code;
  }
  $actualPianoMap = [];
  foreach($isPianoArray as $value) {
    list($key, $code) = explode(" ", $value);
    $actualPianoMap[$key] = $code;
  }

  foreach($actualAudioMap as $key => $value) {
      $num = $actualPianoMap[$key];
      $stmt = $conn->prepare("INSERT INTO audio (userid, audioid, title, timeplayed, audiokeycode, ispiano) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param('iisiii', $idholder, $greatest, $title, $key, $value, $num);
      $stmt->execute();
  }

  $stmt->close();
  $conn->close();

header("Location: http://localhost:8080/Soundboard/homepage.php");
?>
