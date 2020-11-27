<?php
// iniciar la sesion y la conexion a db
require_once 'includes/conexion.php';

// recoger los datos del formulario
if(isset($_POST)){


     //borrar sesion de error
     if(isset(  $_SESSION['error-login'])){
        session_unset($_SESSION['error-login']);
    }

    
    $email = trim($_POST['email']);
    $password = $_POST['password'];


    // consulta para comprobar las credenciales del usuario

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login)==1){
        $usuario = mysqli_fetch_assoc($login);
    
        // comprobar la contraseña /cifrar
        $verify = password_verify($password, $usuario['password']);

        if($verify){

            //utilizar una sesion para guadar los datos del usuario logeado
            $_SESSION['usuario']=$usuario;

           
           
        }else{
                // si algo falla enviar unn sesion con el fallo
                $_SESSION['error-login'] = "Datos incorrectos.";
        }
      
    }else{
        //mensaje de error
        $_SESSION['error-login'] = "Usuario no registrado, no se encontraron coincidencias.";
    }

}

 //redirigir al index.php
 header('Location: index.php');






?>