<?php

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */


$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$telefono= $_POST['tel'];
$email= $_POST["email"];
$mensaje= $_POST["mensaje"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<img width="200px" class="d-block mx-auto mb-5" src="img/Tiktak.png" alt="">
<h1 class="text-center m-5 ">Muchas Gracias por Contactar!</h1>
<h2 class="text-center m-5 " style="color: grey">Tu mensaje ha sido enviado.</h2>
<h2 class="text-center m-5 " style="color: grey">Te responderemos lo antes posible.</h2>

    
</body>
</html>


