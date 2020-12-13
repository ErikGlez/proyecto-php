

<aside id="sidebar">
        <?php if(isset($_SESSION['usuario'])): ?>
        <div id="usuario-logeado" class="bloque">
            <h3>Bienvenido/a, <?= $_SESSION['usuario']['nombre'].' '. $_SESSION['usuario']['apellidos']; ?></h3>
            <!-- botones -->
            <a href="logout.php" class="boton naranja">Crear entrada</a>
            <a href="logout.php" class="boton amarillo">Crear categoria</a>
            <a href="logout.php" class="boton verde">Mis datos</a>
            <a href="logout.php" class="boton">Cerrar Sesión</a>

        </div>
        <?php endif; ?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>
             <?php if(isset($_SESSION['error-login']) && !isset($_SESSION['usuario'])): ?>
                <div class="alerta alerta-error">
                    <h3><?= $_SESSION['error-login']; ?></h3>
                </div>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" />

                <input type="submit" value="entrar" />
            </form>
        </div>
        <!--   REGISTRO -->
        <div id="register" class="bloque">
            
            <h3>Registrate</h3>

            <!-- mostrar errores -->
            <?php if(isset($_SESSION['success'])) : ?>
                   <div class="alerta alerta-exito">
                   <?=$_SESSION['success']?>

                   </div> 
                
            <?php elseif(isset($_SESSION['error']['general'])): ?>
                <div class="alerta alerta-error">
                   <?=$_SESSION['error']['general']?>

                   </div> 
            <?php endif;?>
            <form action="register.php" method="POST">

                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" />
               
                <?php echo isset($_SESSION['error']) ? showError($_SESSION['error'],'name') : ''; ?>

                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="lastname" />

                <?php echo isset($_SESSION['error']) ? showError($_SESSION['error'],'lastname') : ''; ?>
               
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
                <?php echo isset($_SESSION['error']) ? showError($_SESSION['error'],'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" />
                <?php echo isset($_SESSION['error']) ? showError($_SESSION['error'],'password') : ''; ?>

                <input type="submit" name="submit" value="regisrarse" />
            </form>
            
            <?php clearError(); ?>


        </div>
     </aside>