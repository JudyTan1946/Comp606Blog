<?php
  $servername = "localhost";
  $dBUsername = "root";
  $dBPassword= "";
  $dBName = "week_seven_login_sys";

  $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
  
  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }