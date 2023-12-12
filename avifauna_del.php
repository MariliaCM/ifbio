<?php
session_start();

if (!empty($_GET['idavifauna'])) {
    include_once('conexao.php');

    $idavifauna = $_GET['idavifauna'];

    $sqlSelect = "SELECT * FROM avifauna WHERE idavifauna=$idavifauna";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM avifauna WHERE idavifauna=$idavifauna";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: ave_pesquisar.php');

?>