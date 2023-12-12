<?php
session_start();

if (!empty($_GET['idrelogio'])) {
    include_once('conexao.php');

    $idrelogio = $_GET['idrelogio'];

    $sqlSelect = "SELECT * FROM relogio WHERE idrelogio=$idrelogio";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM relogio WHERE idrelogio=$idrelogio";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: relogio_pesquisar.php');

?>