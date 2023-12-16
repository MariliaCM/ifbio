<?php
session_start();

if (!empty($_GET['idavifauna'])) {
    include_once('conexao.php');

    $idavifauna = $_GET['idavifauna'];

    $sqlSelect = "SELECT * FROM avifauna WHERE idavifauna=$idavifauna";

    $result = mysqli_query($conn, $sqlSelect);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM avifauna on idfauna=fkavifauna inner join fauna on idespecie=fkfauna inner join especie on idgenero=fkespecie inner join genero on idfamilia=fkgenero inner join familia on idordem=fkfamilia inner join ordem on idclasse=fkordem inner join filo on idreino=fkfilo dominio inner join reino on iddominio=fkreino WHERE idavifauna=$idavifauna";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        $_SESSION['msg'] = 1;

    }
}
header('Location: ave_pesquisar.php');

?>