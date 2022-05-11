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


    //Agregar una nueva Cuenta corriente a la colección de cuentas, verificando que el cliente dueño de la cuenta es cliente del Banco
    public function incorporaCuentaCorriente($numeroCliente, $giro){
        $totalClientes = $this->getColeccionCliente();            
        $i = 0;
        $totalitoArray = count($totalClientes);
        $bandera = true;
        while ($bandera && $i < $totalitoArray){
            $clienteParcial = $totalClientes[$i];
            $numeroClientecito = $clienteParcial->getNroCliente();
            if($numeroCliente == $numeroClientecito){
                $colexCtaCte = $this->getColeccionCuentaCorriente();
                $cuentaCreada = new CuentaCorriente ($clienteParcial,$giro);
                array_push ($colexCtaCte,$cuentaCreada);
                $this->setColeccionCuentaCorriente($colexCtaCte);
                $bandera = false;
            }
            $i++;
        }
    }



    //Agregar una nueva Caja de Ahorro a la colección de cajas de ahorro, verificando que el cliente dueño de la cuenta es cliente del Banco.
   
    public function incorporarCajaAhorro($nroCliente){
        $totalClientes = $this->getColeccionCliente();            
        $i = 0;
        $totalitoArray = count($totalClientes);
        $banderin = true;
        while ($banderin && $i < $totalitoArray){
            $clienteParcial = $totalClientes[$i];
            $numeroClientecito = $clienteParcial->getNroCliente();
            if($nroCliente == $numeroClientecito){
                $colexCajaAhorrooo = $this->getColeccionCajaAhorro();
                $cuentaCreada = new CajaDeAhorro($clienteParcial);
                array_push($colexCajaAhorrooo,$cuentaCreada);
                $this->setColeccionCajaAhorro($colexCajaAhorrooo);
                $banderin = false;
            }
            $i++;
        }
    }




    //Dado un número de Cuenta y un monto, realizar depósito.
    public function realizarDeposito($numCuenta, $cash){
        $arrayCuentasTotales1 = $this->getColeccionCajaAhorro();
        $arrayCuentasTotales2 = $this->getColeccionCuentaCorriente();
        $arrayTotal = array_merge()

    }



    //Dado un número de Cuenta y un monto, realizar retiro.
    public function realizarRetiro($numberCuenta, $money){

    }
    
    

}