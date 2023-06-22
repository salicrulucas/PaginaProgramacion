<?php
    require_once "libraries/funciones.php";

    $id = $_GET['id'] ?? false;

    $libro = productos_x_id($id);


?>

<?php if(isset($libro)){ ?>

<div class="row">
        <div class="col-4" style="width: 20rem">
        <img class="card-img-top" src="img/<?= $libro['foto']?>" alt="">
           </div>
        <div class="col-4">
            <p class="fs-4 m-0 fw-bolt ">Libro estudiante </p>
            <h2 class="card-title fs-2 mb-4"><?= $libro['nombre']?></h2>
            <ul class="list-group">
            <p class="card-text">Editorial:<?= $libro['editorial']?></p>
            <p class="card-text">Numero de Paginas:<?= $libro['numpaginas']?></p>
            <p class="card-text">Nivel:<?= $libro['nivel']?></p>
            <p class="card-text">Idioma:<?= $libro['idioma']?></p>
            <p class="card-text">Genero:<?= $libro['genero']?></p>
            <p class="card-text">Año:<?= $libro['año']?></p>
        </ul>
        </div>
        <div class="card" style="width: 25rem;">
        <div class=" card-body p-2">
            <p class="text-center">Hasta 6 cuotas sin interes en bancos seleccionados.</p>
            <div class="fs-3 mb-3 fw-bold text-center text-success"> $ <?= number_format($libro['precio'], 3 ) ?></div>
            <a href="#" class="btn btn-success w-100 fw-bold">Comprar</a>
        </div>
    </div>
        
    </div>
    

<?php } ?>