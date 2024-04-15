<?php
if (isset($_GET['id'])) {
    $idVuelo = $_GET['id'];
} else {
    echo "El parámetro 'id' no está presente en la URL.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Empelado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="../controladores/borrarEmpleado.php" method="post">   
    <input type="hidden" name="id" id="" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>">
    <label for="">¿Está seguro de borrar el empleado?</label>
    <button type="submit">Borrar</button>
</form>
</body>
</html>
