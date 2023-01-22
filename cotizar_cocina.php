<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remodel | Cotizar Cocina</title>
    <link rel="icon" href="img/logoRemodel_Rojo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require('include/header.php') ?>
<main class="container-md mt-5">
    <h2 class="titulo display-5">Cotiza y Personaliza tu Cocina</h2>
    <form action="cotizacion/calcular_cotizacion.php" method="post" class="row px-5 form-cotización">
    <div class="col-12 mb-3">
            <p class="fs-4 m-0 w-75">Seleccionar material de los gabinetes de la cocina</p>
            <label for="gabinetes" class="form-label fs-5">Modelo Gabinetes:</label>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-around">
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="gabinetes" value="gabinete1" required>
                    <img src="img/gabinete-1.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="gabinetes" value="gabinete2" required>
                    <img src="img/gabinete-2.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="gabinetes" value="gabinete3" required>
                    <img src="img/gabinete-3.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="gabinetes" value="gabinete4" required>
                    <img src="img/gabinete-4.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
            </div>
        </div>
        <p class="fs-4 m-0">Medidas Estandar de las paredes de la cocina</p>
        <div class="col-md-6 mb-3">
            <label for="paredA" class="form-label fs-5">Medida Pared-A:</label>
            <input type="text" name="paredA" class="form-control shadow-sm" value="200 pulgadas = 5.08m" readonly>    
        </div>
        <div class="col-md-6 mb-3">
            <label for="paredbB" class="form-label fs-5">Medida Pared-B:</label>
            <input type="text" name="paredbB" class="form-control shadow-sm" value="200 pulgadas = 5.08m" readonly>    
        </div>
        <div class="col-12 mb-3">
            <p class="fs-4 m-0 w-75">Seleccionar modelo de los elemntos de la Pared-A</p>
            <label for="neveras" class="form-label fs-5">Modelo Nevera - 32 Pulgadas:</label>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-around">
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="neveras" value="nevera1" required>
                    <img src="img/nevera-1.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="neveras" value="nevera2" required>
                    <img src="img/nevera-2.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="neveras" value="nevera3" required>
                    <img src="img/nevera-3.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="neveras" value="nevera4" required>
                    <img src="img/nevera-4.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <label for="estufas" class="form-label fs-5">Modelo Estufa y campana extractora - 30 Pulgadas:</label>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-around">
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="estufas" value="estufa1" required>
                    <img src="img/estufa-1.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="estufas" value="estufa2" required>
                    <img src="img/estufa-2.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="estufas" value="estufa3" required>
                    <img src="img/estufa-3.webp" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="estufas" value="estufa4" required>
                    <img src="img/estufa-4.webp" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <p class="fs-4 m-0 w-75">Seleccionar modelo de los elemntos de la Pared-B</p>
            <label for="ventanas" class="form-label fs-5">Modelo Ventana - 72 Pulgadas:</label>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-around">
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="ventanas" value="ventana1" required>
                    <img src="img/ventana-1.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="ventanas" value="ventana2" required>
                    <img src="img/ventana-2.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="ventanas" value="ventana3" required>
                    <img src="img/ventana-3.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="ventanas" value="ventana4" required>
                    <img src="img/ventana-4.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
            </div>
        </div>
        <div class="col-12 mb-3">
            <p class="fs-4 m-0 w-75">Seleccionar modelo de los elemntos de la Pared-B</p>
            <label for="lavaplatos" class="form-label fs-5">Modelo Lavaplatos - 24 Pulgadas:</label>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-around">
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="lavaplatos" value="lavaplatos1" required>
                    <img src="img/lavaplatos-1.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="lavaplatos" value="lavaplatos2" required>
                    <img src="img/lavaplatos-2.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="lavaplatos" value="lavaplatos3" required>
                    <img src="img/lavaplatos-3.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
                <div class="mb-3">
                    <input class="form-check-input" type="radio" name="lavaplatos" value="lavaplatos4" required>
                    <img src="img/lavaplatos-4.jfif" class="border rounded-4 shadow-sm" whith="150px" height="150px">
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <small class="fw-semibold">Listo para realizar tu cotización has click aquí</small><br>
            <button type="submit" name="cotizar" class="btn btn-lg">Realizar Cotización</button>
        </div>
    </form>
</main>
<!--FOOTER-->
<div class="fixed-xl-bottom">
    <?php require('include/footer.php') ?>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>