<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresando datos</title>
</head>

<body>
    <?php
    
    $registrado = false;

    $conexion = mysqli_connect("localhost", "root", "", "dbs11691856") or
                    die("Problemas con la conexión");
        //Logro conectarse a la base de datos

        $query = mysqli_query($conexion, "insert into usuarios(nombre, cedula, fechaNacimiento, correo, contrasena) values 
        ('$_REQUEST[nombre]','$_REQUEST[cedula]','$_REQUEST[fechaNacimiento]','$_REQUEST[correo]','$_REQUEST[contrasena]')")
                or die("Problemas en el insert" . mysqli_error($conexion));
            if ($query) {
                $registrado = true;
            }
        mysqli_close($conexion);
        if (!$registrado) {
            echo "<script>window.alert('No se logró registrar la persona.');
         </script>";
          echo "<script>
                                setTimeout(function () {
            window.location.href = 'RegistroUsuario.php';
        }, 0);</script>";
        } else {
            echo "<script>
                                setTimeout(function () {
            window.location.href = 'PaginaLoginUser.php';
        }, 0);</script>";
          echo "<script>window.alert('Persona registrada. Redireccionando a página de login');
         </script>";
        }
    

    ?>
</body>

</html>
<?php
exit();
?>