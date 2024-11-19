<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Crear tarea</title>
</head>

<body>
    <h1>Gestor de tareas</h1>
    <form action="/components/controller.php" method="post">
        <label for="task">Tarea:</label>
        <input type="text" id="titulo" name="title" placeholder="Titulo de la tarea" required>
        <br>
        <label for="description">Descripcion</label>
        <input type="text" id="descripcion" name="description" placeholder="Descripcion">
        <br>
        <label for="Estado">Estado</label>
        <select id="estado" name="state">
            <option value="Pendiente">Pendiente</option>
            <option value="En progreso">En progreso</option>
            <option value="Finalizada">Finalizada</option>
            <option value="Cancelada">Cancelada</option>
        </select>
        <button class="accion" type="submit">Añadir tarea</button>
    </form>

    <a href="/index.php"><button type="button">Regresar al inicio</button></a>
    <a href="/views/listar.php"><button type="button">Ver tareas</button></a>
    <a href="/index.php"><button>Volver al menu</button></a>
</body>

</html>