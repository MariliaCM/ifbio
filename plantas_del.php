<?php
session_start();

if (!empty($_GET['idplantas'])) {
    include_once('conexao.php');

    $idplantas = $_GET['idplantas'];

    $sqlSelect = "SELECT * FROM plantas WHERE idplantas=$idplantas";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM relogio WHERE fkrelogio=$idplantas;
            DELETE FROM plantas WHERE idplantas=$idplantas;";
        $resultDelete = mysqli_multi_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: plantas_pesquisar.php');

?>