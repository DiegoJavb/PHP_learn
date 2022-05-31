<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Productos</title>
</head>

<body>
    <div class="contenedor">
        <div class="sub_contenedor">
            <div class="tabla">
                <table class="tabla">
                    <tr>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Existencia</td>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM datos";
                    $result = mysqli_query($conexion, $sql);
                    while ($mostrar = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['Nombre'] ?></td>
                            <td><?php echo $mostrar['Precio'] ?></td>
                            <td><?php echo $mostrar['Cantidad'] ?></td>
                            <td><?php echo $mostrar['Existencias'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</body>

</html>