<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="CSSBaseUser.css">
  <link rel="stylesheet" type="text/css" href="Boton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

  <title>Factura</title>
  <style>
    .factura {

      font-family: Arial, sans-serif;
      border: 1px solid #ccc;

      padding: 20px;

      max-width: 600px;

      margin: 0 auto;

    }

    .encabezado {

      text-align: center;

      margin-bottom: 20px;

    }

    .detalles {

      margin-bottom: 20px;

    }

    table {

      width: 100%;

      border-collapse: collapse;

    }

    th,
    td {

      border: 1px solid #ccc;

      padding: 8px;

      text-align: left;

    }

    .total {

      text-align: right;

    }
  </style>

</head>

<body align="center">

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

  <br>
  <br>
  <br>
  <br>
  <p ALIGN="CENTER" name="titulo" id="titulo">
    <font size="+6" color="pink">Factura</font>
  </p>
  <br><br>
  <br><br>
  <?php
  /*
                    $host_name = 'db5013984530.hosting-data.io';
                    $database = 'dbs11691856';
                    $user_name = 'dbu2566225';
                    $password = 'Usuarios04!';
                    $encontrado = false;

                    $link = new mysqli($host_name, $user_name, $password, $database);

                    if ($link->connect_error) {
                        //Conexión fallida
                        echo "<script>
    window.alert('No se logró conectar con la base de datos');
</script>";
                        die('<p>Failed to connect to MySQL: ' . $link->connect_error . '</p>');
                    } else {
                        //Logro conectarse a la base de datos
                        $registros = mysqli_query($link, "select *
                        from usuarios") or
                            die("Problemas en el select:" . mysqli_error($link));

                        $reg = mysqli_fetch_array($registros);

                       
   mysqli_close($link);
  

                       
                    }
                    */

  ?>

  <?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $metodoPago = $_POST["pago"];
    $costoEnvio = $_POST["envio"] ?? "";
    $tipoMoneda = $_POST["tipoMoneda"] ?? "";
    $montoCompleto = $_POST["monto"] ?? "";
    $tipoTarjeta = $_POST["tipoTarjeta"] ?? "";
    $numeroTarjeta = $_POST["tarjeta"] ?? "";
    $numeroCelular = $_POST["sinpe"] ?? "";
    $metodoEntrega = $_POST["entrega"];
    $diaRetiro = $_POST["dia"] ?? "";
    $horaRetiro = $_POST["hora"] ?? "";
    $provinciaEntrega = $_POST["provincia"] ?? "";
    $precioTotal = $_POST["Precio"] ?? "";
    $precioConIva = $_POST["PrecioConIva"] ?? "";

    // Puedes realizar las operaciones o acciones que necesites con los datos recibidos
    // Por ejemplo, puedes guardar los datos en una base de datos, enviar correos, etc.

    // Para este ejemplo, simplemente imprimimos los datos
    echo "Método de Pago: $metodoPago<br>";
    if ($metodoPago === "Efectivo") {
      echo "Tipo de Moneda: $tipoMoneda<br>";
      echo "Pago Completo: $montoCompleto<br>";
    } elseif ($metodoPago === "Tarjeta") {
      echo "Tipo de Tarjeta: $tipoTarjeta<br>";
      echo "Número de Tarjeta: $numeroTarjeta<br>";
    } elseif ($metodoPago === "Sinpe") {
      echo "Número de Celular (Sinpe): $numeroCelular<br>";
    }

    echo "Método de Entrega: $metodoEntrega<br>";
    if ($metodoEntrega === "tienda") {
      echo "Día de Retiro (Año-Mes-Día): $diaRetiro<br>";
      echo "Hora de Retiro: $horaRetiro<br>";
    } elseif ($metodoEntrega === "domicilio") {
      echo "Provincia de Entrega: $provinciaEntrega<br>";
    }
  }
  ?>

  <div class="factura">

    <div class="encabezado">

      <p>Factura</p>

      <p>Danadeal</p>

      <p>Cédula jurídica: 3-172-295427</p>

      <p>Tel: 8912-3456</p>
      <?php
      $mDate = new DateTime();
      ?>
      <p>Fecha: <?php echo $mDate->format("j/m/Y") ?> </p>

      <p>Cliente:<?php echo $_SESSION['nombre'] ?> </p>

      <p>Cédula cliente: <?php echo $_SESSION['id'] ?> </p>

      <p>Correo cliente: <?php echo $_SESSION['correo'] ?> </p>

    </div>



    <div class="detalles">

      <table>

        <tr>

          <th>Descripción</th>

          <th>Material</th>

          <th>Color</th>

          <th>Cantidad</th>

          <th>Precio Base</th>

          <th>Precio Total</th>

        </tr>

        <tr>
          <?php
          if (isset($_COOKIE)) {
            $subTotal = 0;
            foreach ($_COOKIE as $name => $value) {
              if (unserialize($_COOKIE[$name])) {
                $arregloCookie = unserialize($value);
                $subTotal = $subTotal + $arregloCookie['precioProducto'];

          ?>
                <td><?php echo $arregloCookie['nombreProducto']; ?></td>

                <td><?php echo $arregloCookie['materialProducto']; ?></td>

                <td><?php echo $arregloCookie['colorProducto']; ?></td>

                <td><?php echo $arregloCookie['unidadesProducto']; ?></td>

                <td><?php echo "₡" . ($arregloCookie['precioProducto'] / $arregloCookie['unidadesProducto']); ?></td>

                <td><?php echo "₡" . $arregloCookie['precioProducto']; ?></td>

        </tr>
  <?php
              }
            }
          }
  ?>
  <tr>

    <td>Nombre articulo</td>

    <td>Nombre material</td>

    <td>Nombre color</td>

    <td>Numero de articulo</td>

    <td>Precio Base</td>

    <td>(Cantidad*PrecioBase) + Material </td>

  </tr>

      </table>

    </div>

    <div class="total">

      <p>Subtotal: <?php echo "₡" . $subTotal ?></p>
      <?php
      if ($costoEnvio != "" && $costoEnvio != 0) {
        echo "<p>Envío:" . "₡" . $costoEnvio . "</p>";
        $subTotal = $subTotal + $costoEnvio;
      }
      ?>
      <p>IVA: <?php echo "₡" . ($subTotal * 0.13) ?> </p>

      <p>Total: <?php echo "₡" . $precioConIva ?></p>

    </div>
    <?php
    echo "<br><p>Método de Pago: $metodoPago </p><br>";
    switch ($metodoPago) {
      case 'Efectivo':
        echo "<p>Tipo de Moneda: $tipoMoneda</p><br>";
        echo "<p>Pago Completo: $montoCompleto</p><br>";
        break;
      case 'Tarjeta';
        echo "<p>Tipo de Tarjeta: $tipoTarjeta</p><br>";
        break;
      case 'Sinpe';
        echo "<p>Número de Celular (Sinpe): $numeroCelular</p><br>";

        break;
      default:
        echo 'Hubo algún error con los métodos de pago';
        break;
    }
    echo "<p>Método de Entrega: $metodoEntrega</p><br>";
    if ($metodoEntrega === "tienda") {
      echo "<p>Día de Retiro (Año-Mes-Día): $diaRetiro</p><br>";
      $horaARetirar = new DateTime($horaRetiro);
      echo "<p>Hora de Retiro: " . $horaARetirar->format("g:i A") . "</p><br>";
    } elseif ($metodoEntrega === "domicilio") {
      echo "<p>Provincia de Entrega: $provinciaEntrega</p><br>";
    }
    ?>
    <p>¡Gracias por su negocio y confianza! Esperamos seguir atendiéndole en el futuro.</p>

  </div>
  <br><br>
  <button type="submit" value="Imprimir" name="Imprimir" id="Imprimir" class="ov-btn-grow-ellipse">Imprimir Factura</button>

  <script>
    document.getElementById("Imprimir").addEventListener("click", function() {
      window.print();
    });
  </script>
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
      <small>&copy; 2023 <b>Encuentra tus tesoros brillantes en Danadeal</b>
        <p style="font-size: 12px;"> Todos los Derechos Reservados
        <p>
      </small>
    </div>
  </footer>

</body>

</html>