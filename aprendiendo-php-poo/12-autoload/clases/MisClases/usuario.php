<?php

namespace MisClases; #es un paquete

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Gagan";
        $this->email = "email@gmail.com";
    }
}