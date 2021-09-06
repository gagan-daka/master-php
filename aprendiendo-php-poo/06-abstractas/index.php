<?php

//CLASE ABSTRACTA -> NO SE PUEDE INSTANCIAR

abstract class Ordenador{

    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encender = false;
    }
}

class PcAsus extends Ordenador{
    public $software;
    
    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender(){
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);