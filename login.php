<?php
session_start();
include('menu.php');
error_reporting(0);
function alerta($type, $title, $msg)
{
	echo "<script type='text/javascript'>
	Swal.fire({  
	  icon: '$type',
	  title: '$title',
	  text: '$msg', 
	  showConfirmButton: false,
	  timer: 4000
	})
	</script>";
}

if ($_SESSION['msg_login'] == 1) {
	alerta('error', 'Erro!', 'E-mail ou senha incorretos!');
}
if ($_SESSION['msg_login'] == 2) {
	alerta('error', 'Erro!', 'Preencha e-mail e senha!');
}
unset($_SESSION['msg_login']);

// if (isset($_SESSION['msgcad'])) {
// 	echo $_SESSION['msgcad'];
// 	unset($_SESSION['msgcad']);
// }
?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

	<?php


	?>
	<main>
		<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10 col-md-12 d-flex flex-column align-items-center justify-content-center">
						<div class="card">

							<div class="card-body">

								<div class="pt-4 pb-2">
									<h5 class="card-title text-center pb-0 fs-4">Faça o login</h5>
								</div>

								<form method="POST" action="valida.php">
									<label>E-mail</label>

									<input class="col-12 form-control" type="text" name="email"
										placeholder="Digite o seu email cadastrado"><br>
									<label>Senha</label>

									<input class="col-12 form-control" type="password" name="senha"
										placeholder="Digite a sua senha"><br>
									<input class="btn btn-primary w-100" type="submit" name="btnLogin"
										value="Entrar"><br><br>

									Não tem cadastro? <a href="cadastrar.php">Crie uma conta</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

</body>

</html>