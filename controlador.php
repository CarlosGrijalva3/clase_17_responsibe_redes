<!--este es el catalogo de informacion-->
<?php
    /*Conexion a la base de datoss ---------------- */
    $conn = new mysqli("localhost","id20354909_cadagral","Cdga3454!","id20354909_registro");

    /*...............Proceso de encriptación. . . . */
    if(isset($_POST['registro'])){
        if( !empty(trim($_POST['password_usu'])) && !empty(trim($_POST['usuario_usu']))  ){
            $password_usu   = $_POST['password_usu'];
            $usuario_usu    = $_POST['usuario_usu'];

            $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);


            $conn->query("INSERT INTO usuarios (usuario_usu, password_usu) VALUES('$usuario_usu','$enc_password_usu')");


            if($conn->affected_rows !=1){
                $registro_error = "Hubo un error";
            }
        }
        else{
            $registro_error = "Ambos campos deben ser llenados";
        }
    }
    
?>