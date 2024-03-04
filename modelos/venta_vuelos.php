<?php

class VentaV{
    private $_idVenta;
    private $_idVuelo;
    private $_nombre_cliente;
    private $_boletos;
    private $_monto;
    private $_hora_registro;
 
    function __construct($idVenta,$idVuelo, $nombre_cliente, $boletos, $monto, $hora_registro){
        $this->_idVenta = $idVenta;
        $this->_idVuelo = $idVuelo;
        $this->_nombre_cliente = $nombre_cliente;
        $this->_boletos = $boletos;
        $this->_monto = $monto;
        $this->_hora_registro = $hora_registro;
    }

    function getIdVenta(){
        return $this->_idVetna;
    }
    function getIdVuelo(){
        return $this->_idVuelo;
    }

    function getNombre(){
        return $this->_nombre_cliente;
    }
    function setNombre($nombre_cliente){
        $this->_nombre_cliente = $_nombre_cliente;
    }
    function getBoletos(){
        return $this->_boletos;
    }
    function setBoletos($boletos){
        $this->_boletos = $_boletos;
    }
    function getMonto(){
        return $this->_monto;
    }
    function setMonto($monto){
        $this->_monto = $_monto;
    }
    function getHoraRegistro(){
        return $this->_hora_regristro;
    }
    function setHoraRegristro($hora_registro){
        $this->_hora_regristro = $_hora_registro;
    }
}