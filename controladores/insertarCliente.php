
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Registrar Usuario</h2>
        <?php
        require_once "../clases/MySQL.php";
        require_once "../modelos/cliente.php";

        if ($_POST) {
            if (isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["telefono"])
                && isset($_POST["username"]) && isset($_POST["password"])
            ) {
                $cliente = new Cliente(0, $_POST["nombre"], $_POST["edad"], $_POST["telefono"], $_POST["username"], $_POST["password"], null);
                $mysql = new MySqlC();
                if ($mysql->insertarCliente($cliente)) {
                    echo "Cliente registrado correctamente";
                } else {
                    echo "Error al registrar el cliente";
                }
            }else{
                echo "No pasa nada";
            }
        }
        ?>
    </div>
    <script>
        setTimeout(function () {
            window.location.href = '../index.php';
        }, 3000);
    </script>
</body>

</html>
