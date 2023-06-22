<?php

$secciones_validas = [
  "home" => [
    "titulo" => "Bienvenidos"
  ],
  "libro" => [
    "titulo" => "libros"
  ] ,
  "libros" => [
    "titulo" => "libro"
  ] ,
  "integrantes" => [
    "titulo" => "integrantes"
  ] ,
    "envio" => [
      "titulo" => "Envios"
    ],
    "contacto" => [
       "titulo" => "Contacto"
    ],
];

$seccion = ($_GET['sec']) ??  "home";


/* Buscar si existe el indice del array */

if(!array_key_exists($seccion, $secciones_validas)){
  $vista = "404";
  $titulo = "404 - Pagina no encontrada";
}else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]['titulo'];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joyceprousto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    body { background-color: #D6DBDF; }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark"data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?sec=home"><img class="" style="width:10rem" src="img/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Editoriales
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?sec=libro&ser=alma">Alma Editzioni</a></li>
            <li><a class="dropdown-item" href="index.php?sec=libro&ser=edilingua">Edilingua</a></li>
            <li><a class="dropdown-item" href="index.php?sec=libro&ser=orimini">Orimini</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?sec=integrantes">Creadores de la pagina</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?sec=contacto">Contacto</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  

   <?php
   require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";
   ?>
</main>

<footer class="bg-dark text-white text-center p-4 mt-5">
  <p>Todos los derechos reservados - cfp20 - 2023</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>