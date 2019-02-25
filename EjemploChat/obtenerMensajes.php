<?php
    
     require "conexion.php";
    
     $accion = $_POST['accion'];
     $mensaje = $_POST['mensaje'];
    //$accion = "nuevo";
    //$mensaje = "Bien y tu";
    
    if($accion == "nuevo") {
        $sql_insert = "INSERT INTO mensajes VALUES('', '$mensaje')";
        $query = $mysqli->query($sql_insert);

        $sql_consult = "SELECT * FROM mensajes";
        $query = $mysqli->query($sql_consult);
        
        $data = array();
        
        $num = $query->num_rows;
        
        if($num > 0) {
            while($resultado = $query->fetch_assoc()) {
                $data[] = $resultado;
            }
            echo json_encode(array("mensajes" => $data));
        }
        
        $mysqli->close();

        
    } else {
        $sql_consult = "SELECT * FROM mensajes";
        $query = $mysqli->query($sql_consult);
        
        $data = array();
        
        $num = $query->num_rows;
        
        if($num > 0) {
            while($resultado = $query->fetch_assoc()) {
                $data[] = $resultado;
            }
            echo json_encode(array("mensajes" => $data));
        }
        
        $mysqli->close();
    }
    
     ?>
