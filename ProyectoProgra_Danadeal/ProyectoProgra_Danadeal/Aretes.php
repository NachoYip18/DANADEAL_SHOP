<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aretes Danadeal</title>
    <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
    <link rel="stylesheet" href="Boton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function mostrarTotalAPagarMaterial(Aretes) {
            var forms = Aretes;
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
        <center>El principal propósito de este sitio web es mostrar la gran variedad de joyeria que maneja la firma DANADEAL. </center>
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

<font size="+6" color="pink">Aretes</font>

</p>
<center>
  <p>
    <form action="cargarProducto.php" method="post" id="formArete1">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                  ₡2000
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes1.png" id="Aretes1" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
                  
              <input type="text" value="Imagenes/Productos/Aretes/Aretes1.png" style="display: none;"
                        name="imagenProducto">  
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES DANZA DE CIRCONITAS
                   <input type="text" value="ARETES DANZA DE CIRCONITAS" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>
    
           <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete1'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete1'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete1'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="2000" readonly>
                    <input type="text" value="2000" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formArete2">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡3500
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes2.png" id="Aretes2" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes2.png" style="display: none;"
                        name="imagenProducto">  
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES SUEÑOS DE HELIOTROPO
                    <input type="text" value="ARETES SUEÑOS DE HELIOTROPO" style="display: none;" name="nombreProducto">

                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete2'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete2'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete2'))">
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
    <form action="cargarProducto.php" method="post" id="formArete3">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5000
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes3.png" id="Aretes3" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes3.png" style="display: none;"
                        name="imagenProducto">   
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES DESLUMBRAMIENTO DE PIRITA
                    <input type="text" value="ARETES DESLUMBRAMIENTO DE PIRITA" style="display: none;" name="nombreProducto">

                    <br><br>
                </th>
    
           <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete3'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete3'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete3'))">
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
    <form action="cargarProducto.php" method="post" id="formArete4">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡7000
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes5.png" id="Aretes5" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes5.png" style="display: none;"
                        name="imagenProducto">    
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES REMOLINO DE RUBÍ
                   <input type="text" value="ARETES REMOLINO DE RUBÍ" style="display: none;" name="nombreProducto">

                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete4'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete4'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete4'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="7000" readonly>
                    <input type="text" value="7000" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formArete5">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5000
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes7.png" id="AreteS7" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes7.png" style="display: none;"
                        name="imagenProducto">   
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES RÁFAGA DE AMETRINO
                    <input type="text" value="ARETES RÁFAGA DE AMETRINO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete5'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete5'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete5'))">
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
    <form action="cargarProducto.php" method="post" id="formArete6">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡6500
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes8.png" id="Aretes8" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes8.png" style="display: none;"
                        name="imagenProducto">    
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES LUMINISCENCIA CORAL
                    <input type="text" value="ARETES LUMINISCENCIA CORAL" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete6'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete6'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete6'))">
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
<br>
  <p>
    <form action="cargarProducto.php" method="post" id="formArete7">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5000
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes9.png" id="Aretes9" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes9.png" style="display: none;"
                        name="imagenProducto">    
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES ESPLENDOR DE PARAÍSO
                   <input type="text" value="ARETES ESPLENDOR DE PARAÍSO" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete7'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete7'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete7'))">
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
    <form action="cargarProducto.php" method="post" id="formArete8">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡2000
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes11.png" id="Aretes11" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes11.png" style="display: none;"
                        name="imagenProducto">    
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES ESTRELLA FULGURANTE
                    <input type="text" value="ARETES ESTRELLA FULGURANTE" style="display: none;" name="nombreProducto">
                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete8'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete8'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete8'))">
                    <br><br>
                </th>
                <th colspan="1">
                    <label for="precio">Precio por pagar:</label>
                    <br><br>
                    <input type="text" name="precio" id="precio" value="2000" readonly>
                    <input type="text" value="2000" style="display: none;" name="basedPrice" id="basedPrice">
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
    <form action="cargarProducto.php" method="post" id="formArete9">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡5500
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes13.webp" id="Aretes13" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
             <input type="text" value="Imagenes/Productos/Aretes/Aretes13.webp" style="display: none;"
                        name="imagenProducto">  
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES VUELO DE CORDIERITA
                    <input type="text" value="ARETES VUELO DE CORDIERITA" style="display: none;" name="nombreProducto">

                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete9'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete9'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete9'))">
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
    <form action="cargarProducto.php" method="post" id="formArete10">
  <table border="10" width="70%" align="center" bgcolor="pink" style="border-color:bisque">
            <tr>
                <th rowspan="4">
                ₡4500
                  <br>
                  <br>
                <img src="Imagenes/Productos/Aretes/Aretes14.webp" id="Aretes14" alt="No funciono la ubicacion"
                        alt="Texto Alternativo para la imágen" width="200px" height="200px">
              <input type="text" value="Imagenes/Productos/Aretes/Aretes14.webp" style="display: none;"
                        name="imagenProducto">  
              </th>
    
                <th colspan="2">
                    <br>
                    ARETES JARDINES OSCUROS
                   <input type="text" value="ARETES JARDINES OSCUROS" style="display: none;" name="nombreProducto">

                    <br><br>
                </th>
    
            <tr>
                <th colspan="1">
                    <label for="material">Elija el material del producto:</label>
                    <br><br>
                    <input type="radio" name="material" value="Oro" required id="Oro" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete10'))">
                    <label for="Oro">Oro (+₡2000)</label><br>
                    <input type="radio" name="material" value="Plata" id="Plata" onclick="mostrarTotalAPagarMaterial(document.getElementById('formArete10'))">
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
                    <input type="number" name="unidades" id="unidades" value="1" onkeyup="mostrarTotalAPagarMaterial(document.getElementById('formArete10'))">
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