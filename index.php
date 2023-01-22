<?php
require('db/conexion.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remodel</title>
    <link rel="icon" href="img/logoRemodel_Rojo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require('include/header.php') ?>
    <!--Carrusel Imagenes--->
    <section class="container-md mt-5 pt-3">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="img/carrusel-img3.jpg" class="d-block w-100 shadow-lg border" height="400px">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Rta Design</h5>
                  <p>Cocina Integral Mariana 1.80 Metros 11 Puertas 1 Cajones Miel Incluye Mesón Poceta Derecha.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carrusel-img2.jpg" class="d-block w-100 shadow-lg border" height="400px">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Just Home Collection</h5>
                  <p>Cocina Integral Ferretti Incluye Mesón Poceta Derecha + Mueble Alacena.</p>
                </div>
              </div>
              <div class="carousel-item active">
                <img src="img/carrusel-img1.png" class="d-block w-100 shadow-lg border" height="400px">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Rta Design</h5>
                  <p>Cocina Integral Nápoles 1 metro 4 Puertas Roble Ahumado - Blanco con Mesón Poceta Izquierda.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <main class="container-md py-4 mt-5" id="cotizar" data-aos="zoom-in">
      <div class="row">
        <h2 class="titulo display-5">Comienza tú Cotización</h2>
        <div class="col-md-6 p-0">
          <form action="cotizacion/clientes.php" method="post" class="px-5 form-cotización">
            <div class="mb-3">
              <label for="departamento" class="form-label fs-4">Departamento:</label>
              <input type="text" name="departamento" class="form-control" placeholder="Ingresar Departamento" required>
            </div>
            <div class="mb-3">
              <label for="ciudad" class="form-label fs-4">Ciudad:</label>
              <input type="text" name="ciudad" class="form-control" placeholder="Ingresar Ciudad" required>
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label fs-4">Nombre Completo:</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingresar Nombre Completo" required>
            </div>
            <div class="mb-3">
              <label for="celular" class="form-label fs-4">Cel/Tel:</label>
              <input type="text" name="celular" class="form-control" placeholder="Ingresar número" required>
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label fs-4">Email:</label>
              <input type="email" name="correo" class="form-control" placeholder="Ingresar email@" required>
            </div>
            <div class="d-grid gap-2 pt-3">
              <button class="btn fs-4 shadow-sm" name="comenzar" type="submit">Comenzar</button>
            </div>
          </form>
        </div>
        <div class="col-md-6 p-0">
          <div class="h-25">
            <h2 class="titulo m-0">Cotización Cocina Estandar</h2>
            <p class="fs-5 m-0"> Dos paredes - Medidas de 200Pulgadas = 5.08m - Con Nevera de 32 - Estufa de 30 - campana extractora de 30.</p>
          </div>
          <img src="img/modelo-cocina.jpg" class="w-100 h-75" alt="modelo ccina">
        </div>
      </div>
    </main>
    <!-- PROYECTOS -->
    <section class="container-md py-4 mt-4" id="proyectos" data-aos="zoom-in">
      <h2 class="display-5 text-center titulo-s1">Proyectos</h2>
      <div class="row justify-content-center justify-content-md-between px-4 px-md-0">
        <div class="card shadow my-3 p-0" style="width: 18rem;">
          <img src="img/card-img1.jpeg" class="card-img-top">
          <div class="card-body">
            <p class="card-text fs-5">Cocina Integral Miro 1.50 Metros 2 Puertas 2 Cajones Blanco - Rovere Sin Mesón.</p>
          </div>
        </div>
        <div class="card shadow m-3 p-0" style="width: 18rem;">
          <img src="img/card-img2.jpg" class="card-img-top">
          <div class="card-body">
            <p class="card-text fs-5">Cocina Integral Sas 1.50 Metros - Con Iluminación Incluye Mesón Socoda Izquierda.</p>
          </div>
        </div>
        <div class="card shadow my-3 p-0" style="width: 18rem;">
          <img src="img/card-img3.png" class="card-img-top">
          <div class="card-body">
            <p class="card-text fs-5">Cocina Integral Elica 1.20 Metros - Incluye Mesón Acero Inoxidable Poceta Derecha.</p>
          </div>
        </div>
      </div>
    </section>
    <!--FOOTER-->
    <div class="fixed-xl-bottom">
      <?php require('include/footer.php') ?>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>