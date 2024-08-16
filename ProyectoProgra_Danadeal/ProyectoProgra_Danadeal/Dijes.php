<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dijes Danadeal</title>
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  
    <script type="text/javascript">
        function mostrarTotalAPagarMaterial(Dije) {
            var forms = Dije;
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

        <font size="+6" color="pink">Dijes</font>

    </p>
<center>
    <p>
    <form action="cargarProducto.php" method="post" id="formDije1">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                    ₡2700
                    <br>
                    <br>
                    <img src="Imagenes/Productos/Dijes/DijeAncla.webp" id="DijeAncla" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeAncla.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE ANCLA DORADA
                    <input type="text" value="DIJE ANCLA DORADA" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije1'))" required>
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije1'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije1'))" required>
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="2700" readonly>
                    <input type="text" value="2700" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formDije2">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3450
                <br>
                <br>
                <img src="Imagenes/Productos/Dijes/DijeArbol.webp" id="DijeArbol" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeArbol.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE NATURALEZA COLGANTE
                    <input type="text" value="DIJE NATURALEZA COLGANTE" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije2'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije2'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije2'))">
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
    <form action="cargarProducto.php" method="post" id="formDije3">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3500
<br>
<br>
                    <img src="Imagenes/Productos/Dijes/DijeBola2.webp" id="DijeBola2" alt="No funciono la ubicacion"
                      alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeBola2.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE ESPIRAL DE LA VIDA
                    <input type="text" value="DIJE ESPIRAL DE LA VIDA" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije3'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije3'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije3'))">
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
    <form action="cargarProducto.php" method="post" id="formDije4">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3750
<br>
<br>
                    <img src="Imagenes/Productos/Dijes/DijeCorazonMezclado.webp" id="DijeCorazonMezclado" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeCorazonMezclado.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE TESORO DEL CORAZÓN
                    <input type="text" value="DIJE TESORO DEL CORAZÓN" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije4'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije4'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije4'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="3750" readonly>
                    <input type="text" value="3750" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formDije5">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡4500
                <br>
                <br>
                <img src="Imagenes/Productos/Dijes/DijeFigura2.webp" id="DijeFigura2" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeFigura2.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE MARAVILLA DE FELICIDAD
                    <input type="text" value="DIJE MARAVILLA DE FELICIDAD" style="display: none;"
                        name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije5'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije5'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije5'))">
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
    <form action="cargarProducto.php" method="post" id="formDije6">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡4000
                <br>
                <br>    
                <img src="Imagenes/Productos/Dijes/DijeFlor.webp" id="DijeFlor" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeFlor.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE GIRASOL RELUCIENTE
                    <input type="text" value="DIJE GIRASOL RELUCIENTE" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije6'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije6'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije6'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="4000" readonly>
                    <input type="text" value="4000" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formDije7">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3500
                <br><br>  
                <img src="Imagenes/Productos/Dijes/DijeLlave.webp" id="DijeLlave" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeLlave.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE PUERTA AL PARAÍSO
                    <input type="text" value="DIJE PUERTA AL PARAÍSO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije7'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije7'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije7'))">
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
    <form action="cargarProducto.php" method="post" id="formDije8">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5500
                <br>
                <br>
                <img src="Imagenes/Productos/Dijes/DijeNegro.webp" id="DijeNegro" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeNegro.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE SÍMBOLO DE PROSPERIDAD
                    <input type="text" value="DIJE SÍMBOLO DE PROSPERIDAD" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije8'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije8'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije8'))">
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
    <form action="cargarProducto.php" method="post" id="formDije9">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3700
                <br><br> 
                <img src="Imagenes/Productos/Dijes/DijeTortuga.webp" id="DijeTortuga" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeTortuga.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE BALANZA DE VTEL
                    <input type="text" value="DIJE BALANZA DE VTEL" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije9'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije9'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije9'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="3700" readonly>
                    <input type="text" value="3700" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formDije10">
        <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡6500
                <br><br>
                <img src="Imagenes/Productos/Dijes/DijeVerde.webp" id="DijeVerde" alt="No funciono la ubicacion"
                    alt="Texto Alternativo para la imágen" width="200px" height="200px">
                    <input type="text" value="Imagenes/Productos/Dijes/DijeVerde.webp" style="display: none;"
                        name="imagenProducto">
                </th>

                <th colspan="2">
                    <br>
                    DIJE ESMERALDA TRIANGULAR
                    <input type="text" value="DIJE ESMERALDA TRIANGULAR" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>

                <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" id="Oro" required onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije10'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formDije10'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formDije10'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="6500" readonly>
                    <input type="text" value="6500" style="display: none;" name="basedPrice" id="basedPrice">
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