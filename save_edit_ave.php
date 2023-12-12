<?php
session_start();
error_reporting(0);
include_once('conexao.php');

if (isset($_POST['update'])) {
    $idavifauna = $_POST['idavifauna'];
    $nomedominio = $_POST['nomedominio'];
    $nomereino = $_POST['nomereino'];
    $nomefilo = $_POST['nomefilo'];
    $nomeclasse = $_POST['nomeclasse'];
    $nomeordem = $_POST['nomeordem'];
    $nomefamilia = $_POST['nomefamilia'];
    $nomegenero = $_POST['nomegenero'];
    $nomeespecie = $_POST['nomeespecie'];
    $nomefauna = $_POST['nomefauna'];
    $habitat = $_POST['habitat'];
    $habitoalimentar = $_POST['habitoalimentar'];


    $sqlUpdate = "UPDATE dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join fauna on idespecie=fkfauna inner join avifauna on idfauna=fkavifauna
        SET nomefilo='$nomefilo',nomeclasse='$nomeclasse',nomeordem='$nomeordem',nomefamilia='$nomefamilia',nomegenero='$nomegenero',nomeespecie='$nomeespecie',nomefauna='$nomefauna',habitat='$habitat',habitoalimentar='$habitoalimentar'
        WHERE idavifauna=$idavifauna;";
    $result = mysqli_query($conn, $sqlUpdate);
    print_r($result);
    $_SESSION['msg'] = 2;
    header('Location: ave_pesquisar.php');

} else {
    $_SESSION['msg'] = 3;
}

?>