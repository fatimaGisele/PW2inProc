<?php 

function validarFormulario ($respuesta) { 

    $nombre = false;
    $telefono = false;
    $mensaje = false;

    if($respuesta) {
        foreach($respuesta as $clave=>$valor) {
            if($clave == "nombre") {
                $nombre = validarNombre($valor);
            } elseif ($clave == "telefono") {
                $telefono = validarTelefono($valor);
            }
        }

        if($nombre && $telefono) {
            return true;
        }
        return false;
    }
}

function validarNombre ($nombre) {
    // Se remueven posibles espacios al principio o final del string.
    $nombre = trim($nombre);
    if(!strpos($nombre, " ")) {
        // No se encuentran espacios en el nombre, por lo tanto es posible que no haya ingresado
        // un apellido o que los haya escrito juntos, lo cual está mal.
        return false;
    }
    return true;
}

function validarTelefono ($telf) {
    $telf = trim($telf);
    if(strlen($telf) > 12) {
        // El número de teléfono introducido es muy largo como para ser válido.
        return false;
    }
    return true;
}

function guardarFormulario ($formulario) {

    if(!file_exists("json")) {
        mkdir("json");
    }

    if(!file_exists("json/contacto.json")) {
        $fp = fopen("json/contacto.json", "w");
        $array = [];
        $array[0] = $formulario;
        fwrite($fp, json_encode($array));
        fclose($fp);
    } else {
        $json = file_get_contents("json/contacto.json");
        $json = utf8_encode($json);
        $array = json_decode($json, true);
        array_push($array, $formulario);
        $fp = fopen("json/contacto.json", "w");
        fwrite($fp, json_encode($array));
        fclose($fp);
    }
}





















?>
