<?php
session_start();
error_reporting(0);
include_once('conexao.php');

if (isset($_POST['update'])) {
    $idmuseu = $_POST['idmuseu'];
    $nomedominio = $_POST['nomedominio'];
    $nomereino = $_POST['nomereino'];
    $nomefilo = $_POST['nomefilo'];
    $nomeclasse = $_POST['nomeclasse'];
    $nomeordem = $_POST['nomeordem'];
    $nomefamilia = $_POST['nomefamilia'];
    $nomegenero = $_POST['nomegenero'];
    $nomeespecie = $_POST['nomeespecie'];
    $nomefauna = $_POST['nomefauna'];
    $nomecoletor = $_POST['nomecoletor'];
    $data = $_POST['data'];
    $local = $_POST['local'];

    $sqlUpdate = "UPDATE dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join fauna on idespecie=fkfauna inner join museu on idfauna=fkmuseu
        SET nomefilo='$nomefilo',nomeclasse='$nomeclasse',nomeordem='$nomeordem',nomefamilia='$nomefamilia',nomegenero='$nomegenero',nomeespecie='$nomeespecie',nomefauna='$nomefauna',nomecoletor='$nomecoletor',data='$data',local='$local'
        WHERE idmuseu=$idmuseu;";
    $result = mysqli_query($conn, $sqlUpdate);
    print_r($result);
    $_SESSION['msg'] = 2;
    header('Location: museu_pesquisar.php');

} else {
    $_SESSION['msg'] = 3;
}

?>