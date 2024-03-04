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

    <form action="../controladores/actualizarVuelosD.php" method="post">   
        <input type="hidden" name="id" id="" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>">
        <label for="">Nombre</label>    
        <input type="text" name="nombre" id="">
        <label for="">Origen</label>    
        <input type="text" name="origen" id="">
        <label for="">Destino</label>    
        <input type="text" name="destino" id="">    
        <label for="">Hora de salida</label>    
        <input type="text" name="hora_salida" id="">
        <label for="">Hora de llegada</label>    
        <input type="text" name="hora_llegada" id="">
        <label for="">Asientos disponibles</label>    
        <input type="text" name="asientos_dis" id="">
        <label for="">Precio</label>    
        <input type="text" name="precio" id="">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>