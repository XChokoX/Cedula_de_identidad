<?php

require_once "conexion.php";

$sql = "SELECT * FROM carnet;";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <center><h4>Formulario de Indentidad</h4></center>
                <form action="procesar.php" method="POST" enctype="multipart/form-data" onsubmit="return confirmarDatos()">
                    
                    <label for="nombres" class="form-label">Nombre</label>

                    <input type="text" name="nombres" pattern="[A-Za-z\s]+"  id="nombres" class="form-control" required>
                    


                    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" pattern="[A-Za-z\s]+" id="apellido_paterno" class="form-control" required>

                    <label for="apellido_materno" class="form-label">Apellido Materno</label>
                    <input type="text" name="apellido_materno" pattern="[A-Za-z\s]+" id="apellido_materno" class="form-control" required>
                    
                   
                    <label for="rut" class="form-label">Rut</label>
                    <input type="text" name="rut" id="rut" class="form-control" pattern="[0-9]{1,2}\.?[0-9]{3}\.?[0-9]{3}-?[0-9kK]{1}" title="Ingresa un Rut válido (12345678-9)" title="Ingresa un Rut válido (12345678-9)"> <br>


                    <h5>Nacionalidad</h5>
                    <select name="nacionalidad" id="nacionalidad" onchange="mostrarRegiones()" required>
                        <option value="">Selecciona una opción</option>
                        <option value="chileno">Chileno</option>
                        <option value="extranjero">Extranjero</option>
                    </select><br><br>

                     <h5>Género:</h5>
                    <input type="radio" id="hombre" name="genero" value="Hombre" required>
                    <label for="hombre">Hombre</label><br>

                    <input type="radio" id="mujer" name="genero" value="Mujer" required>
                    <label for="mujer">Mujer</label><br>

                    <input type="radio" id="no_definido" name="genero" value="No Definido" required>
                    <label for="no_definido">No Definido</label><br><br>

                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    <br><br>

                    <label for="archivo" class="form-label">Archivo</label>
                    <input type="file" name="archivo" id="archivo" class="form-control"><br>

                    <label for="lugar_de_nacimiento" class="form-label">Lugar de Nacimiento</label>
                    <input type="text" name="lugar_de_nacimiento"  id="lugar_de_nacimiento" class="form-control"required><br>

                    <label for="profesion" class="form-label">Profesion</label>
                    <input type="text" name="profesion" pattern="[A-Za-z\s]+" id="profesion" class="form-control"required>

                    <h5>Esta inscrito en el registro de discapacidad:</h5>
                    <label>
                        <input type="radio" name="discapacidad" value="si" required> Sí
                    </label><br>
        
                     <label>
                        <input type="radio" name="discapacidad" value="no" required> No
                     </label><br>

                    <h5>Es donante:</h5>
                    <label>
                        <input type="radio" name="donante" value="si" required> Sí
                    </label><br>
        
                     <label>
                        <input type="radio" name="donante" value="no" required> No
                     </label><br>


                    <input type="submit" value="Enviar" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>

    </div>

    
    
</body>
</html>