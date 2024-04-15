<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Ventas Fisicas</h2>
                    </div>
                    <?php
                    // Include config file
                    require_once "../configs/configVentas_Fisicas.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM ventas;";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<div class='table-responsive'>";
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID de Venta</th>";
                                        echo "<th>ID del Vuelo</th>";
                                        echo "<th>Nombre del cliente</th>";
                                        echo "<th>Boletos vendidos</th>";
                                        echo "<th>Monto total</th>";
                                        echo "<th>Hora de venta</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['idVenta'] . "</td>";
                                        echo "<td>" . $row['idVuelo'] . "</td>";
                                        echo "<td>" . $row['nombre_cliente'] . "</td>";
                                        echo "<td>" . $row['boletos'] . "</td>";
                                        echo "<td>" . $row['monto'] . "</td>";
                                        echo "<td>" . $row['hora_registro'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo "</div>";
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
                    <a href="consultasInfoFree.php" class="btn btn-secondary btn-back">Regresar</a>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>



