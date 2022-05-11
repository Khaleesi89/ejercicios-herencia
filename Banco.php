<?php

/* 1. coleccionCuentaCorriente: variable que contiene una colección de instancias de la clase Cuentas
Corrientes.
2. coleccionCajaAhorro: variable que contiene una colección de instancias de la clase Caja de Ahorro .
3. ultimoValorCuentaAsignado: variable que contiene el ultimo valor asignado a una cuenta del banco.
4. coleccionCliente: variable que contiene una colección de instancias de la clase Cliente */


class Banco{
    private $coleccionCuentaCorriente =[];
    private $coleccionCajaAhorro=[];
    private $ultimoValorCuentaAsignado;
    private $coleccionCliente=[];

    public function __construct($arrayCtaCte, $arrayCajaAhorro,$ultValorCuenta,$arrayCliente){
        $this->coleccionCuentaCorriente = $arrayCtaCte;
        $this->coleccionCajaAhorro = $arrayCajaAhorro;
        $this->ultimoValorCuentaAsignado = $ultValorCuenta;
        $this->coleccionCliente = $arrayCliente;

        
    }
    //variable que contiene una colección de instancias de la clase Cuentas Corrientes.
    public function getColeccionCuentaCorriente(){
        return $this->coleccionCuentaCorriente;
    }

    public function setColeccionCuentaCorriente($arrayCtaCte){
        $this->coleccionCuentaCorriente = $arrayCtaCte;
    }

    //variable que contiene una colección de instancias de la clase Caja de Ahorro
    public function getColeccionCajaAhorro(){
        return $this->coleccionCajaAhorro;
    }

    public function setColeccionCajaAhorro($arrayCajaAhorro){
        $this->coleccionCajaAhorro = $arrayCajaAhorro;
    }

    //variable que contiene el ultimo valor asignado a una cuenta del banco
    public function getUltimoValorCuentaAsignado(){
        return $this->ultimoValorCuentaAsignado;
    }

    public function setUltimoValorCuentaAsignado($ultValorCuenta){
        $this->ultimoValorCuentaAsignado = $ultValorCuenta;
    }

    //variable que contiene una colección de instancias de la clase Cliente
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

    //permite agregar un nuevo cliente al Banco
    public function incorporarCliente($objCliente){
        $colexCliente = $this->getColeccionCliente();
        $elementosCount = count($colexCliente);
        if($elementosCount == 0){
            $colexCliente[0] = $objCliente;
            $this->setColeccionCliente($colexCliente);
        }else{
            $colexCliente[$elementosCount] = $objCliente;
            $this->setColeccionCliente($colexCliente);
        }

    }


    //Agregar una nueva Cuenta a la colección de cuentas, verificando que el cliente dueño de la cuenta es cliente del Banco
    public function incorporaCuentaCorriente($numeroCliente){
        $totalClientes = $this->getColeccionCliente();             //PREGUNTAR QUE PASA SI NO LO ENCUENTRA...Q HACEMOS....Y LA NUEVA CUENTA DE DONDE VIENE..NO ESTA EL PARAMETRO
        $i = 0;
        $totalitoArray = count($totalClientes);
        $banderin = true;
        while ($banderin && $i < $totalitoArray){
            $clienteParcial = $totalClientes[$i];
            $numeroClientecito = $clienteParcial->getNroCliente();
            if($numeroCliente == $numeroClientecito){
                
            }
            
            $i++;
        }
    }



    //Agregar una nueva Caja de Ahorro a la colección de cajas de ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco.
    public function incorporarCajaAhorro($nroCliente){

    }



    //Dado un número de Cuenta y un monto, realizar depósito.
    public function realizarDeposito($numCuenta, $cash){

    }



    //Dado un número de Cuenta y un monto, realizar retiro.
    public function realizarRetiro($numberCuenta, $money){

    }
    
    

}