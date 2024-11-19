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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titulo = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];

    $sql = "UPDATE tareas SET Titulo='$titulo', Descripcion='$descripcion', Estado='$estado' WHERE Codigo=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error actualizando el registro: " . $conn->error;
    }
}

$conn->close();
