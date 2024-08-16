<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Danadeal</title>
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>

<body>
    <header style="background-color: black">
        <font color="white">
            ¡Descuentos exclusivos en camino!
        </font>
    </header>


    <h1 style="background-color: pink">
        <center>DANADEAL</center>
    </h1>


    <center>¡Joyas con sello de calidad!</center>
    <p1>
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
            DANADEAL. </center>
    </p1>
    <BR>

    <nav>
        <a href="Inicio.php">Inicio</a> |
        <a href="Historia.php">Historia</a> |
        <a href="Informacion.php">Información</a> |
        <a href="Productos.php">Productos</a>
        <div class="animation start-portefolio"></div>
    </nav>

    <div class="container-buttons">
        <a href="carritoCompras.php" class="one"></a>
        <a href="PaginaLoginUser.php" class="two"></a>
    </div>
    <table>
        <tr>
            <td width="1000px">




            </td>
            <td width="700px">


            </td>
            <td width="50px">


            </td>
            <td width="1000px">


            </td>
            <td width="90px">


            </td>
            <td width="1000px">


            </td>
            <td width="700px">


            </td>
            <td width="1000px">


            </td>
            <td width="1000px">


            </td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <p ALIGN="CENTER">

        <font size="+6" color="pink">Carrito</font>

    </p>
    <CENTer>
        <?php
        $totalPagar = 0;
        sleep(1);
        if (isset($_COOKIE)) {
            echo count($_COOKIE);

            foreach ($_COOKIE as $name => $value) {
               // echo $value . "<br><br>";
                if (unserialize($_COOKIE[$name])) {
                //Aqui tira un error
                $arregloCookie = unserialize($_COOKIE[$name]);
                
                    $totalPagar = $totalPagar + $arregloCookie['precioProducto'];
        ?>
                    <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
                        <form action="BorrarCookie.php" method="post">
                            <tr>
                                <th rowspan="4">
                                    <img src="<?php echo $arregloCookie['linkImagen']; ?>" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                                </th>

                                <th colspan="2">
                                    <br>
                                    <input type="text" name="nameProducto" value="<?php
                                                                                    echo $arregloCookie['nombreProducto'];
                                                                                    ?>" style="display: none;">
                                    <?php
                                    echo $arregloCookie['nombreProducto'];
                                    ?>
                                    <br><br>
                                </th>

                            <tr>
                                <th colspan="1">
                                    <label for="material">Material del producto:</label>
                                    <input type="text" name="material" value="<?php
                                                                                echo $arregloCookie['materialProducto'];
                                                                                ?>" style="display: none;">
                                    <br><br>
                                    <?php
                                    echo $arregloCookie['materialProducto'];
                                    ?>
                                    <br><br>
                                </th>
                                <th colspan="1">
                                    <label for="color">Color del producto:</label>
                                    <input type="text" name="color" value="<?php
                                                                            echo $arregloCookie['colorProducto'];
                                                                            ?>" style="display: none;">
                                    <br><br>
                                    <?php
                                    echo $arregloCookie['colorProducto'];
                                    ?>
                                    <br><br>
                                </th>
                            </tr>

                            <tr>
                                <th colspan="1">
                                    <label for="unidades">Unidades del producto seleccionado:</label>
                                    <br><br>
                                    <input type="number" name="Unidades" id="" value="<?php echo $arregloCookie['unidadesProducto']; ?>" readonly>
                                    <br><br>
                                </th>
                                <th colspan="1">
                                    <label for="precio">Precio por pagar:</label>
                                    <br><br>
                                    <input type="number" name="Precio" id="" value="<?php echo $arregloCookie['precioProducto']; ?>" readonly>
                                    <br><br>
                                </th>
                            </tr>

                            <tr>
                                <th colspan="2">
                                    <br>
                                    <button type="sutmit" class="ov-btn-grow-ellipse">Quitar</button><br>

                                    <br><br>
                                </th>
                            </tr>
                        </form>
                    </table>
                    <br>
        <?php
                }
            }
        }

        ?>
        <br>
        <br>
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <!--Se tiene que enviar a login para ver si está loggeada la persona
    -->
            <form action="confirmarLogin.php" method="post">

                <tr>

                    <th colspan="2">

                        <br>

                        PRECIO TOTAL A PAGAR POR PRODUCTOS:

                        <br><br>

                    </th>

                    <th colspan="2"><br>

                        <input type="number" name="Precio" id="Precio" value="<?php echo $totalPagar ?>" readonly>

                        <br><br>

                    </th>

                <tr>
        </table>
        <br>
        <button type="submit" class="ov-btn-grow-ellipse">IR A PAGAR</button>
        </form>


    </center>
    <br><br>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="Imagenes/footer/Danadeal-logos.jpeg" alt="Logo de Danadeal">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Podes encontrarnos</h2>
                <p>¡Joyas con sello de calidad!<br><br>
                    El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma
                    DANADEAL. </p>
                <p></p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Flogin" class="fa fa-twitter"></a>

                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
                <p style="font-size: 12px;"> Todos los Derechos Reservados
                <p>
            </small>
        </div>
    </footer>


</body>

</html>