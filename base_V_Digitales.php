<?php
$jsonInsert ='"Sector": "base_V_Digitales.php","Usuario": "Cliente"';
require "transactionMongo.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas Digitales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: silver;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            padding: 20px;
            background-color: #fff; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; 
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center; 
        }
        .button-container a {
            text-decoration: none;
        }
        .button {
            background-color: #343a40; 
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            width: calc(50% - 5px);
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #212529; 
        }
        .logout-button {
            background-color: #dc3545;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ventas Digitales</h2>
        <div class="button-container">
            <a href="consultas/VD_consultaCliente.php" class="button">Consulta</a>
            <a href="index.php" class="button logout-button">Log Out</a>
        </div>
    </div>
</body>
</html>
