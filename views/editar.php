<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Actualizar Registro</title>
</head>

<body>
    <h1>Actualizar tareas</h1>
    <form action="/components/editardatos.php" method="POST">
        <label for="id">Codigo:</label>
        <input type="text" name="id" id="id" required>
        <br>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" required>
        <br>
        <label for="Estado">Estado</label>
        <select id="estado" name="estado">
            <option value="Pendiente">Pendiente</option>
            <option value="En progreso">En progreso</option>
            <option value="Finalizada">Finalizada</option>
            <option value="Cancelada">Cancelada</option>
        </select>
        <button class="accion" type="submit">Actualizar</button>
    </form>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['codigo'];
            $nombre = $_GET['titulo'];
            $descripcion = $_GET['descripcion'];
        };
        ?>
    <a href="/views/listar.php"><button>Listar Tareas</button></a>
    <a href="/views/eliminar.php"><button>Eliminar tareas</button></a>
    <a href="/index.php"><button>Volver al menu</button></a>
</body>

</html>