<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vuelo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Crear Vuelo</h2>
        <?php
        require_once "../modelos/vuelos.php";
        require_once "../clases/MySQL.php";


        if ($_POST) {
            if (
                isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["origen"]) && isset($_POST["destino"])
                && isset($_POST["hora_salida"]) && isset($_POST["hora_llegada"]) && isset($_POST["asientos_dis"]) && isset($_POST["precio"])
            ) {
                $vuelo = new Vuelos($_POST["id"], $_POST["nombre"], $_POST["origen"], $_POST["destino"], $_POST["hora_salida"], $_POST["hora_llegada"], $_POST["asientos_dis"], $_POST["precio"]);
                $mysql = new MySqlP();
                if ($mysql->actualizarVuelo($vuelo)) {
                    echo "El vuelo fue actualizado correctamente";
                } else {
                    echo "Solicitud invalida";
                }
            }
        }
        ?>
    </div>
    <script>
        setTimeout(function () {
            window.location.href = '../consultas/admin_V_D.php';
        }, 3000);
    </script>
</body>

</html>