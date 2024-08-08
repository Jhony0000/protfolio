<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "my-protfolio-web-site";

$con = new mysqli($servername, $username, $password, $database_name);


if ($con->connect_error) {
    echo "conaction was faild" . $con->connect_error;
}
