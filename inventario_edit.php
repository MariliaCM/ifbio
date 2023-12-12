<?php
session_start();
include_once 'conexao.php';
include('menu.php');
error_reporting(0);


if (!empty($_GET['idinventario'])) {
    $idinventario = $_GET['idinventario'];

    $sql = "SELECT idinventario, nomedominio, nomereino, nomefilo, nomeclasse, nomeordem, nomefamilia, nomegenero, nomeespecie, nomeflora, latitude, longitude, altura, diametro, volume from dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join flora on idespecie=fkflora inner join inventario on idflora=fkinventario WHERE idinventario=$idinventario;";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nomedominio = $user_data['nomedominio'];
            $nomereino = $user_data['nomereino'];
            $nomefilo = $user_data['nomefilo'];
            $nomeclasse = $user_data['nomeclasse'];
            $nomeordem = $user_data['nomeordem'];
            $nomefamilia = $user_data['nomefamilia'];
            $nomegenero = $user_data['nomegenero'];
            $nomeespecie = $user_data['nomeespecie'];
            $nomeflora = $user_data['nomeflora'];
            $latitude = $user_data['latitude'];
            $longitude = $user_data['longitude'];
            $altura = $user_data['altura'];
            $diametro = $user_data['diametro'];
            $volume = $user_data['volume'];
        }
    } else {
        header('Location: inventario_pesquisar.php');
    }
} else {
    header('Location: inventario_pesquisar.php');
}
?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cadastro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                    <li class="breadcrumb-item active">Inventário Florestal</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro Inventário Florestal</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="save_edit_inventario.php">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Domínio</label>
                                    <div class="col-sm-10">
                                        <select name="nomedominio" class="form-select"
                                            aria-label="Default select example" required>
                                            <option>Eukarya</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Reino</label>
                                    <div class="col-sm-10">
                                        <select name="nomereino" class="form-select"
                                            aria-label="Default select example">
                                            <option>Plantae</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Filo</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomefilo; ?>" class="form-control"
                                            name="nomefilo" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Classe</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomeclasse; ?>" class="form-control"
                                            name="nomeclasse" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Ordem</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomeordem; ?>" class="form-control"
                                            name="nomeordem" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Família</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomefamilia; ?>" class="form-control"
                                            name="nomefamilia" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Gênero</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomegenero; ?>" class="form-control"
                                            name="nomegenero" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Espécie</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomeespecie; ?>" class="form-control"
                                            name="nomeespecie" required>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nome popular</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomeflora; ?>" class="form-control"
                                            name="nomeflora" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Latitude</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $latitude; ?>" class="form-control"
                                            name="latitude" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Longitude</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $longitude; ?>" class="form-control"
                                            name="longitude" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Altura(m)</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $altura; ?>" class="form-control"
                                            name="altura" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Diâmetro(cm)</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $diametro; ?>" class="form-control"
                                            name="diametro" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Volume(cm3)</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $volume; ?>" class="form-control"
                                            name="volume" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idinventario" value=<?php echo $idinventario; ?>>
                                        <input class="btn btn-primary" type="submit" name="update" id="submit"
                                            value="Cadastrar"><br><br>
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