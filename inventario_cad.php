<?php
error_reporting(0);
include('menu.php');
session_start();

function alerta($type, $title, $msg)
{
  echo "<script type='text/javascript'>
	Swal.fire({  
	  icon: '$type',
	  title: '$title',
	  text: '$msg', 
	  showConfirmButton: false,
	  timer: 4000
	})
	</script>";
}

if ($_GET['erro']) {
  echo ".";
  $coderro = $_GET['erro'];

  $nomedominio = $_POST['nomedominio'];
  $nomereino = $_POST['nomereino'];
  $nomefilo = $_POST['nomefilo'];
  $nomeclasse = $_POST['nomeclasse'];
  $nomeordem = $_POST['nomeordem'];
  $nomefamilia = $_POST['nomefamilia'];
  $nomegenero = $_POST['nomegenero'];
  $nomeespecie = $_POST['nomeespecie'];
  $nomeflora = $_POST['nomeflora'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $altura = $_POST['altura'];
  $diametro = $_POST['diametro'];
  $volume = $_POST['volume'];


  if ($coderro == 1) {
    alerta('warning', 'Atenção!', 'Já está cadastrado!');
  } elseif ($coderro == 2) {
    alerta('success', 'Ok!', 'Cadastrado com sucesso!');
  }
}
?>

<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cadastro</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item active">Inventário florestal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cadastro Inventário florestal</h5>

              <!-- General Form Elements -->
              <form method="POST" action="proc_cad_inventario.php">
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Domínio</label>
                  <div class="col-sm-10">
                    <select name="nomedominio" class="form-select" aria-label="Default select example" required>
                      <option>Eukarya</option>

                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Reino</label>
                  <div class="col-sm-10">
                    <select name="nomereino" class="form-select" aria-label="Default select example">
                      <option>Plantae</option>

                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Filo</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomefilo']; ?>" class="form-control" name="nomefilo"
                      required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Classe</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomeclasse']; ?>" class="form-control"
                      name="nomeclasse" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Ordem</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomeordem']; ?>" class="form-control"
                      name="nomeordem" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Família</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomefamilia']; ?>" class="form-control"
                      name="nomefamilia" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Gênero</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomegenero']; ?>" class="form-control"
                      name="nomegenero" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Espécie</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomeespecie']; ?>" class="form-control"
                      name="nomeespecie" required>
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nome popular</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['nomeflora']; ?>" class="form-control"
                      name="nomeflora" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Latitude</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['latitude']; ?>" class="form-control" name="latitude"
                      required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Longitude</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['longitude']; ?>" class="form-control"
                      name="longitude" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Altura(m)</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['altura']; ?>" class="form-control" name="altura"
                      required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Diâmetro(cm)</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['diametro']; ?>" class="form-control" name="diametro"
                      required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Volume(cm3)</label>
                  <div class="col-sm-10">
                    <input type="text" value="<?php echo $_SESSION['volume']; ?>" class="form-control" name="volume"
                      required>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input class="btn btn-primary" type="submit" name="btnCadInventario" value="Cadastrar"><br><br>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



</body>