<?php

// Importamos las clase necesarias
require_once '../../Model/pedido.php';


if (isset($_POST["iddetpedido"])) {
    
    $resultado = Pedido::setServidoDetPedido($_POST["iddetpedido"]);
    
    // Si el resultado es false significara que ha fallado sino, habra sido un exito
    if ($resultado == false) {
        echo "error";   
    } else {
        echo "success";
    }
} else { // Si no hemos enviado el ID simplemente aparecera error
    echo "error1";  
}