<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "perpajakan";

$conn = mysqli_connect($host, $user, $pwd, $db);


if ($conn->connect_error) {
    die("Database gagal terhubung: " . $conn->connect_error);
  }
echo "Database telah terhubung";

