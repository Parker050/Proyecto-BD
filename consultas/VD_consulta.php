<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <title>Vuelos públicos</title>
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
        .register-message {
            text-align: center;
            margin-top: 20px;
            color: #212529;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Vuelos</h2>
                        <div class="float">
                            <a href="../index.php" class="btn btn-secondary btn-back">Regresar</a>
                        </div>
                    </div>
                    <?php
                    // Include config file
                    require_once "../configs/configVentas_Digitales.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM vuelos_publicos;";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Nombre</th>";
                                        echo "<th>Origen</th>";
                                        echo "<th>Destino</th>";
                                        echo "<th>Hora de salida</th>";
                                        echo "<th>Hora de llegada</th>";
                                        echo "<th>Asientos disponibles</th>";
                                        echo "<th>Precio por boleto</th>";
                                    echo "</tr>";
                                echo "</thead>"; 
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['nombre'] . "</td>";
                                        echo "<td>" . $row['origen'] . "</td>";
                                        echo "<td>" . $row['destino'] . "</td>";
                                        echo "<td>" . $row['hora_salida'] . "</td>";
                                        echo "<td>" . $row['hora_llegada'] . "</td>";
                                        echo "<td>" . $row['asientos_dis'] . "</td>";
                                        echo "<td>" . $row['precio'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No se encontraron registros.</em></p>";
                        }
                    } else{
                        echo "ERROR: No se pudo ejecutar $sql. " . mysqli_error($link);
                    }
                    // Close connection
                    mysqli_close($link);
                    ?>
                    <div class="register-message">
                        <p>Aún no tienes cuenta, regístrate para comprar boletos</p>
                        <a href="../registrarCliente.php" class="btn btn-success btn-create">Registrar Usuario</a>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
