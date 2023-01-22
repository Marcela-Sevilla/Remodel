
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Agendar Cita</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php echo 'Señ@r <b>'.$nombre.'</b> su cita ha sido agendada con exito, le llegara un correo de confirmación a la dirección de correo <b>'.$correo.'</b> y un mensaje de texto al número <b>'.$numero_celular.'</b>.';
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>