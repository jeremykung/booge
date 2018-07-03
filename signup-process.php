<?php

include 'databasehandler.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

/*
echo $fname."<br>";
echo $lname."<br>";
echo $email."<br>";
*/

$sql = "INSERT INTO mailing_list (fname, lname, email)
VALUES ('$fname', '$lname', '$email')";

$result = mysqli_query($conn, $sql);

header("Location: subscribed.php");

?>
