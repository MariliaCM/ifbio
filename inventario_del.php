<?php
session_start();

if (!empty($_GET['idinventario'])) {
    include_once('conexao.php');

    $idinventario = $_GET['idinventario'];

    $sqlSelect = "SELECT * FROM inventario WHERE idinventario=$idinventario";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM inventario WHERE idinventario=$idinventario";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: inventario_pesquisar.php');

?>