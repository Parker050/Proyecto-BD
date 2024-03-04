<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuario</title>
</head>
<body>
    <form action="../controladores/insertVentaVD.php" method="post">
        <label for="">id Vuelo</label>    
        <input type="text" name="idVuelo" id="">
        <label for="">Nombre</label>    
        <input type="text" name="nombre_cliente" id="">
        <label for="">Boletos</label>    
        <input type="text" name="boletos" id="">
        <label for="">Monto</label>    
        <input type="text" name="monto" id="">    
        <button type="submit">Guardar</button>
    </form>
</body>
</html>