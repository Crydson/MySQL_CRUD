<?php

// sample: never send your credentials to git

// host
$host = 'http://localhost/Definitivo/';

$db_name = 'definitivo';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'usbw';

try {

	//mudou pra mysqli pq o usbserver nao suporta nativamente mysql_connect
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	//echo 'connected';
} catch (\throwable $th) {
	throw th;Exception("Error Processing Request", 1);
}


?>