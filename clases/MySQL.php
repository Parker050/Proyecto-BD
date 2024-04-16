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

    function insertarVuelo(Vuelos $vuelos){
        $id = 0;
        if($vuelos){
            $res = mysqli_query($this->_connectionP,"insert into vuelos_data.vuelos_publicos (nombre, origen, destino, hora_salida, hora_llegada, asientos_dis, precio) values 
                (
                '".$vuelos->getNombre()."',
                '".$vuelos->getOrigen()."',
                '".$vuelos->getDestino()."',
                '".$vuelos->getHoraSalida()."',
                '".$vuelos->getHoraLlegada()."',
                '".$vuelos->getAsientosDis()."',
                '".$vuelos->getPrecio()."'
                )");
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

    function actualizarBoletos (boletos $boletos){
        $res = false;
        if($boletos->getIdVuelo()){
            $query = "UPDATE vuelos_publicos SET asientos_dis = asientos_dis - " . $boletos->getAsientosDis() 
            . " WHERE idVuelo = " . $boletos->getIdVuelo();
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


#Clientes-----------------------------------------------------------------
class MySQLC{
    public $_connectionD;
    function __construct(){
        $this->_connectionD = mysqli_connect("localhost","JosePancho","Pkerszhz55","infoFreeFly", 3306);
        if(!$this->_connectionD)
            echo "Sin exito";
    } 

    function insertarCliente(Cliente $cliente) {
        $id = 0;
        if ($cliente) {
            $res = mysqli_query($this->_connectionD, "INSERT INTO clientes (nombre, edad, telefono, userName, pass) VALUES 
                ('" . $cliente->getNombre() . "','" . $cliente->getEdad() . "','" . $cliente->getTelefono() . "','" . $cliente->getUserName() . "','" . $cliente->getPass() . "')");
            if ($res) {
                $id = mysqli_insert_id($this->_connectionD);
            }
        }
        return $id;
    }

    function insertarEmpleado(Cliente $cliente) {
        $id = 0;
        if ($cliente) {
            $res = mysqli_query($this->_connectionD, "INSERT INTO empleados (nombre, edad, telefono, userName, pass) VALUES 
                ('" . $cliente->getNombre() . "','" . $cliente->getEdad() . "','" . $cliente->getTelefono() . "','" . $cliente->getUserName() . "','" . $cliente->getPass() . "')");
            if ($res) {
                $id = mysqli_insert_id($this->_connectionD);
            }
        }
        return $id;
    }


    function borrarCliente (Cliente $cliente){
        $res = false;
        if($cliente -> getIdUser()){
            $query = "DELETE FROM clientes WHERE idUser = ".$cliente->getIdUser();
            $res = mysqli_query($this->_connectionD, $query);
        }
        return $res;
    }

    function borrarEmpleado (Cliente $cliente){
        $res = false;
        if($cliente -> getIdUser()){
            $query = "DELETE FROM empleados WHERE idUser = ".$cliente->getIdUser();
            $res = mysqli_query($this->_connectionD, $query);
        }
        return $res;
    }

}


?>