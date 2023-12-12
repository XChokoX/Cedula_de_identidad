<?php

require_once("conexion.php");



function subir_archivo($archivo){
    $archivo_nombre = $archivo["name"];
    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
        //echo "El archivo $archivo_nombre ha sido subido correctamente";
        return $archivo_destino;
    }else{
        //echo "Ocurrió un error al subir el archivo";
        return "";
    }

}

function crear_carnet($conexion, $nombres, $apellido_paterno, $apellido_materno, $rut, $nacionalidad, $genero, $fecha_de_nacimiento, $lugar_de_nacimiento, $profesion, $discapacidad, $donante, $nombre_archivo){
    $sql = "INSERT INTO carnet (nombres, apellido_paterno, apellido_materno, rut, nacionalidad, genero, fecha_nacimiento, lugar_de_nacimiento, profesion, discapacidad, donante, archivo) VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', $rut ,'$nacionalidad','$genero','$fecha_de_nacimiento','$lugar_de_nacimiento','$profesion','$discapacidad','$donante','$nombre_archivo')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado){
        //echo "Se inserto correctamente el alumno. <br>";
        return True;
    }else{
        //echo "Error al insertar dato. <br>";
        //echo "La consulta: $sql - Fallo: " . mysqli_error($conexion);
        return FALSE;
    }
}


$nombre_archivo = subir_archivo($_FILES["archivo"]);
if ($nombre_archivo){
    $resultado_agregar_alumno = crear_carnet($conexion, $_POST["nombres"], $_POST["apellido_paterno"], $_POST["apellido_materno"], $_POST["rut"], $_POST["nacionalidad"], $_POST["genero"], $_POST["fecha_nacimiento"], $_POST["lugar_de_nacimiento"], $_POST["profesion"], $_POST["discapacidad"], $_POST["donante"], $nombre_archivo);
    if ($resultado_agregar_alumno) {
        echo "Se añadió alumno correctamente <br>";
    }else{
        echo "Error al añadir alumno <br>";
    }
}else{
    echo "Falló al mover el archivo <br>";
}
