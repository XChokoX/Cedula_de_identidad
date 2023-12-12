<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Carnets</title>
</head>
<body>
    <?php 
    $username = "root"; 
    $password = ""; 
    $database = "banco_de_datos"; 
    $mysqli = new mysqli("localhost", $username, $password, $database); 
    $query = "SELECT * FROM carnet";

    echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <!-- Encabezados de la tabla -->
          <td>ID</td>
          <td>Nombre</td> 
          <td>Apellido Paterno</td> 
          <td>Apellido Materno</td> 
          <td>Rut</td> 
          <td>Nacionalidad</td> 
          <td>Género</td> 
          <td>Fecha de Nacimiento</td> 
          <td>Archivo</td> 
          <td>Lugar de Nacimiento</td> 
          <td>Profesión</td> 
          <td>Discapacidad</td> 
          <td>Donante</td> 
          <td>Acción</td>
      </tr>';

    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
   
            $id = $row["id"];
            $nombres = $row["nombres"];
            $apellidoPaterno = $row["apellido_paterno"];
            $apellidoMaterno = $row["apellido_materno"];
            $rut = $row["rut"];
            $nacionalidad = $row["nacionalidad"];
            $genero = $row["genero"];
            $fechaNacimiento = $row["fecha_nacimiento"];
            $archivo = $row["archivo"];
            $lugarNacimiento = $row["lugar_de_nacimiento"];
            $profesion = $row["profesion"];
            $discapacidad = $row["discapacidad"];
            $donante = $row["donante"];

            echo '<tr> 
                
                      <td>'.$id.'</td> 
                      <td>'.$nombres.'</td> 
                      <td>'.$apellidoPaterno.'</td> 
                      <td>'.$apellidoMaterno.'</td> 
                      <td>'.$rut.'</td> 
                      <td>'.$nacionalidad.'</td> 
                      <td>'.$genero.'</td> 
                      <td>'.$fechaNacimiento.'</td> 
                      <td>'.$archivo.'</td> 
                      <td>'.$lugarNacimiento.'</td> 
                      <td>'.$profesion.'</td> 
                      <td>'.$discapacidad.'</td> 
                      <td>'.$donante.'</td> 
                   
                      <td>
                        <form method="post" action="carnet.php">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="nombre" value="'.$nombres.'">
                            <input type="hidden" name="apellidoPaterno" value="'.$apellidoPaterno.'">
                            <input type="hidden" name="apellidoMaterno" value="'.$apellidoMaterno.'">
                            <input type="hidden" name="rut" value="'.$rut.'">
                            <input type="hidden" name="nacionalidad" value="'.$nacionalidad.'">
                            <input type="hidden" name="genero" value="'.$genero.'">
                            <input type="hidden" name="fechaNacimiento" value="'.$fechaNacimiento.'">
                            <input type="hidden" name="archivo" value="'.$archivo.'">
                            <input type="hidden" name="lugarNacimiento" value="'.$lugarNacimiento.'">
                            <input type="hidden" name="profesion" value="'.$profesion.'">
                            <input type="hidden" name="discapacidad" value="'.$discapacidad.'">
                            <input type="hidden" name="donante" value="'.$donante.'">
                            <button type="submit" name="ver_carnet">Ver Carnet</button>
                        </form>
                      </td>
                  </tr>';
        }
    } 
    ?>
</body>
</html>