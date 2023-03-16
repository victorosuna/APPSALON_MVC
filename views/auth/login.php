<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>


<form method="POST" action="/" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Email"
            name="email"
            value="<?php echo s($auth->email); ?>"
        />
    </div>
    <div class="campo">
        <label for="passsword">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Password"
            name="password"
        />
    </div>

    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿No tienes cuenta? Registrate</a>
    <a href="/olvide">Olvide mi password</a>
</div>