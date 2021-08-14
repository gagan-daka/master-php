<?php

function mostrarErrores($errores, $campo){
    if(isset($errores[$campo])&& !empty($campo)){
        $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
    }

    return $alerta;
}

function borrarErrores(){
    
    $borrado = false;

    if(isset($_SESSION['completado'])){
        $_SESSION['errores'] = null;
        $borrado = session_unset($_SESSION['errores']);
    }
    

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        session_unset(($_SESSION['completado']));
    }

    return $borrado;
}