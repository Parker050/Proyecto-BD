<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Administracion de Vuelos</h2>
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
                                        echo "<td>" . "<a href ='../adminConsults/actualizarVuelos.php?id=".$row['idVuelo']."'>Actualizar </a>" . "</td>";
                                        echo "<td>" . "<a href ='../adminConsults/eliminarVuelos.php?id=".$row['idVuelo']."'>Borrar </a>" . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
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