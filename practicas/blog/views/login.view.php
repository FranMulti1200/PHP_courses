<?php require 'header.php' ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="tituto">Iniciar Sesion</h2>
            <form class="formulario"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesion">
            </form>
        </article>
        <!--<p class="extracto"><?php echo nl2br($post['texto']); ?></p> -->
    </div>
</div>


<?php require 'footer.php' ?>