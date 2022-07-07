<?php

 $server = "localhost";
 $baseDatos = "mvc";
 $usuario = "root";
 $contrasena = "";


 $con = mysqli_connect($server, $usuario, $contrasena,  $baseDatos);

// if(isset($con)){
//     echo 'Conectado';
// }else{
//     echo "error";
// }