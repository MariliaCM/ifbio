<?php
session_start();

if (!empty($_GET['iddaninha'])) {
    include_once('conexao.php');

    $iddaninha = $_GET['iddaninha'];

    $sqlSelect = "SELECT * FROM daninha WHERE iddaninha=$iddaninha";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM daninha WHERE iddaninha=$iddaninha";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: ervas_pesquisar.php');

?>