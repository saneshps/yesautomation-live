<?php
$httpHost = $_SERVER['HTTP_HOST'] ?? 'localhost';
$isLocal = (bool) preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/i', $httpHost)
    || (bool) preg_match('/\.local(:\d+)?$/i', $httpHost);

$servername = "localhost";
if ($isLocal) {
    $database = "hcoyym1o_yatools";
    $username = "root";
    $password = "";
} else {
    $database = "hcoyym1o_yatools";
    $username = "hcoyym1o_yauser";
    $password = "TwR561g32W_n";
}

mysqli_report(MYSQLI_REPORT_OFF);
$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>