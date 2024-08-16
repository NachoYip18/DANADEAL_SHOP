<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando</title>
</head>

<body>
    <?php
    //POR ACA PUEDE ESTAR EL PROBLEMA DE QUE SE ESTA CREANDO UNA COOKIE EXTRA
    //Problema de sesiones resuelto
    //La cookie fantasma se crea aquí
    session_start();

    $_SESSION['PrecioTotalProductos'] = $_REQUEST['Precio'];
    if (isset($_SESSION['id']) && isset($_SESSION['nombre']) && isset($_SESSION['correo'])) {


        echo "<script>
                setTimeout(function () {
                    window.location.href = 'InfoPago.php';
                }, 4000);
            </script>";
        
    } else {
        echo "<script>
                                setTimeout(function () {
            window.location.href = 'PaginaLoginUser.php';
        }, 4000);</script>";
    }
    ?>
</body>

</html>