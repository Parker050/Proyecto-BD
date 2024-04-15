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
        <h2>Venta</h2>
        <?php
        require_once "../modelos/venta_vuelos.php";
        require_once "../clases/MySQL.php";

        if ($_POST) {
            if (isset($_POST["id"]) && isset($_POST["nombre_cliente"]) && isset($_POST["boletos"]) && isset($_POST["monto"])) {
        
                $venta = new VentaV(0, $_POST["id"], $_POST["nombre_cliente"], $_POST["boletos"], $_POST["monto"], "");

                $mysql = new MySqlD();
                if ($mysql->insertarVentaD($venta)) {
                    echo "Vente efectuada correctamente";
                } else {
                    echo "Solicitud invalida";
                }
            }else echo "Error en la transaccion";
        }
        ?>
    </div>
    <script>
        setTimeout(function () {
            window.location.href = '../consultas/VD_consultaCliente.php';
        }, 3000);
    </script>
</body>

</html>