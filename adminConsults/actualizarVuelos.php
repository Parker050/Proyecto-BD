<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Vuelo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Actualizar Vuelo</h2>
    <form action="../controladores/actualizarVuelosD.php" method="post">   
        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>">
        <label for="nombre">Nombre</label>    
        <input type="text" name="nombre" id="nombre">
        <label for="origen">Origen</label>    
        <input type="text" name="origen" id="origen">
        <label for="destino">Destino</label>    
        <input type="text" name="destino" id="destino">    
        <label for="hora_salida">Hora de salida</label>    
        <input type="text" name="hora_salida" id="hora_salida">
        <label for="hora_llegada">Hora de llegada</label>    
        <input type="text" name="hora_llegada" id="hora_llegada">
        <label for="asientos_dis">Asientos disponibles</label>    
        <input type="text" name="asientos_dis" id="asientos_dis">
        <label for="precio">Precio</label>    
        <input type="text" name="precio" id="precio">
        <button type="submit">Guardar</button>
    </form>
</div>

</body>
</html>
