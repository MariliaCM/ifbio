<?php
session_start();
error_reporting(0);
include_once('conexao.php');

if (isset($_POST['update'])) {
    $idinventario = $_POST['idinventario'];
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

    $sqlUpdate = "UPDATE dominio inner join reino on iddominio=fkreino inner join filo on idreino=fkfilo inner join classe on idfilo=fkclasse inner join ordem on idclasse=fkordem inner join familia on idordem=fkfamilia inner join genero on idfamilia=fkgenero inner join especie on idgenero=fkespecie inner join flora on idespecie=fkflora inner join inventario on idflora=fkinventario
        SET nomefilo='$nomefilo',nomeclasse='$nomeclasse',nomeordem='$nomeordem',nomefamilia='$nomefamilia',nomegenero='$nomegenero',nomeespecie='$nomeespecie',nomeflora='$nomeflora',latitude='$latitude',longitude='$longitude',altura='$altura',diametro='$diametro',volume='$volume'
        WHERE idinventario=$idinventario;";
    $result = mysqli_query($conn, $sqlUpdate);
    print_r($result);
    $_SESSION['msg'] = 2;
    header('Location: inventario_pesquisar.php');

} else {
    $_SESSION['msg'] = 3;
}

?>