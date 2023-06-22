<?php
  require_once "libraries/funciones.php";

  $libro = catalogo_completo();

  $libroSeleccionado = $_GET['ser'] ?? FALSE;

  $productos = catalogo_x_marcas($libroSeleccionado);
?>

<!-- Bienvenida -->
<h1 class="text-center p-5 text-dark"> ¡Bienvenido a Joyce, Proust & Co!</h1>


<!-- Carousel -->


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/banner/banner 2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Nuestra marca -->
<br>

<h1 class="text-center mt-2">Todos nuestros libros</h1>

<div class="row mt-3">

      <?php foreach ($libro as $libros) { ?>
        
        
    <div class="col-3 p-3">
        <div class="card " style="width:13rem; height: 495px">
        <img style=" " src="img/<?= $libros['foto']?>" class="card-img-center" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $libros['nombre']?></h5>
                <p class="card-text text-success text-center">Precio: $ <?= number_format($libros['precio'], 3 ) ?></p>
                <a href="index.php?sec=libros&id=<?= $libros['id'] ?>" class="btn btn-success d-block py-3"> Ver mas</a>
            </div>
        </div>
  </div>
    <?php } ?> 
      </div>
    </div>
  </div>
</div>

