<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: silver;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            padding: 20px;
            background-color: #fff; /* Fondo blanco */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centrar contenido */
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Centrar botones */
        }
        .button-container a {
            text-decoration: none;
        }
        .button {
            background-color: #343a40; /* Color oscuro */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            width: calc(50% - 5px);
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #212529; /* Color más oscuro al pasar el mouse */
        }
        .logout-button {
            background-color: #dc3545; /* Color rojo */
        }
        .logout-button:hover {
            background-color: #c82333; /* Color más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Panel de Administrador</h2>
    <div class="button-container">
        <a href="consultas/admin_V_D.php" class="button">Vuelos</a>
        <a href="consultas/consultasInfoFree.php" class="button">Consulta de ventas</a>
        <a href="#" class="button">Consulta de empleados</a>
        <a href="#" class="button">Consulta de usuarios</a>
        <a href="index.php" class="button logout-button">Logout</a>
    </div>
</div>

</body>
</html>
