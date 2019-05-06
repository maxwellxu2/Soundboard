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

  $title = $_POST['title'];
  $audioMap = $_POST['audioMap'];
  $audioMapArray = split("/", $audioMap);
  $actualAudioMap = [];
  foreach($audioMapArray as $value) {
    list($key, $code) = split(" ", $value);
    $actualAudioMap[$key] = $code;
  }

  foreach($actualAudioMap as $key => $value) {
      $stmt = $conn->prepare("INSERT INTO audio (userid, title, timeplayed, audiokeycode) VALUES (?, ?, ?, ?)");
      $stmt->bind_param('isii', $_SESSION['loggedin'], $title, $key, $value);
      $stmt->execute();
  }

  $stmt->close();
  $conn->close();

header("Location: http://localhost:8080/Soundboard/homepage.php");
?>
