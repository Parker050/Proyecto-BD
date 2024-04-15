<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Vuelo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="../controladores/insertarEmpleado.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="text" id="password" name="password" required>

            <button name="registrar" type="submit" >Registrar</button>
        </form>

</body>
</html>
