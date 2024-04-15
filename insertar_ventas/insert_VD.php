<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuario</title>
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
        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #343a40; /* Color oscuro */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #212529; /* Color más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Insertar Usuario</h2>
        <form action="../controladores/insertVentaVD.php" method="post">
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>">
            <label for="nombre_cliente">Nombre</label>    
            <input type="text" name="nombre_cliente" id="nombre_cliente">
            <label for="boletos">Boletos</label>    
            <input type="text" name="boletos" id="boletos">
            <label for="monto">Monto</label>    
            <input type="text" name="monto" id="monto">    
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
