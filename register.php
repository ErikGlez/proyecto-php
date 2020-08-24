<?php

if(isset($_POST)){

    //Recogiendo los valores del formulario de registro
    $name = isset($_POST['name'])  ? $_POST['name'] : false;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Array de errores
    $error= array();

    // Validar los datos antes de guardarlos en la basede datos
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name )){
        $valid_name = true;
    }else{
        $valid_name = false;
        $error['nombre'] = "El nombre no es valido";
    }

    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname )){
        $valid_lastname = true;
    }else{
        $valid_lastname = false;
        $error['apellido'] = "El apellido no es valido";
    }
    
    /*
    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
    preg_match($pattern, $email )
    */

    if(!empty($email)  && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $valid_email = true;
        
    }else{
        
        $valid_email = false;
        $error['email'] = "El email no es valido";
    }

    if(!empty($password) ){
        $valid_password = true;
        
    }else{
        
        $valid_password= false;
        $error['contraseña'] = "La contraseña está vacia";
    }

    


}


