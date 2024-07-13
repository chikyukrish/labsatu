<?php

$host = "localhost";
$user = "root";
$pass = "cici";
$db   = "labsatu";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);
