<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crafty+Girls&family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Listar tareas</title>
</head>

<body>
    <h1>Listar tareas</h1>
    <table>
        <thead>
            <tr>
                <th>Idtarea</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../components/listardatos.php';
            ?>
        </tbody>
    </table>
    <a href="/views/crearTask.php"><button>Crear tarea</button></a>
    <a href="/views/editar.php"><button>Editar tarea</button></a>
    <a href="/index.php"><button>Volver al menu</button></a>
</body>

</html>