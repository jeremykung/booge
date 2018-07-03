<?php

/*
$hostname = "localhost";
$password = "301Wowzers!";
$username = "foodzomb_booge";
$database = "foodzomb_tamarakung";
*/

// Change the mysqli_connect attributes accordingly
$conn = mysqli_connect("localhost", "foodzomb_booge", "301Wowzers!", "foodzomb_tamarakung");

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
