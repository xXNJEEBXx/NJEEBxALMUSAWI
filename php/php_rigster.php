<?php

$email=$_POST['sigin-in-email'];
$password=$_POST['sigin-password'];


$conn=mysql_connect('127.0.0.1:3306','u246477975_NJEEBxALMUSAWI','My58565452','u246477975_NJEEBxALMUSAWI')



$sql="INSERT INTO accounts (email,password) VALUES ('Testing@tesing.com','Testing');";

mysqli_query($conn, $sql);