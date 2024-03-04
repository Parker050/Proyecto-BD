<?php
#Vuelos Publicos----------------------------------------------------
class MySQLP{
    public $_connectionP;
    function __construct(){
        $this->_connectionP = mysqli_connect("localhost","JosePancho","Pkerszhz55","vuelos_data", 3306);
        if(!$this->_connectionP)
            echo "Sin exito";
    } 

#Inserts ------
    function insertarVenta (Vuelos $vuelos){
        $id = 0;
        if($vuelos){
            $res = mysqli_query($this->_connectionP,"INSERT INTO ventas (idVuelo, nombre_cliente, boletos, monto) VALUES 
                ('".$venta->getIdVuelo()."','".$venta->getNombre()."','".$venta->getBoletos()."','".$venta->getMonto()."')");
            if($res){
                $id = mysqli_insert_id($this->_connectionP);
            }
        }
        return $id;
    }

#Actualizar ------
    function actualizarVuelo (Vuelos $vuelos){
        $res = false;
        if($vuelos->getIdVuelo()){
            $query = "UPDATE vuelos_publicos SET nombre = '".$vuelos->getNombre()."',".
            "origen ='".$vuelos->getOrigen()."',".
            "destino ='".$vuelos->getDestino()."',".
            "hora_salida ='".$vuelos->getHoraSalida()."',".
            "hora_llegada ='".$vuelos->getHoraLlegada()."',".
            "asientos_dis ='".$vuelos->getAsientosDis()."',".
            "precio ='".$vuelos->getPrecio()."' WHERE idVuelo = ".$vuelos->getIdVuelo();
            $res = mysqli_query($this->_connectionP, $query);
        }
        return $res;
    }

#Borrar --------
    function borrarVuelo (Vuelos $vuelos){
        $res = false;
        if($vuelos -> getIdVuelo()){
            $query = "DELETE FROM vuelos_publicos WHERE idVuelo = ".$vuelos->getIdVuelo();
            $res = mysqli_query($this->_connectionP, $query);
        }
        return $res;
    }
}

#Fisicas----------------------------------------------------
class MySQL{
    public $_connection;
    function __construct(){
        $this->_connection = mysqli_connect("localhost","JosePancho","Pkerszhz55","ventas_fisicas", 3306);
        if(!$this->_connection)
            echo "Sin exito";
    } 

#Inserts ------
function insertarVenta (VentaV $venta){
        $id = 0;
        if($venta){
            $res = mysqli_query($this->_connection,"INSERT INTO ventas (idVuelo, nombre_cliente, boletos, monto) VALUES 
                ('".$venta->getIdVuelo()."','".$venta->getNombre()."','".$venta->getBoletos()."','".$venta->getMonto()."')");
            if($res){
                $id = mysqli_insert_id($this->_connection);
            }
        }
        return $id;
    }
}


#Digitales----------------------------------------------------------
class MySQLD{
    public $_connectionD;
    function __construct(){
        $this->_connectionD = mysqli_connect("localhost","JosePancho","Pkerszhz55","ventas_digitales", 3306);
        if(!$this->_connectionD)
            echo "Sin exito";
    } 

#Inserts ------
function insertarVentaD (VentaV $venta){
        $id = 0;
        if($venta){
            $res = mysqli_query($this->_connectionD,"INSERT INTO ventas (idVuelo, nombre_cliente, boletos, monto) VALUES 
                ('".$venta->getIdVuelo()."','".$venta->getNombre()."','".$venta->getBoletos()."','".$venta->getMonto()."')");
            if($res){
                $id = mysqli_insert_id($this->_connectionD);
            }
        }
        return $id;
    }
}

?>