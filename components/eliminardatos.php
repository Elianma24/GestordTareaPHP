<?php

$servername = "127.0.0.1";
$username = "root";
$pass = "";
$database = "dbgestordetarea";
$port = "33065";

$conn = new mysqli($servername, $username, $pass, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$stmt = $conn->stmt_init();
$sql = "DELETE FROM tareas WHERE Codigo = $id";

if ($stmt->prepare($sql)) {
    $stmt->execute();
    echo "Tarea eliminada correctamente";
} else { 
    echo "Error: " . $stmt->error;
}

$stmt->close();

$conn->close();