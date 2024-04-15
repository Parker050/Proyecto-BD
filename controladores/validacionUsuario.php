<?php
$conexion = new mysqli("127.0.0.1", "JosePancho", "Pkerszhz55", "infoFreeFly", 3306);
$conexion->set_charset("utf8");

if (!empty($_POST["ingresar"])) {
    if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["tipo"])) {
        $mensaje = '<div class="alert alert-warning" role="alert">Todos los campos son obligatorios</div>';
    } else {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $tipo = $_POST["tipo"];
        if ($tipo == "administrador") {
            $sql = $conexion->query("SELECT * FROM usuarios WHERE userName = '$user' AND pass = '$pass'");
            if ($sql && $datos = $sql->fetch_object()) {
                header("location:admin.php");
                exit(); 
            } else {
                $mensaje = '<div class="alert alert-danger" role="alert">Acceso denegado</div>';
            }

        } elseif ($tipo == "cliente") {
            $sql = $conexion->query("SELECT * FROM clientes WHERE userName = '$user' AND pass = '$pass'");
            if ($sql && $datos = $sql->fetch_object()) {
                header("location:base_V_Digitales.php");
                exit();
            } else {
                $mensaje = '<div class="alert alert-danger" role="alert">Acceso denegado</div>';
            }
        } elseif ($tipo == "trabajador") {
            $sql = $conexion->query("SELECT * FROM clientes WHERE userName = '$user' AND pass = '$pass'");
            if ($sql && $datos = $sql->fetch_object()) {
                header("location:base_V_Digitales.php");
                exit();
            } else {
                $mensaje = '<div class="alert alert-danger" role="alert">Acceso denegado</div>';
            }
        }else {
            $mensaje = '<div class="alert alert-danger" role="alert">Tipo de usuario inválido</div>';
        }
    }
}
?>
