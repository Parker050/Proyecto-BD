<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Vuelo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="../controladores/insertarVuelosD.php" method="post">   
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
