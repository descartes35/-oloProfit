<!DOCTYPE html>
<html>

<head>
  <title>$oloProfit</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/App/Gestión Ingresos y Pagos para autónomos/web/imagenes/coins-3344603_1280.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href='web/css/responsive.css' />
</head>

<body class="container background">
  <header>
  <div class="margin-nav">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top justify-content-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?ctl=inicio">
                <h1>$oloProfit</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['sesionIniciada'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php?ctl=inicio" aria-expanded="false">
                            Inicio🌐
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php?ctl=resumen" aria-expanded="false">
                            Resumen💶<!--Aquí, mostrar todos los datos que tengan que ver con el usuario, dinero,
                            contactos, productos... De manera ordenada y estructurada, que se vea bien lo que quiere ver
                            el usuario, completo.-->
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php?ctl=inicio" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Registro y Análisis de Transacciones✨
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?ctl=registroIngreso">Registro de Ingresos</a>
                            </li>
                            <li><a class="dropdown-item" href="index.php?ctl=registroGasto">Registro de Gastos</a>
                            </li>
                            <li><a class="dropdown-item" href="index.php?ctl=analisisFinanciero">Análisis
                                    Financiero</a></li>
                            <li><a class="dropdown-item" href="index.php?ctl=reportes_financieros">Reportes
                                    Financieros</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Planificación y Calendario de Citas📇
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?ctl=NuevaCita">Nueva cita</a></li>
                            <li><a class="dropdown-item" href="index.php?ctl=VerCitas">Ver citas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Inventario📒
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?ctl=ProductosInicio">Productos🛍️</a></li>
                            <li><a class="dropdown-item" href="index.php?ctl=ServiciosInicio">Servicios🛠️</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Gestión🗄️
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?ctl=ClientesInicio">Clientes🎯</a></li>
                            <li><a class="dropdown-item" href="index.php?ctl=ProveedoresInicio">Proveedores👨‍💼</a></li>
                            <li><a class="dropdown-item" href="index.php?ctl=ProyectosInicio">Proyectos📝</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Personalización
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php?ctl=inicio" aria-expanded="false">
                            <img class="container" src="../../web/imagenes/blur-1853262_1280.jpg" alt="" srcset="">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php?ctl=cerrarSesion" aria-expanded="false">
                            Cerrar sesión ✈︎
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php?ctl=SesionInicio" aria-expanded="false">
                            Iniciar sesión
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="index.php?ctl=SesionRegsitro" aria-expanded="false">
                            Registrarse
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php
    // var_dump($_SESSION);
    ?>
</div>

  </header>
  <?php
  if (isset($prueba)) {
    // foreach ($prueba as $key => $value) {
    print_r($prueba);
  ?>
    <!-- <p>
      <?php
      // echo $key[$value]
      ?>
    </p> -->
  <?php
    // }
  }
  ?>

  <div id="contenido" class="container">
    <?= $contenido ?>
  </div>
  <br>
  <hr>
  <footer class="text-center bg-dark py-4">
    <p class="text-light">2024 $oloProfit &copy; , todos los derechos reservados</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"><img src="web/imagenes/instagram.png" alt="Instagram"></a></li>
      <li class="list-inline-item"><a href="#"><img src="web/imagenes/x.png" alt="X"></a></li>
      <li class="list-inline-item"><a href="#"><img src="web/imagenes/youtube.png" alt="YouTube"></a></li>
      <li class="list-inline-item"><a href="#"><img src="web/imagenes/gmail.png" alt="Gmail"></a></li>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>