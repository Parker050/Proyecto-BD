<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Administracion de Vuelos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: silver;
            color: #fff;
        }
        .wrapper{
            width: 800px;
            margin: 20px auto;
        }
        .page-header h2{
            margin-top: 20px;
            font-size: 50px;
            text-align: center;
            color: #343a40;
        }
        table tr th{
            background-color: #343a40;
            color: #fff;
        }
        table tr td {
            background-color: #f8f9fa;
            color: #212529;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,.05);
        }
        .btn-back {
            margin-bottom: 20px;
        }
        .btn-create {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Consulta de Usuarios</h2>
                    </div>
                    <?php
                    require_once "../configs/configUsers.php";
                    
                    $sql = "SELECT * FROM clientes;";
                    if($result = mysqli_query($concexion, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID Del usuario</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Edad</th>";
                                        echo "<th>Telefono</th>";
                                        echo "<th>Nombre de usuario</th>";
                                        echo "<th>Contraseña</th>";
                                        echo "<th>Hora de Registro</th>";
                                        echo "<th>Borrar</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['idUser'] . "</td>";
                                        echo "<td>" . $row['nombre'] . "</td>";
                                        echo "<td>" . $row['edad'] . "</td>";
                                        echo "<td>" . $row['telefono'] . "</td>";
                                        echo "<td>" . $row['userName'] . "</td>";
                                        echo "<td>" . $row['pass'] . "</td>"; 
                                        echo "<td>" . $row['hora_registro'] . "</td>";
                                        echo "<td>" . "<a href ='../adminConsults/eliminarEmpleado.php?id=".$row['idUser']."' class='btn btn-danger'>Borrar </a>" . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo "<a href='../admin.php' class='btn btn-secondary btn-back'>Regresar</a>";

                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    mysqli_close($concexion);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
