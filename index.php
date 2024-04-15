<?php
$jsonInsert ='"sector": "index.php"';
require "transactionMongo.php";

//require "configs/configAdministrador.php";
require "controladores/validacionUsuario.php";


?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Consultar</div>
    
    --------------
    echo "<a href='consultas/base_V_D.php'>BASE DE DATOS PUBLICA</a>";
    echo "<br>";echo "<br>";
    echo "<a href='base_V_Digitales.php'>BASE DE DATOS VENTA DIGITAL</a>";
    echo "<br>";echo "<br>";
    echo "<a href='base_V_Fisicas.php'>BASE DE DATOS VENTA FISICA</a>";
    echo "<br>";echo "<br>";
    echo "<a href='admin.php'>ADMINISTRADOR DE VUELOS</a>";
    
    ------------------
</body>
</html>
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .login-container h2 {
            text-align: center;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-container input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .login-container button{
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="" method="post">
      
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <input name="ingresar" type="submit" value="Enviar">
        
    </form>
    <a href="#"><button>Ingresar sin Usuario</button></a>

    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
</div>

</body>
</html>
