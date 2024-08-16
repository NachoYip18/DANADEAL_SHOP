<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulseras Danadeal</title>
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  
   <script type="text/javascript">
        function mostrarTotalAPagarMaterial(Pulsera) {
            var forms = Pulsera;
            var mat1 = forms.querySelector('#Oro');
            var mat2 = forms.querySelector('#Plata');
            var units = forms.querySelector('#unidades').value;
            var basedPrice = parseInt(forms.querySelector('#basedPrice').value);
            if (mat1.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 2000);
               
            } else if (mat2.checked) {
                forms.querySelector('#precio').value = units * (basedPrice + 1000);
                
            }    
        }
    </script>

</head>

<body>
    <header style="background-color: black" style="top: 0px">
        <font color="white">
            <center>¡Descuentos exclusivos en camino!</center>
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

    <br>
    <br>
    <br>
    <br>
  
    <p ALIGN="CENTER">

        <font size="+6" color="pink">Pulseras</font>

    </p>
<center>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera1">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡5700
                    <br>
                    <br>
                    <img src="Imagenes/Productos/Pulseras/Pulsera3.webp" id="Pulsera3"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera3.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA LLUVIA DE ARCOÍRIS
                    <input type="text" value="PULSERA LLUVIA DE ARCOÍRIS " style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera1'))" required>
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera1'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera1'))" required>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="5700" readonly>
                    <input type="text" value="5700" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera2">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3450
                <br>
                <br>
                <img src="Imagenes/Productos/Pulseras/Pulsera4.png" id="Pulsera4"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera4.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA ENCANTO GALÁCTICO
                    <input type="text" value="PULSERA ENCANTO GALÁCTICO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera2'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera2'))">
                    <label for="Plata">Plata (+₡1000)</label><br>
                
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera2'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="number" name="precio" id="precio" value="3450" readonly>
                    <input type="text" value="3450" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera3">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5000
<br>
<br>
<img src="Imagenes/Productos/Pulseras/Pulsera5.png" id="Pulsera5"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera5.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA ENTRADA DE DIAMANTES
                    <input type="text" value="PULSERA ENTRADA DE DIAMANTES" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera3'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera3'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera3'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="5000" readonly>
                    <input type="text" value="5000" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera4">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡6750
<br>
<br>
                    <img src="Imagenes/Productos/Pulseras/Pulsera9.webp" id="Pulsera9"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera9.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA CENTELLEANTE
                    <input type="text" value="PULSERA CENTELLEANTE" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera4'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera4'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera4'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="6750" readonly>
                    <input type="text" value="6750" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
    <br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera5">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3500
                <br>
                <br>
                <img src="Imagenes/Productos/Pulseras/Pulsera7.png" id="Pulsera7"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera7.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA DE SERENIDAD
                    <input type="text" value="PULSERA DE SERENIDAD" style="display: none;"
                        name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera5'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera5'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera5'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="3500" readonly>
                    <input type="text" value="3500" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera6">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡7400
                <br>
                <br>    
                <img src="Imagenes/Productos/Pulseras/Pulsera8.png" id="Pulsera8"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera8.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA RESPLANDOR ESTELAR
                    <input type="text" value="PULSERA RESPLANDOR ESTELAR" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera6'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera6'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera6'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="7400" readonly>
                    <input type="text" value="7400" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera7">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3500
                <br><br>  
                <img src="Imagenes/Productos/Pulseras/Pulsera12.png" id="Pulsera12"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera12.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA ESTRELLA FUGAZ
                    <input type="text" value="PULSERA ESTRELLA FUGAZ" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera7'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera7'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera7'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="3500" readonly>
                    <input type="text" value="3500" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera8">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5500
                <br>
                <br>
                <img src="Imagenes/Productos/Pulseras/Pulsera14.png" id="Pulsera14"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera14.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA SPIDER-MAN
                    <input type="text" value="PULSERA SPIDER-MAN" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera8'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera8'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera8'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="5500" readonly>
                    <input type="text" value="5500" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera9">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡4500
                <br><br> 
                <img src="Imagenes/Productos/Pulseras/Pulsera17.png" id="Pulsera17"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera17.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA SERPIENTE LUNAR
                    <input type="text" value="PULSERA SERPIENTE LUNAR" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera9'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera9'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera9'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="4500" readonly>
                    <input type="text" value="4500" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
<br>
    <p>
    <form action="cargarProducto.php" method="post" id="formPulsera10">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡4300
                <br><br>
                <img src="Imagenes/Productos/Pulseras/Pulsera20.png" id="Pulsera20"
                    alt="No funciono la ubicacion" alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Pulseras/Pulsera20.png" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    PULSERA ALAS MÁGICAS
                    <input type="text" value="PULSERA ALAS MÁGICAS" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera10'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formPulsera10'))">
                    <label for="Plata">Plata (+₡1000)</label>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="color">Elija el color del producto:</label>
                    <br><br>
                    <select name="colorProducto" id="colorProducto" required>
                        <option hidden selected>--Seleccione un color--</option>
                        <option value="Plata">Plata</option>
                        <option value="Oro">Oro</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Amarillo">Amarillo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Anaranjado">Anaranjado</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="1">
                    <label for="unidades">Unidades del producto que se desean:</label>
                    <br><br>
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formPulsera10'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="4300" readonly>
                    <input type="text" value="4300" style="display: none;" name="basedPrice" id="basedPrice">
                    <br><br>
                </th>
            </tr>

            <tr>
                <th colspan="2">
                    <br>
                    <button type="submit" class="ov-btn-grow-ellipse">Agregar al carrito</button><br>

                    <br><br>
                </th>
            </tr>
        </table>
    </form>
    </p>
    <center>
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
                El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma DANADEAL. </p>
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
        <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b><p style="font-size: 12px;"> Todos los Derechos Reservados<p></small>
    </div>
</footer>
      
</body>


</html>