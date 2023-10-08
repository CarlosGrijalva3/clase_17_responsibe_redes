<!--este es el catalogo de informacion-->
<?php
  /* local,nombre, contraseña,usuario*/
    /*$conexion = new mysqli("localhost","id20354909_cdga","Cdga3454!","id20354909_eluwu");*/  
    $conexion = new mysqli("localhost","id20354909_cdga","Cdga3454!","id20354909_eluwu");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conecion";
    }

?>