<?php
require_once "../modelos/vuelos.php";
require_once "../clases/MySQL.php";


if($_POST){
    if(isset($_POST["nombre"]) && isset($_POST["origen"]) && isset($_POST["destino"])
    && isset($_POST["hora_salida"]) && isset($_POST["hora_llegada"]) && isset($_POST["asientos_dis"]) && isset($_POST["precio"])){

        $vuelo = new Vuelos(0,$_POST["nombre"],$_POST["origen"],$_POST["destino"],$_POST["hora_salida"],$_POST["hora_llegada"],$_POST["asientos_dis"],$_POST["precio"]);

    $mysql = new MySqlP();
    if($mysql->insertarVuelo($vuelo)){
        echo "El vuelo fue creado correctamente";}
        
    else{
        echo "Solicitud invalida";}
    }
}
?>

