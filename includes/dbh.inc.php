<?php

$servername = "gator4123.hostgator.com";
$dBUsername = "dspolibl_matt";
$dBPassword = "45442633";
$dBName = "dspolibl_loginsys";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

