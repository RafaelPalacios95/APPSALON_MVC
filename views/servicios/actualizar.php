<h1 class="nombre-pagina">
    Actualizar Servicio
</h1>
<p class="descripcion-pagina">
    Modifica los valores del formulario
</p>

<?php include_once __DIR__ . "/../templates/barra.php";
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form  method="POST" class="formulario"> <!--Quitar el action para que respete el id que se envia -->
    <?php include_once __DIR__ . '/formulario.php'; ?>
    <input type="submit" class="boton" value="Actualizar servicio">
</form>