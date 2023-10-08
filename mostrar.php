<!--este es el catalogo de informacion-->
<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo_categoria.css">
    <title>Historietas</title>
</head>

<body>
    <center>
        <tr>INDICE DE HISTORIETAS</tr>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Grupo</th>
                    <th>Pers</th>
                    <th>Genero</th>
                    <th>director</th>
                    <th>Anio</th>
                    <th>Pais</th>
                    <th>Imagen</th>

                </tr>
            </thead>
            <!---------------------------------titulo------------------------------->
            <tbody>
                <?php
                include ("open.php");//base de datos del archivo
                $consulta = "SELECT * FROM jugadores";//tabla del servidor
                $resultado = $conexion->query($consulta);
                while($row = $resultado ->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['grup']; ?></td>
                    <td><?php echo $row['pers']; ?></td>
                    <td><?php echo $row['gener']; ?></td>
                    <td><?php echo $row['direct']; ?></td>
                    <td><?php echo $row['anio']; ?></td>
                    <td><?php echo $row['pais']; ?></td>
                 <td> <img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"> </td>
                </tr>   

                <?php
                }
                ?>

            </tbody>


        </table>
    </center>
    
</body>
</html>



