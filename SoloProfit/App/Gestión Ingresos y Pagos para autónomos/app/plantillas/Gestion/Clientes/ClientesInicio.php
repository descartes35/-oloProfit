<?php ob_start() ?>
<h3>Gestión->Clientes</h3>
<hr>
<div class="container text-center">
    <img src="" alt="" srcset=""><!--Aquí una imagen que identifique un poco más la página (archivo) en sí. Por ver.-->
    <h4>Aquí puedes gestionar los <u>clientes</u> con los que tengas contacto</h4>
    <br>
    <button type="button" class="btn btn-outline-success"><a class="colorBlanco" href="index.php?ctl=ClientesAñadir">Añadir un cliente</a></button>
    <button type="button" class="btn btn-outline-success"><a class="colorBlanco" href="index.php?ctl=ClientesGestion">Ver/gestionar clientes</a></button>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include_once __DIR__ . '/../../base.php'; ?>