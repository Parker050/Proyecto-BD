<?php
 $concexion = new mysqli("127.0.0.1","JosePancho","Pkerszhz55","infoFreeFly",3306);
 $concexion->set_charset("utf8");




if(!empty($_POST["ingresar"])){
    if (empty($_POST["username"]) and empty($_POST["password"])) {
        
        echo "<p>Los campos estan vacios</p>";
    } else {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        $sql = $concexion->query("select * from usuarios where userName = '$user' and pass = '$pass';");
        if ($datos = $sql->fetch_object()) {
            echo "<p>Ya entrasete a la base de deatos</p>";
            header("location:admin.php");
        } else {
            echo "<p>Acceso denegado</p>";
        }
    }
    
}
?>