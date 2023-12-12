<?php
session_start();
include_once 'conexao.php';
include('menu.php');
error_reporting(0);


if (!empty($_GET['iddaninha'])) {
    $iddaninha = $_GET['iddaninha'];

    $sql = "SELECT iddaninha, nomedominio, nomereino, nomefilo, nomeclasse, nomeordem, nomefamilia, nomegenero, nomeespecie, nomeflora, problema from dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join flora on idespecie=fkflora inner join daninha on idflora=fkdaninha WHERE iddaninha=$iddaninha;";
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
            $problema = $user_data['problema'];

        }
    } else {
        header('Location: ervas_pesquisar.php');
    }
} else {
    header('Location: ervas_pesquisar.php');
}
?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cadastro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                    <li class="breadcrumb-item active">Ervas Daninhas</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro Ervas Daninhas</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="save_edit_ervas.php">
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
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Problema</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $problema; ?>" class="form-control"
                                            name="problema" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="iddaninha" value=<?php echo $iddaninha; ?>>
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