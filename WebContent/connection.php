<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gw_lenovo_db";


if(!$con = mysqli_connect('localhost', 'root', '' , 'gw_lenovo_db'))
{

	echo 'die("failed to connect!")';
}