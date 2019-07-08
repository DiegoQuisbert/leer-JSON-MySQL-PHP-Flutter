<?php

    require "conexion.php";
    
    // PRUEBAS
    //$usuario = "cheko";
    
    $sql = "SELECT * FROM usuarios limit 1";
    $query = $mysqli->query($sql);
    
    $datos = array();
    
    while($resultado = $query->fetch_assoc()) {
        echo json_encode($resultado);
        //$datos[] = $resultado;
    }
    
    //echo json_encode(array("usuarios" => $datos));
?>
