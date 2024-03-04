<?php
require_once "../modelos/venta_vuelos.php";
require_once "../clases/MySQL.php";

if($_POST){
    if(isset($_POST["idVuelo"]) && isset($_POST["nombre_cliente"]) && isset($_POST["boletos"]) && isset($_POST["monto"])){
        //echo $_POST["nombre_cliente"];

    $venta = new VentaV(0,$_POST["idVuelo"],$_POST["nombre_cliente"],$_POST["boletos"],$_POST["monto"],"");

 
    $mysql = new MySql();
    if($mysql->insertarVenta($venta)){
        echo "Vente efectuada correctamente";}
        
    else{
        echo "Solicitud invalida";}
    }
}
?>

