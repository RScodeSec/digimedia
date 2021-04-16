<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Queremos ayudarte para que tu PYME o emprendimiento empiece a aumentar sus ventas. Comunícate con nosotros para trabajar estrategias de marketing digital que beneficiarán al crecimiento de tu negocio.">
  <link rel="stylesheet" href="../src/style/contacto.css"/>
  <link rel="stylesheet" href="../src/style/partials/footer.css">
  <link rel="stylesheet" href="../src/style/partials/navbar.css">
  <title>Contáctanos | Agencia de Marketing Digital para PYMES | DigiMedia – Laboratorio Emprendedor</title>
  <link href="https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
  <div class="contenedor">
    <nav>
      <a href="../index.php" class="logo">
        <img src="../src/images/logo.webp" alt="Digital Media" />
      </a>
      <input type="checkbox" id="click" />
      <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="blog/blog1.php">Blogs</a></li>
        <li><a class="active" href="contacto.php">Contáctanos</a></li>
      </ul>
    </nav>
    <div class="espacio" style="height: 80px;"></div>
    <main class="main">
      <div class="presentacion">
        <div class="texto">
          <span>
            <b>CONTÁ</b>
          </span>
        </div>
        <div class="imagen">
          <img src="../src/images/Mark2.webp" alt="" />
        </div>
        <div class="rectangulo">
          <span>
            En DIGIMEDIA estamos enfocados en generar valor para tu negocio
            con el fin de incrementar las ventas de tus productos y servicios.
            Por tal motivo, te invitamos a dejar tus datos de contacto con el
            fin de conocernos mejor y plantear estrategias de marketing
            digital que brinden soluciones a la medida de tu emprendimiento.
            Soy Mark&nbsp;y espero poder estar en contacto contigo para pactar
            una reunión, resolver tus inquietudes y sacar adelante tu proyecto
          </span>
        </div>
      </div>

      <div class="formulario">
        <div class="texto_form">
          <span>
            CTANOS
          </span>
          <span class="oculto">CONTACTANOS</span>
        </div>
        <form action="../controladores/enviarcorreo.php" method="post">
          <input type="text" placeholder="Nombre" name="nombre" />
          <input type="text" placeholder="Email" name="email" class="form" />
          <input type="text" placeholder="Digite 9 números" name="telefono" />
          <input type="text" placeholder="Empresa" name="empresa" />
          <input type="text" placeholder="Ubicación" name="ubicacion" />
          <textarea placeholder="Escriba su mensaje" name="mensaje" rows="5"></textarea>
          <input type="submit" name="enviar" value="Enviar" />
        </form>
      </div>
    </main>
    <div class="espacio" style="height: 80px;"></div>
    <?php include_once "footer.php" ?>
</div>
  <script src="../js/index.js" text="text/javascript"></script>
  <script src="https://kit.fontawesome.com/022b0abea9.js" crossorigin="anonymous"></script>
</body>

</html>