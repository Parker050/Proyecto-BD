<?php
require_once "../modelos/vuelos.php";
require_once "../clases/MySQL.php";

#echo $_POST['id'];

if($_POST){ 
    if(isset($_POST["id"])){
    $vuelo = new Vuelos($_POST["id"],"","","","","","","");

    $mysql = new MySqlP();
    if($mysql->borrarVuelo($vuelo)){
        echo "Vuelo Eliminado correctamente";}
        
    else{
        echo "Solicitud invalida";}
    }
}
?>

