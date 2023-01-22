<?php
include('cotizacion/resultado.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remodel | Resultado Cotización</title>
    <link rel="icon" href="img/logoRemodel_Rojo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php require('include/header.php') ?>
<main class="container-md mt-5">
    <div class="alert fs-5" role="alert">
        Cotización finalizada, si deseas agendar una cita con un especialista!
        <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Haz click aquí
        </button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td class="text-center titulo display-5" colspan="3">Cotización</td>
            </tr>
            <tr>
                <th>Elementos</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gabinetes</td>
                <td><?php echo $descripcionGabinete; ?></td>
                <td class="fw-semibold text-center">$<?php echo number_format($precioGabinete, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <td>Nevera</td>
                <td><?php echo $descripcionNevera; ?></td>
                <td class="fw-semibold text-center">$<?php echo number_format($precioNevera, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <td>Estufa</td>
                <td><?php echo $descripcionEstufa; ?></td>
                <td class="fw-semibold text-center">$<?php echo number_format($precioEstufa, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <td>Ventana</td>
                <td><?php echo $descripcionVentana; ?></td>
                <td class="fw-semibold text-center">$<?php echo number_format($precioVentana, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <td>Lavaplatos</td>
                <td><?php echo $descripcionLavaplatos; ?></td>
                <td class="fw-semibold text-center">$<?php echo number_format($precioLavaplatos, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <th colspan="2">Mano de Obra</th>
                <td class="fw-semibold text-center m-o">$<?php echo number_format($mano_obra, 2, ",", "."); ?></td>
            </tr>
            <tr>
                <th colspan="2">Costo Total</th>
                <td class="fw-bold text-center c-t">$<?php echo number_format($costo_total, 2, ",", "."); ?></td>
            </tr>
        </tbody>
    </table>
</main>
<!-- MODAL -->
<?php require('include/modal.php') ?>
<!--FOOTER-->
<div class="fixed-xl-bottom">
    <?php require('include/footer.php') ?>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>
</body>
</html>