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
                        <h2 class="pull-left">Ventas Fisicas</h2>
                    </div>
                    <?php
                    // Include config file
                    require_once "../configs/configVentas_Fisicas.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM ventas;";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID de Venta</th>";
                                        echo "<th>ID del Vuelo</th>";
                                        echo "<th>Nombre del cliente</th>";
                                        echo "<th>Boletos vendidos</th>";
                                        echo "<th>Monto total</th>";
                                        echo "<th>Hora de vetna</th>";
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
                                echo "</tbody>";     
                                }                       
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