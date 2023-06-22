<?php
    require_once "libraries/funciones.php";

    $libroSeleccionado = $_GET['ser'] ?? FALSE;

    $productos = catalogo_x_marcas($libroSeleccionado);

?>

<div class="row mt-5">
    <?php if(count($productos)) { ?>
    <?php foreach ($productos as $libros) { ?>
        <div class="col-3 mb-3">
        <div class="card " style="height: 600px">
        <img style=" " src="img/<?= $libros['foto']?>" class="card-img-center" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $libros['nombre']?></h5>
                <p class="card-text text-success text-center">Precio: $ <?= number_format($libros['precio'], 3 ) ?></p>
                <a href="index.php?sec=libros&id=<?= $libros['id'] ?>" class="btn btn-success d-block py-3"> Ver mas</a>
            </div>
        </div>
    </div>


        <?php } ?>
    <?php }else { ?>
        <div class="col">
            <h2 class="text-center mb-5"> No se encontraron productos</h2>
        </div>  
        <?php } ?>
</div>