<?php


  $connect = new mysqli("localhost", "root", "", "ecommerce") or die('Error al conectar'. mysqli_errno($connect));


  /*Datos*/
  $nombre= $_POST['nombre'];
  $apellido = $_POST['correo'];
  $n_documento = $_POST['telefono']; 
  $cargo = $_POST['mensaje'];

  /*INSERCCION*/

  $query= "INSERT INTO tbl_contacto(nombre, correo, telefono, mensaje) VALUES('$nombre', '$apellido','$n_documento', '$cargo')";

  $result = mysqli_query($connect, $query);   
  if ($result == true) {
    echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>setTimeout(function() { 
        swal({ 
         title: "Bien!", 
         text: "Te has registrado satisfactoriamente!", 
         type: "success" 
        }, function() { 
         window.location = "../index.html"; 
        }); 
       }, 1000); </script>';
    }else {
        $result='<div class="alert alert-danger">Upps hubo un error</div>';
    }

?>