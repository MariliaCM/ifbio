<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IFBIO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png">
        <span class="d-none d-lg-block">IFBIO</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <?php
        if (!empty($_SESSION['id'])) {
          echo '<li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/user.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">';
          echo $_SESSION['nome'];

          echo '</span>
          </a><!-- End Profile Iamge Icon -->
         
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>Meu perfil</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="sair.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sair</span>
              </a>
            </li>

          </ul>';
        } else {

        }
        ?>
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Início</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="projetos.php">
          <i class="bi bi-card-list"></i>
          <span>Projetos</span>
        </a>
      </li>

      <?php
      if (!empty($_SESSION['id'])) { ?>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Registrar</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="avifauna_cad.php">
                <i class="bi bi-circle"></i><span>Avifauna</span>
              </a>
            </li>
            <li>
              <a href="mastofauna_cad.php">
                <i class="bi bi-circle"></i><span>Mastofauna</span>
              </a>
            </li>
            <li>
              <a href="museu_cad.php">
                <i class="bi bi-circle"></i><span>Museu entomológico</span>
              </a>
            </li>
            <li>
              <a href="ervas_cad.php">
                <i class="bi bi-circle"></i><span>Ervas daninhas</span>
              </a>
            </li>
            <li>
              <a href="inventario_cad.php">
                <i class="bi bi-circle"></i><span>Inventário florestal</span>
              </a>
            </li>
            <li>
              <a href="plantas_cad.php">
                <i class="bi bi-circle"></i><span>Plantas medicinais</span>
              </a>
            </li>
            <li>
              <a href="relogio_cad.php">
                <i class="bi bi-circle"></i><span>Relógio medicinal</span>
              </a>
            </li>
            <li>
              <a href="pancs_cad.php">
                <i class="bi bi-circle"></i><span>PANCs</span>
              </a>
            </li>
          </ul>
        </li><!-- End Forms Nav -->
        <?php
      } else {
      }
      ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Pesquisar</span><i
            class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ave_pesquisar.php">
              <i class="bi bi-circle"></i><span>Avifauna</span>
            </a>
          </li>
          <li>
            <a href="masto_pesquisar.php">
              <i class="bi bi-circle"></i><span>Mastofauna</span>
            </a>
          </li>
          <li>
            <a href="museu_pesquisar.php">
              <i class="bi bi-circle"></i><span>Museu entomológico</span>
            </a>
          </li>
          <li>
            <a href="ervas_pesquisar.php">
              <i class="bi bi-circle"></i><span>Ervas daninhas</span>
            </a>
          </li>
          <li>
            <a href="inventario_pesquisar.php">
              <i class="bi bi-circle"></i><span>Inventário florestal</span>
            </a>
          </li>
          <li>
            <a href="plantas_pesquisar.php">
              <i class="bi bi-circle"></i><span>Plantas medicinais</span>
            </a>
          </li>
          <li>
            <a href="relogio_pesquisar.php">
              <i class="bi bi-circle"></i><span>Relógio medicinal</span>
            </a>
          </li>
          <li>
            <a href="pancs_pesquisar.php">
              <i class="bi bi-circle"></i><span>PANCs</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="contato.php">
          <i class="bi bi-envelope"></i>
          <span>Contato</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="cadastrar.php">
          <i class="bi bi-person"></i>
          <span>Cadastrar</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js
"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>