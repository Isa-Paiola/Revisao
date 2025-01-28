<?php
$host = 'localhost: 3309'; // ou '127.0.0.1'
$username = 'root';  // seu nome de usuário do MySQL
$password = '';      // sua senha do MySQL, se houver
$dbname = 'login';   // nome correto do banco de dados, que é 'login'

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>