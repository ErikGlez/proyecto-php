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


function obtenerCategorias($conexion){
  $sql = "SELECT * FROM categorias ORDER BY id ASC;";
  $categorias =mysqli_query($conexion, $sql);

  $resultado = array();

  if($categorias && mysqli_num_rows($categorias) >=1 ){
    $resultado = $categorias;
  }
  return $resultado;

}

function obtenerUltimasEntradas($conexion){
  $sql="SELECT e.*, c.* FROM entradas e ".
  " INNER JOIN categorias c ON e.categoria_id = c.id ".
  "ORDER BY e.id DESC LIMIT 4";

  $entradas = mysqli_query($conexion, $sql);

  $resultado = array();

  if($entradas && mysqli_num_rows($entradas)>=1){
    $resultado = $entradas;

  }

  return $resultado;

}


?>