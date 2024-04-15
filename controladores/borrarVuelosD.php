<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vuelo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
        setTimeout(function() {
            window.location.href = '../consultas/admin_V_D.php';
        }, 3000);
    </script>
</body>
</html>
