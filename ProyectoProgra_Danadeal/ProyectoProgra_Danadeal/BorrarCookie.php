<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar cookie</title>
</head>

<body>
    <?php
    if (isset($_COOKIE)) {
        foreach ($_COOKIE as $name => $value) {
            $arregloCookie = unserialize($_COOKIE[$name]);
            if (
                $arregloCookie['nombreProducto'] == $_REQUEST['nameProducto'] and
                $arregloCookie['materialProducto'] == $_REQUEST['material'] and
                $arregloCookie['colorProducto'] == $_REQUEST['color']
            ) {
                setcookie($name, $value, time() - (3600 * 24 * 365), "/");
                break;
            }

        }
    } else {
        echo "<center><img src='Imagenes/GIFParaCarrito/Error.gif' alt='No se logro cargar la imagen' width='850px' height='850px'></center>";
    }


    ?>
 
</body>

</html>
<script>
// En la siguiente línea el parámetro final la unidad son milisegundos
setTimeout(function(){ window.location="<?= 'carritoCompras.php' ?>"; }, 0); // Aquí es donde se "redirecciona" luego de trancurridos los 3 segundos
</script>