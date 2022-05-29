<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABORATORIO DELIA</title>
</head>
<body style="background-color:black"><center>

    <?php
        if (isset($_POST["Nombre"])) {
            $nombre=$_POST["Nombre"];
            $lab1=$_POST["Laboratorio1"];
            $lab2=$_POST["Laboratorio2"];
            $parcial=$_POST["Parcial"];
            $resultado=($lab1*0.25)+($lab2*0.25)+($parcial*0.5);

            echo "<h1 style='color:green;margin-top:350px'>$nombre su resultado es $resultado</h1>";
        }
    ?>
              
</body>
</html>
