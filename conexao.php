<?php
// conexao com o banco de dados
$severname = "localhost:3309";
$username = "root";
$password = "";
$dbname = "sistema";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
?>