<?php
$con = mysqli_connect("localhost", "root", "", "bbdms");


$email = $_POST['email'];
$password = $_POST['password'];


//inserting data to the database
$insert = "INSERT INTO `user`(`id`, `email`, `password`) VALUES (null,'$email', '$password')";


mysqli_query($con, $insert);
header("location: login_become.php");
