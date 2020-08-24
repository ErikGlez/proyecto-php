<?php
     require_once 'includes/helpers.php';
?>

<aside id="sidebar">
        <div id="login" class="bloque">
            <h3>Identificate</h3>
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