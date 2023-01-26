<h1 class="nombre-pagina">Olvide password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>

<form method="POST" action="/olvide" class="formulario">
    <div class="campo">
        <label for="email">Email</label>  
        <input id="email" name="email" type="email" placeholder="Coloca tu email">  
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href='/'>¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href='/crear-cuenta'>¿Aún no tienes una cuenta? Crear una cuenta</a>
</div>