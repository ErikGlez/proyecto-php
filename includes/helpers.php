<?php

function showError($error, $field){
    $alert = '';
    if(isset($error[$field]) && !empty($field)){
      $alert = '<div class="alerta alerta-error">'.$error[$field].'</div>';
    }

    return $alert;
}

function clearError(){
    $clear = false;

    if(isset($_SESSION['error'])){
      $_SESSION['error']= null;
 
      $clear = session_unset();
    }

    if(isset($_SESSION['success'])){
      $_SESSION['success']= null;
 
      session_unset();
    }
   
   



    return $clear;
}

?>