<?php


if (isset($_POST)) {

    require_once "includes/conexion.php";

    if(!$_SESSION){
        session_start();
    }
   

    //Recogiendo los valores del formulario de registro
    $name = isset($_POST['name'])  ? mysqli_real_escape_string($db, $_POST['name'] )  : false;
    $lastname = isset($_POST['lastname']) ? mysqli_real_escape_string($db, $_POST['lastname'] ) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'] )) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password'] ): false;

    //Array de errores
    $error = array();

    // Validar los datos antes de guardarlos en la basede datos
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $valid_name = true;
    } else {
        $valid_name = false;
        $error['name'] = "El nombre no es valido";
    }

    if (!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
        $valid_lastname = true;
    } else {
        $valid_lastname = false;
        $error['lastname'] = "El apellido no es valido";
    }

    /*
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    preg_match($pattern, $email )
    */

    if (!empty($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid_email = true;
    } else {

        $valid_email = false;
        $error['email'] = "El email no es valido";
    }

    if (!empty($password)) {
        $valid_password = true;
    } else {

        $valid_password = false;
        $error['password'] = "La contraseña está vacia";
    }

    $save_user = false;
    if (count($error) == 0) {
        $save_user = true;

        //cifrar la contraseña
        $encrypt_pass = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //insertar usuario en la tabla usuarios de la BD
        $sql = "INSERT INTO usuarios VALUES(null, '$name' , '$lastname', '$email', '$encrypt_pass', CURDATE());";

        $save = mysqli_query($db, $sql);

        
        if ($save) {
            $_SESSION['success'] = "El registro se ha completado con éxito";
        } else {
            
            $_SESSION['error']['general'] = "fallo al guardar el usuario";
        }
    } else {
        $_SESSION['error'] = $error;
    }
}

header('location: index.php');
