<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
</head>

<body>
    <!-- cabecera -->
    <header id="cabecera">
        <!--logo -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>

    </header>

    <div id="contenedor">
    <!-- barra lateral -->
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

                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="lastname" />
               
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" />

                <input type="submit" value="regisrarse" />
            </form>
        </div>
     </aside>
        <!-- caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    descripcion de la entrada
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eum provident quas nostrum nobis inventore qui aut dolor esse tempora, repellat, vel, doloribus illo quis ullam nisi tempore officia id.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    descripcion de la entrada
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eum provident quas nostrum nobis inventore qui aut dolor esse tempora, repellat, vel, doloribus illo quis ullam nisi tempore officia id.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    descripcion de la entrada
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eum provident quas nostrum nobis inventore qui aut dolor esse tempora, repellat, vel, doloribus illo quis ullam nisi tempore officia id.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    descripcion de la entrada
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eum provident quas nostrum nobis inventore qui aut dolor esse tempora, repellat, vel, doloribus illo quis ullam nisi tempore officia id.
                </p>
            </article>
        </div>

    </div>
  
    <!-- pie de pagina-->
    <footer id="pie">
      <p>Desarrollado por Erik Gonzalez &copy; 2020</p>
    </footer>
</body>

</html>