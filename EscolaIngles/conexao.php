<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>