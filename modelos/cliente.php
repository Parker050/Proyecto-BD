<?php

class Cliente {
    private $_idUser;
    private $_nombre;
    private $_edad;
    private $_telefono;
    private $_userName;
    private $_pass;
    private $_hora_registro;

    public function __construct($idUser, $nombre, $edad, $telefono, $userName, $pass, $hora_registro) {
        $this->_idUser = $idUser;
        $this->_nombre = $nombre;
        $this->_edad = $edad;
        $this->_telefono = $telefono;
        $this->_userName = $userName;
        $this->_pass = $pass;
        $this->_hora_registro = $hora_registro;
    }

    public function getIdUser() {
        return $this->_idUser;
    }

    public function getNombre() {
        return $this->_nombre;
    }

    public function setNombre($nombre) {
        $this->_nombre = $nombre;
    }

    public function getEdad() {
        return $this->_edad;
    }

    public function setEdad($edad) {
        $this->_edad = $edad;
    }

    public function getTelefono() {
        return $this->_telefono;
    }

    public function setTelefono($telefono) {
        $this->_telefono = $telefono;
    }

    public function getUserName() {
        return $this->_userName;
    }

    public function setUserName($userName) {
        $this->_userName = $userName;
    }

    public function getPass() {
        return $this->_pass;
    }

    public function setPass($pass) {
        $this->_pass = $pass;
    }

    public function getHoraRegistro() {
        return $this->_hora_registro;
    }

    public function setHoraRegistro($hora_registro) {
        $this->_hora_registro = $hora_registro;
    }
}
