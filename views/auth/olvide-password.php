<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu correo a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" placeholder="Tu E-Mail">
    </div>
    
    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿No tienes cuenta? Registrate</a>
</div>