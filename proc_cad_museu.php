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
$nomefauna = $_POST['nomefauna'];
$nomecoletor = $_POST['nomecoletor'];
$data = $_POST['data'];
$local = $_POST['local'];
$_SESSION['nomedominio'] = $nomedominio;
$_SESSION['nomereino'] = $nomereino;
$_SESSION['nomefilo'] = $nomefilo;
$_SESSION['nomeclasse'] = $nomeclasse;
$_SESSION['nomeordem'] = $nomeordem;
$_SESSION['nomefamilia'] = $nomefamilia;
$_SESSION['nomegenero'] = $nomegenero;
$_SESSION['nomeespecie'] = $nomeespecie;
$_SESSION['nomefauna'] = $nomefauna;
$_SESSION['nomecoletor'] = $nomecoletor;
$_SESSION['data'] = $data;
$_SESSION['local'] = $local;

$btnCadMuseu = filter_input(INPUT_POST, 'btnCadMuseu', FILTER_SANITIZE_STRING);
if ($btnCadMuseu) {
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

    $sqlfauna = "SELECT idfauna FROM fauna WHERE nomefauna='" . $nomefauna . "'";
    $resultado_fauna = mysqli_query($conn, $sqlfauna);
    $numero_linhasfauna = mysqli_num_rows($resultado_fauna);

    $sqlmuseu = "SELECT idfauna, fkmuseu FROM fauna, museu WHERE nomefauna='" . $nomefauna . "' AND idfauna=fkmuseu";
    $resultado_museu = mysqli_query($conn, $sqlmuseu);
    $numero_linhasmuseu = mysqli_num_rows($resultado_museu);

    if (($numero_linhasf == 0)) {
        $resultado = "INSERT INTO filo(nomefilo,fkfilo) VALUES ('$nomefilo','1');";
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

    if (($numero_linhasfauna == 0)) {
        $resultado = "INSERT INTO fauna(nomefauna,fkfauna) VALUES ('$nomefauna',(select idespecie from especie where nomeespecie='" . $nomeespecie . "'));";
        $r = mysqli_query($conn, $resultado);
    }

    if (($numero_linhasmuseu == 0)) {
        $resultado = "INSERT INTO museu(nomecoletor,data,local,fkmuseu) VALUES ('$nomecoletor', '$data', '$local',(select idfauna from fauna where nomefauna='" . $nomefauna . "'));";
        $r = mysqli_query($conn, $resultado);
        header("Location: museu_cad.php?erro=2");
    } else {
        header("Location: museu_cad.php?erro=1");
    }
}

unset($_SESSION['nomedominio'], $_SESSION['nomereino'], $_SESSION['nomefilo'], $_SESSION['nomeclasse'], $_SESSION['nomeordem'], $_SESSION['nomefamilia'], $_SESSION['nomegenero'], $_SESSION['nomeespecie'], $_SESSION['nomefauna'], $_SESSION['nomecoletor'], $_SESSION['data'], $_SESSION['local']);
?>