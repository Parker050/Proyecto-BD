<?php

class Vuelos{
    private $_idVuelo;
    private $_nombre;
    private $_origen;
    private $_destino;
    private $_hora_salida;
    private $_hora_llegada;
    private $_asientos_dis;
    private $_precio;
 
    function __construct($idVuelo, $nombre, $origen, $destino, $hora_salida, $hora_llegada, $asientos_dis, $precio){
        $this->_idVuelo = $idVuelo;
        $this->_nombre = $nombre;
        $this->_origen = $origen;
        $this->_destino = $destino;
        $this->_hora_salida = $hora_salida;
        $this->_hora_llegada = $hora_llegada;
        $this->_asientos_dis = $asientos_dis;
        $this->_precio = $precio;
    }

    function getIdVuelo(){
        return $this->_idVuelo;
    }
    function getNombre(){
        return $this->_nombre;
    }
    function setNombre($nombre){
        $this->_nombre = $_nombre;
    }
    function getOrigen(){
        return $this->_origen;
    }
    function setOrigen($origen){
        $this->_origen = $_origen;
    }
    function getDestino(){
        return $this->_destino;
    }
    function setDestino($destino){
        $this->_destino = $_destino;
    }
    function getHoraSalida(){
        return $this->_hora_salida;
    }
    function setHoraSalida($hora_salida){
        $this->_hora_salida = $_hora_salida;
    }
    function getHoraLlegada(){
        return $this->_hora_llegada;
    }
    function setHoraLlegada($hora_llegada){
        $this->_hora_llegada = $_hora_llegada;
    }
    function getAsientosDis(){
        return $this->_asientos_dis;
    }
    function setAsientosDis($asientos_dis){
        $this->_asientos_dis = $_asientos_dis;
    }
    function getPrecio(){
        return $this->_precio;
    }
    function setPrecio($precio){
        $this->_precio = $_precio;
    }
}