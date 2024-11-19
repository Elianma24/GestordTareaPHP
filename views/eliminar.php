<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Eliminar tareas</title>
</head>

<body>
    <h1>Eliminar tareas</h1>
    <form action="/components/eliminardatos.php" method="POST">
    <label for="Codigo">Codigo de la tarea</label>
    <input type="text" name="id" id="id">
    <button type="submit">Eliminar</button>
    </form> 
    <br><br>
    <h1>Tareas</h1>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Tarea</th>
                <th>Descripcion</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../components/listardatos.php';
            ?>
    </table>
    <a href="/views/crearTask.php"><button>Crear tarea</button></a>
    <a href="/index.php"><button>Volver al menu</button></a>
</body>

</html>