<?php

/* 1. coleccionCuentaCorriente: variable que contiene una colección de instancias de la clase Cuentas
Corrientes.
2. coleccionCajaAhorro: variable que contiene una colección de instancias de la clase Caja de Ahorro .
3. ultimoValorCuentaAsignado: variable que contiene el ultimo valor asignado a una cuenta del banco.
4. coleccionCliente: variable que contiene una colección de instancias de la clase Cliente */


class Banco{
    private $coleccionCuentaCorriente;
    private $coleccionCajaAhorro;
    private $ultimoValorCuentaAsignado;
    private $coleccionCliente;

    public function __construct($arrayCtaCte, $arrayCajaAhorro,$ultValorCuenta,$arrayCliente){
        $this->coleccionCuentaCorriente = $arrayCtaCte;
        $this->coleccionCajaAhorro = $arrayCajaAhorro;
        $this->ultimoValorCuentaAsignado = $ultValorCuenta;
        $this->coleccionCliente = $arrayCliente;

        
    }

    public function getColeccionCuentaCorriente(){
        return $this->coleccionCuentaCorriente;
    }

    public function setColeccionCuentaCorriente($arrayCtaCte){
        $this->coleccionCuentaCorriente = $arrayCtaCte;
    }

    public function getColeccionCajaAhorro(){
        return $this->coleccionCajaAhorro;
    }

    public function setColeccionCajaAhorro($arrayCajaAhorro){
        $this->coleccionCajaAhorro = $arrayCajaAhorro;
    }

    public function getUltimoValorCuentaAsignado(){
        return $this->ultimoValorCuentaAsignado;
    }

    public function setUltimoValorCuentaAsignado($ultValorCuenta){
        $this->ultimoValorCuentaAsignado = $ultValorCuenta;
    }

    public function getColeccionCliente(){
        return $this->coleccionCliente;
    }

    public function setColeccionCliente($arrayCliente){
        $this->coleccionCliente = $arrayCliente;
    }

    public function __toString(){
        $info = "
        //////////////////////////
        CUENTAS CORRIENTES: \n
        {$this->getColeccionCuentaCorriente()}\n
        //////////////////////////
        CAJAS DE AHORRO: \n
        {$this->getColeccionCajaAhorro()}\n 
        //////////////////////////
        ultimo valor asignado a una cuenta del banco: \n
        {$this->getUltimoValorCuentaAsignado()}\n 
        //////////////////////////
        CLIENTES: \n
        {$this->getColeccionCliente()}\n
        ////////////////////////// ";
        return $info;
    }

}