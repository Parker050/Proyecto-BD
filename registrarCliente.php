<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
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

        .registration-container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .registration-container h2 {
            text-align: center;
            color: #343a40;
        }

        .registration-container input[type="text"],
        .registration-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilos específicos para el campo de entrada de edad */
        .registration-container input[type="number"] {
            width: calc(100% - 22px); /* Resta el ancho del botón de incremento/decremento */
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            /* Evita que el usuario pueda cambiar el color del fondo */
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }

        .registration-container button {
            width: 100%;
            background-color: #343a40;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .registration-container button:hover {
            background-color: #212529;
        }
    </style>
</head>

<body>

    <div class="registration-container">
        <h2>Registro de Cliente</h2>
        <form action="controladores/insertarCliente.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button name="registrar" type="submit" >Registrar</button>
        </form>
    </div>
</body>

</html>
