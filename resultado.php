<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["laboratorio1"])) {
        $lab1=$_POST["laboratorio1"];
        $lab2=$_POST["laboratorio2"];
        $parcial=$_POST["parcial"];

        $resultado=($lab1*0.25)+($lab2*0.25)+($parcial*0.5);

        ?>
        <table>
            <tr>
                <td>
                    <img width="400px" src="https://i2.wp.com/www.pnglib.com/wp-content/uploads/2020/01/will-smith-showing_5e27b74432d53.png?fit=412%2C641&ssl=1" alt="">
                </td>
                <td>
                <h1>
                <?php
                    echo "El resultado es $resultado";
                }
                ?>
            </h1>
                </td>
            </tr>
        </table>
        
</body>
</html>
