<?php
session_start();

if (!empty($_GET['idmastofauna'])) {
    include_once('conexao.php');

    $idmastofauna = $_GET['idmastofauna'];

    $sqlSelect = "SELECT * FROM mastofauna WHERE idmastofauna=$idmastofauna";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM mastofauna WHERE idmastofauna=$idmastofauna";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: masto_pesquisar.php');

?>