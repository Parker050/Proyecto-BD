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
                        <h2>Administracion de Vuelos</h2>
                    </div>
                    <div>
                        <a href='../adminConsults/crearVuelos.php' class='btn btn-success btn-create'>Crear vuelo</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "../configs/configVuelos_Data.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM vuelos_publicos;";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID del vuelo</th>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Origen</th>";
                                        echo "<th>Destino</th>";
                                        echo "<th>Hora de salida</th>";
                                        echo "<th>Hora de llegada</th>";
                                        echo "<th>Asientos disponibles</th>";
                                        echo "<th>Precio por boleto</th>";
                                        echo "<th>Actualizar</th>";
                                        echo "<th>Borrar</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['idVuelo'] . "</td>";
                                        echo "<td>" . $row['nombre'] . "</td>";
                                        echo "<td>" . $row['origen'] . "</td>";
                                        echo "<td>" . $row['destino'] . "</td>";
                                        echo "<td>" . $row['hora_salida'] . "</td>";
                                        echo "<td>" . $row['hora_llegada'] . "</td>";
                                        echo "<td>" . $row['asientos_dis'] . "</td>";
                                        echo "<td>" . $row['precio'] . "</td>";
                                        echo "<td>" . "<a href ='../adminConsults/actualizarVuelos.php?id=".$row['idVuelo']."' class='btn btn-primary'>Actualizar </a>" . "</td>";
                                        echo "<td>" . "<a href ='../adminConsults/eliminarVuelos.php?id=".$row['idVuelo']."' class='btn btn-danger'>Borrar </a>" . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo "<a href='../admin.php' class='btn btn-secondary btn-back'>Regresar a admin</a>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
