<?php
session_start();

//error_reporting(0);

include_once 'conexao.php';
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
$_SESSION['nomedominio'] = $nomedominio;
$_SESSION['nomereino'] = $nomereino;
$_SESSION['nomefilo'] = $nomefilo;
$_SESSION['nomeclasse'] = $nomeclasse;
$_SESSION['nomeordem'] = $nomeordem;
$_SESSION['nomefamilia'] = $nomefamilia;
$_SESSION['nomegenero'] = $nomegenero;
$_SESSION['nomeespecie'] = $nomeespecie;
$_SESSION['nomeflora'] = $nomeflora;
$_SESSION['latitude'] = $latitude;
$_SESSION['longitude'] = $longitude;
$_SESSION['altura'] = $altura;
$_SESSION['diametro'] = $diametro;
$_SESSION['volume'] = $volume;

$btnCadInventario = filter_input(INPUT_POST, 'btnCadInventario', FILTER_SANITIZE_STRING);
if ($btnCadInventario) {
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $sqlf = "SELECT idfilo FROM filo WHERE nomefilo='" . $nomefilo . "'";
    $resultado_filo = mysqli_query($conn, $sqlf);
    $numero_linhasf = mysqli_num_rows($resultado_filo);

    $sqlc = "SELECT idclasse FROM classe WHERE nomeclasse='" . $nomeclasse . "'";
    $resultado_classe = mysqli_query($conn, $sqlc);
    $numero_linhasc = mysqli_num_rows($resultado_classe);

    $sqlo = "SELECT idordem FROM ordem WHERE nomeordem='" . $nomeordem . "'";
    $resultado_ordem = mysqli_query($conn, $sqlo);
    $numero_linhaso = mysqli_num_rows($resultado_ordem);

    $sqlfa = "SELECT idfamilia FROM familia WHERE nomefamilia='" . $nomefamilia . "'";
    $resultado_familia = mysqli_query($conn, $sqlfa);
    $numero_linhasfa = mysqli_num_rows($resultado_familia);

    $sqlg = "SELECT idgenero FROM genero WHERE nomegenero='" . $nomegenero . "'";
    $resultado_genero = mysqli_query($conn, $sqlg);
    $numero_linhasg = mysqli_num_rows($resultado_genero);

    $sqle = "SELECT idespecie FROM especie WHERE nomeespecie='" . $nomeespecie . "'";
    $resultado_especie = mysqli_query($conn, $sqle);
    $numero_linhase = mysqli_num_rows($resultado_especie);

    $sqlflora = "SELECT idflora, fkinventario FROM flora, inventario WHERE nomeflora='" . $nomeflora . "' AND idflora=fkinventario";
    $resultado_flora = mysqli_query($conn, $sqlflora);
    $numero_linhasflora = mysqli_num_rows($resultado_flora);

    if (($numero_linhasf == 0)) {
        $resultado = "INSERT INTO filo(nomefilo,fkfilo) VALUES ('$nomefilo','6');";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhasc == 0)) {
        $resultado = "INSERT INTO classe(nomeclasse, fkclasse) VALUES ('$nomeclasse',(select idfilo from filo where nomefilo='" . $nomefilo . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhaso == 0)) {
        $resultado = "INSERT INTO ordem(nomeordem,fkordem) VALUES ('$nomeordem',(select idclasse from classe where nomeclasse='" . $nomeclasse . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhasfa == 0)) {
        $resultado = "INSERT INTO familia(nomefamilia,fkfamilia) VALUES ('$nomefamilia',(select idordem from ordem where nomeordem='" . $nomeordem . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhasg == 0)) {
        $resultado = "INSERT INTO genero(nomegenero,fkgenero) VALUES ('$nomegenero',(select idfamilia from familia where nomefamilia='" . $nomefamilia . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhase == 0)) {
        $resultado = "INSERT INTO especie(nomeespecie,fkespecie) VALUES ('$nomeespecie',(select idgenero from genero where nomegenero='" . $nomegenero . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhasflora == 0)) {
        $resultado = "INSERT INTO flora(nomeflora,fkflora) VALUES ('$nomeflora',(select idespecie from especie where nomeespecie='" . $nomeespecie . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhasinventario == 0)) {
        $resultado = "INSERT INTO inventario(latitude, longitude, altura, diametro, volume, fkinventario) VALUES ('$latitude','$longitude','$altura','$diametro','$volume',(select idflora from flora where nomeflora='" . $nomeflora . "'));";
        $r = mysqli_query($conn, $resultado);

        header("Location: inventario_cad.php?erro=2");
    } else {
        header("Location: inventario_cad.php?erro=1");
    }
}
unset($_SESSION['nomedominio'], $_SESSION['nomereino'], $_SESSION['nomefilo'], $_SESSION['nomeclasse'], $_SESSION['nomeordem'], $_SESSION['nomefamilia'], $_SESSION['nomegenero'], $_SESSION['nomeespecie'], $_SESSION['nomeflora'], $_SESSION['latitude'], $_SESSION['longitude'], $_SESSION['altura'], $_SESSION['diametro'], $_SESSION['volume']);

?>