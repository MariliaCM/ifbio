<?php
session_start();

if (!empty($_GET['idpancs'])) {
    include_once('conexao.php');

    $idpancs = $_GET['idpancs'];

    $sqlSelect = "SELECT * FROM pancs WHERE idpancs=$idpancs";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM pancs WHERE idpancs=$idpancs";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: pancs_pesquisar.php');

?>