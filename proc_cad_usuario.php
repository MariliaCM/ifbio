<?php
session_start();

error_reporting(0);

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
include_once 'conexao.php';
$erro = false;

$sql = "SELECT id FROM usuarios WHERE email='" . $email . "'";
$resultado_email = mysqli_query($conn, $sql);
$numero_linhas = mysqli_num_rows($resultado_email);
if (($numero_linhas != 0)) {
	header("Location: cadastrar.php?erro=1");
	exit();

} else {
	$erro = true;
}

//não tem erros...incluir o usuario
if ($erro == TRUE) {

	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);

	$result_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES (
		'" . $dados['nome'] . "',
		'" . $dados['email'] . "',
		'" . $dados['senha'] . "'
		)";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if (mysqli_insert_id($conn)) {
		session_destroy();
		header("Location: cadastrar.php?erro=2");
		exit();
	}
}

?>