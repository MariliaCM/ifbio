<?php
session_start();
include_once 'conexao.php';
include('menu.php');
error_reporting(0);


if (!empty($_GET['idmuseu'])) {
    $idmuseu = $_GET['idmuseu'];

    $sql = "SELECT idmuseu, nomedominio, nomereino, nomefilo, nomeclasse, nomeordem, nomefamilia, nomegenero, nomeespecie, nomefauna, nomecoletor, data, local from dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join fauna on idespecie=fkfauna inner join museu on idfauna=fkmuseu WHERE idmuseu=$idmuseu;";
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
            $nomefauna = $user_data['nomefauna'];
            $nomecoletor = $user_data['nomecoletor'];
            $data = $user_data['data'];
            $local = $user_data['local'];
        }
    } else {
        header('Location: museu_pesquisar.php');
    }
} else {
    header('Location: museu_pesquisar.php');
}
?>

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cadastro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                    <li class="breadcrumb-item active">Museu Entomológico</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro Museu Entomológico</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="save_edit_museu.php">
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
                                            <option>Animalia</option>

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
                                        <input type="text" value="<?php echo $nomefauna; ?>" class="form-control"
                                            name="nomefauna" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nome do coletor</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $nomecoletor; ?>" class="form-control"
                                            name="nomecoletor" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Data da coleta</label>
                                    <div class="col-sm-10">
                                        <input type="date" value="<?php echo $data ?>" class="form-control" name="data"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Local da coleta</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo $local; ?>" class="form-control"
                                            name="local" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="hidden" name="idmuseu" value=<?php echo $idmuseu; ?>>
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