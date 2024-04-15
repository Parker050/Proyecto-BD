<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vuelo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 30px;
            margin: 30px;
            background-color: silver;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        button[type="submit"] {
            background-color: #343a40;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #212529;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Eliminar Vuelo</h2>
        <?php
        require_once "../modelos/vuelos.php";
        require_once "../clases/MySQL.php";

        if ($_POST) { 
            if (isset($_POST["id"])) {
                $vuelo = new Vuelos($_POST["id"],"","","","","","","");

                $mysql = new MySqlP();
                if ($mysql->borrarVuelo($vuelo)) {
                    echo "Vuelo Eliminado correctamente";
                } else {
                    echo "Solicitud invalida";
                }
            }
        }
        ?>
    </div>

    <script>
        // Redireccionar a admin_V_D.php después de 3 segundos
        setTimeout(function() {
            window.location.href = '../consultas/admin_V_D.php';
        }, 3000);
    </script>
</body>
</html>
