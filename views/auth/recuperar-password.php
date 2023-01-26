<h1 class="nombre-pagina">Recuperar password</h1>
<p class="descripcio-pagina">Coloca tu nuevo password a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>
<?php if($error){ return;}?>
<form method="POST" class="formulario">
    <!-- Se quita el action para que no borre el token de la parte superior-->
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password"
        placeholder="Tu password">
    </div>
    <input type="submit" class="boton" value="Guardar Password">
</form>

<div class="acciones">
    <a href='/'>¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href='/crear-cuenta'>¿Aún no tienes una cuenta? Crear una cuenta</a>
</div>