<?php
$server = "localhost";
$database = "news_system";
$username = "root";
$password = "";
$con = new mysqli($server, $username, $password, $database);
if (!$con) {
    echo "db not connect";
}
