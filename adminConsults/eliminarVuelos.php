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
    <title>Insertar Usuario</title>
</head>
<body>

    <form action="../controladores/borrarVuelosD.php" method="post">   
        <input type="hidden" name="id" id="" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>">
        <label for="">¿Esta seguro de borrar el vuelo?</label>
        <button type="submit">Borrar</button>
    </form>
</body>
</html>