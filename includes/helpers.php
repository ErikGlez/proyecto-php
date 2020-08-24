<?php

function showError($error, $field){
    $alert = '';
    if(isset($error[$field]) && !empty($field)){
      $alert = "<div class='alerta alerta-error'>".$error[$field]."</div>";
    }

    return $alert;
}

function clearError(){
    $_SESSION['error']= null;
    $clear = session_unset();

    return $clear;
}

?>