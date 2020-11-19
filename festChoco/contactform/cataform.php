<?php


  $connect = new mysqli("localhost", "root", "", "ecommerce") or die('Error al conectar'. mysqli_errno($connect));


  /*Datos*/
  $apellido = $_POST['correo'];

  /*INSERCCION*/

  $query= "INSERT INTO tbl_eventos_cata(correo) VALUES('$apellido')";

  $result = mysqli_query($connect, $query);   
  $result = mysqli_query($connect, $query);   
  if ($result == true) {
    echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script> setTimeout(function() { 
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