<?php
session_start();

if (!empty($_GET['idmuseu'])) {
    include_once('conexao.php');

    $idmuseu = $_GET['idmuseu'];

    $sqlSelect = "SELECT * FROM museu WHERE idmuseu=$idmuseu";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM museu WHERE idmuseu=$idmuseu";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: museu_pesquisar.php');

?>