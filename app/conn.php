<?php
$air_servername = "db";  // Nome do serviço definido no docker-compose.yml
$air_username = "usuario";  // Nome do usuário definido no docker-compose.yml
$air_password = "senha";  // Senha definida no docker-compose.yml
$air_dbname = "meu_banco";  // Nome do banco de dados definido no docker-compose.yml

// Create connection
$air_conn = mysqli_connect($air_servername, $air_username, $air_password, $air_dbname);

// Check connection
if (!$air_conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>