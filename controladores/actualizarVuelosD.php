<?php
require_once "../modelos/vuelos.php";
require_once "../clases/MySQL.php";

#echo $_POST['id'];
if($_POST){
    if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["origen"]) && isset($_POST["destino"])
    && isset($_POST["hora_salida"]) && isset($_POST["hora_llegada"]) && isset($_POST["asientos_dis"]) && isset($_POST["precio"])){
        echo $_POST['id'];
        $vuelo = new Vuelos($_POST["id"] ,$_POST["nombre"],$_POST["origen"],$_POST["destino"],$_POST["hora_salida"],$_POST["hora_llegada"],$_POST["asientos_dis"],$_POST["precio"]);
        echo $vuelo->getIdVuelo();
    $mysql = new MySqlP();
    if($mysql->actualizarVuelo($vuelo)){
        echo "El vuelo fue actualizado correctamente";}
        
    else{
        echo "Solicitud invalida";}
    }
}
?>
