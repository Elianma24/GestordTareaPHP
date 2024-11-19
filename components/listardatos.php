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

// Preparar la consulta
$stmt = $conn->prepare("SELECT * FROM tareas");

// Ejecutar la consulta
$stmt->execute();

// Obtener el resultado
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Codigo']}</td>
                <td>{$row['Titulo']}</td>
                <td>{$row['Descripcion']}</td>
                <td>{$row['Estado']}</td>
            </tr>";
        }
        } else {
        echo "<tr><td colspan='4'>No se encontraron tareas.</td></tr>";
    }

// Cerrar el statement y la conexión
$stmt->close();
$conn->close();
