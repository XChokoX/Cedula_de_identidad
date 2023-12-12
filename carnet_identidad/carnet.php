<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
       .general {
            width: 800px;
            height: 400px;
            background-color: #D2E0FB; 
            margin: 20px auto; 
            border: 4px solid black;
            border-radius: 12px;
        }

       .general_izquierda {
            width: 400px;
            height: 400px;
            background-color: #D2E0FB;
            float: left;
        }

        .general_derecha {
            width: 400px;
            height: 400px;
            background-color: #D2E0FB;
            float: left;
            
        }

        .div_derecha{
            width: 200px;
            height: 80px;
            background-color: #D2E0FB;
            float: left;
            

        }

        .div_derecha_b{
            width: 200px;
            height: 100px;
            background-color: #D2E0FB;
            float: right;


        }

        .general_izquierda img {
            width: 200px;
            height: 200px;
            object-fit: cover; 
            margin-top: 30px;
            border-radius: 15px;

        }

        .rut {
            width: 225px;
            height: 30px;
            background-color: #9E9FA5;
            margin: 0 auto;
            margin-top: 25px;
            border-radius: 15px;
        
        }

        .reverso {
            width: 800px;
            height: 280px;
            background-color: #FFC5C5;
            float: left;
       
        }

        .nacio_profesion {
            width: 225px;
            height: 55px;
            background-color: #9E9FA5;
            border-radius: 8px;
            margin-top: 5px;
        
        }
        
        .subrayado {
        text-decoration: underline;
        }


    </style>
</head>
<body>
    <?php
   

    $fecha_emision = date("Y-m-d");

    function fechaVencimiento($fecha_emision){
        $fecha_vencimiento = date("Y-m-d", strtotime($fecha_emision . " +5 years"));
        return $fecha_vencimiento;
    }
    $fecha_vencimiento = fechaVencimiento($fecha_emision);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['ver_carnet'])) {
            $id = $_POST["id"];
            $nombres = $_POST["nombre"];
            $apellido_paterno = $_POST["apellidoPaterno"];
            $apellido_materno = $_POST["apellidoMaterno"];
            $rut = $_POST["rut"];
            $nacionalidad = $_POST["nacionalidad"];
            $genero = $_POST["genero"];
            $fecha_nacimiento = $_POST["fechaNacimiento"];
            $archivo = $_POST["archivo"];
            $lugar_nacimiento = $_POST["lugarNacimiento"];
            $profesion = $_POST["profesion"];
            $discapacidad = $_POST["discapacidad"];
            $donante = $_POST["donante"];

       
    ?>
    <div class = "general">

            <div class = "general_izquierda">

            <center><h3>CEDULA DE IDENTIDAD</h3></center>

            <center><img src=<?php echo "img/$archivo" ?>alt="Descripción de la imagen"></center>

                <div class = "rut">
                    <center><p>Run: <?php echo $rut ?></p></center>

                </div>

            </div>

            <div class = "general_derecha">

                <div class = "div_derecha">
                <p><span class="subrayado">APELLIDOS</span><br>
                    <?php echo $apellido_paterno . ' ' . $apellido_materno; ?></p> 

                </div>

                <div class = "div_derecha_b">
                
                <p><span class="subrayado">SEXO</span><br><?php echo $genero; ?></p>

                </div>
                
                <div class = "div_derecha">
                <p><span class="subrayado">NOMBRE</span><br><?php echo $nombres; ?></p>

                </div>

                <div class = "div_derecha_b">
                
                <p><span class="subrayado">NUMERO DOCUMENTO</span><br><?php echo $id ; ?></p>
                </div>


                <div class = "div_derecha">
                    <p><span class="subrayado">NACIONALIDAD</span><br><?php echo $nacionalidad; ?></p>

                </div>

                <div class = "div_derecha_b">
                
                <p><span class="subrayado">FECHA DE VENCIMIENTO</span><br><?php echo $fecha_vencimiento; ?></p>
                </div>

                <div class = "div_derecha">
                <p><span class="subrayado">FECHA DE NACIMIENTO</span><?php echo $fecha_nacimiento ; ?></p>

                </div>
                
                <div class = "div_derecha_b">
                
                <p><span class="subrayado">FIRMA TITULAR</span>
                </div>

                <div class = "div_derecha">
                <p><span class="subrayado">FECHA DE EMISION</span><br><?php echo $fecha_emision ; ?></p>

                </div>

            </div>

    </div>
    
    <div class = "general">
        
            <div class = "reverso">
                <?php
                $qrData = "";
                $qrData .= "Nombres: " . $nombres . "\n";
                $qrData .= "Apellido Paterno: " . $apellido_paterno . "\n";
                $qrData .= "Apellido Materno: " . $apellido_materno . "\n";
                $qrData .= "Rut: " . $rut . "\n";
                $qrData .= "Nacionalidad: " . $nacionalidad . "\n";
                $qrData .= "Sexo: " . $genero . "\n";
                $qrData .= "Fecha de Nacimiento: " . $fecha_nacimiento . "\n";
                $qrData .= "Lugar de Nacimiento: " . $lugar_nacimiento . "\n";
                $qrData .= "Profesion: " . $profesion . "\n";
                $qrData .= "Discapacidad: " . $discapacidad . "\n";
                $qrData .= "Donante: " . $donante . "\n";

      
                $qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($qrData) . "&size=300x300&ecc=L";

         
                echo '<img src="' . $qr . '" alt="Código QR" style="width:200px; height:200px;">';
                ?>
            <br>

            <div class = "nacio_profesion">
            
                <p>NACIO: <?php echo $lugar_nacimiento ; ?></p>
                <p>PROFESION: <?php echo $profesion ; ?></p>
                

            </div>
            

            </div>

            <center><p><h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi nobis, earum, molestias mollitia saepe repudiandae neque in laborum, sunt tempore nam. Voluptates totam, doloremque pariatur deleniti aperiam consequatur maiores. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, debitis commodi a, quod error sed non modi eum animi hic minima deserunt illo doloremque fuga id aut ipsum quibusdam. Faceredasdasdasdasd?</h4></p></center>
    </div>

    
    <?php
        }
    }
    ?>


    
</body>
</html>