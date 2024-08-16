<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargando</title>

</head>

<body>

    <?php
    $listo = false;
    $cookie_imagenProducto = $_POST['imagenProducto'];
    $cookie_nombreProducto = $_POST['nombreProducto'];
    $cookie_materialProducto = $_REQUEST['material'];
    $cookie_colorProducto = $_REQUEST['colorProducto'];
    $cookie_unidadesProducto = $_REQUEST['unidades'];
    $cookie_precioProducto = $_REQUEST['precio'];

    $arregloParaCookieProducto = array(
        'linkImagen' => $cookie_imagenProducto,
        'nombreProducto' => $cookie_nombreProducto,
        'materialProducto' => $cookie_materialProducto,
        'colorProducto' => $cookie_colorProducto,
        'unidadesProducto' => $cookie_unidadesProducto,
        'precioProducto' => $cookie_precioProducto
    );

    if (isset($_COOKIE['cookieProducto0'])) {
        for ($i = 0; $i <= (count($_COOKIE)); $i++) {
            if (isset($_COOKIE['cookieProducto' . $i])) {
                $arregloCookie = unserialize($_COOKIE['cookieProducto' . $i]);
            }

            if (!isset($_COOKIE['cookieProducto' . $i])) {

                setcookie("cookieProducto" . $i, serialize($arregloParaCookieProducto), time() + (3600 * 24 * 365), "/");
                $listo = true;
                break;
            } elseif (
                $arregloCookie['nombreProducto'] == $cookie_nombreProducto and
                $arregloCookie['materialProducto'] == $cookie_materialProducto and
                $arregloCookie['colorProducto'] == $cookie_colorProducto
            ) {
                setcookie("cookieProducto" . $i, serialize($arregloParaCookieProducto), time() + (3600 * 24 * 365), "/");
                $listo = true;
                break;
            }
        }
    } else {
        setcookie("cookieProducto0", serialize($arregloParaCookieProducto), time() + (3600 * 24 * 365), "/");
        $listo = true;
    }
    if ($listo != true) {
        
        echo "<center><img src='Imagenes/GIFParaCarrito/Error.gif' alt='No se logro cargar la imagen' width='850px' height='850px'></center>";
    } else {

        echo "<center><img src='Imagenes/GIFParaCarrito/Agregando.gif' alt='No se logro cargar la imagen' width='850px' height='850px'></center>";
    }

    //setcookie("NOMBRE DE LA COOKIE", "VALOR QUE TIENE LA COOKIE", tiempo que vive la cookie, direccion en las que puede estar la cookie, nombre de domino);
    ?>

    <script>
        // En la siguiente línea el parámetro final la unidad son milisegundos
        setTimeout(function() {
            window.location = "<?= 'Productos.php' ?>";
        }, 3000); // Aquí es donde se "redirecciona" luego de trancurridos los 3 segundos
    </script>
</body>

</html>

<?php
?>