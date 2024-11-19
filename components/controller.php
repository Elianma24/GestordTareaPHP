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

if (isset($_POST['title']) && isset($_POST['description'])) {
    $titulo = $_POST['title'];
    $descripcion = $_POST['description'];
    $estado = $_POST['state'];

    if (is_array($estado)) {
        $estado = $estado[0]; 
    }

    $stmt = $conn->prepare("INSERT INTO tareas (Titulo, Descripcion, Estado) VALUES (?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sss", $titulo, $descripcion, $estado);

        if ($stmt->execute()) {
            echo "Tarea agregada correctamente";
        } else {
            echo "Error al agregar tarea: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
} else {
    echo "Faltan datos en el formulario.";
}
