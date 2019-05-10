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
  $actualAudioMap = [];
  foreach($audioMapArray as $value) {
    list($key, $code) = explode(" ", $value);
    $actualAudioMap[$key] = $code;
  }

  foreach($actualAudioMap as $key => $value) {
      $stmt = $conn->prepare("INSERT INTO audio (userid, audioid, title, timeplayed, audiokeycode) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param('iisii', $idholder, $greatest, $title, $key, $value);
      $stmt->execute();
  }

  $stmt->close();
  $conn->close();

header("Location: http://localhost:8080/Soundboard/homepage.php");
?>
