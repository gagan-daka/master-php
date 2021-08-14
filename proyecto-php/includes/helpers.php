<?php

function mostrarErrores($errores, $campo){
    $alerta ='';
    if(isset($errores[$campo])&& !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }

    return $alerta;
}

function borrarErrores(){
    
    //$borrado = false;

    if(isset($_SESSION['completado'])){
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }
    

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }

    //return $borrado;
}