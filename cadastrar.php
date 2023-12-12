<?php
session_start();
error_reporting(0);
include('menu.php');
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
if ($_GET['erro']) {
	echo ".";
	$coderro = $_GET['erro'];

	$nome = $_SESSION['nome'];
	$email = $_SESSION['email'];

	if ($coderro == 1) {
		alerta('warning', 'Atenção!', 'Este e-mail já está cadastrado!');
	} elseif ($coderro == 2) {
		alerta('success', 'Ok!', 'Usuário cadastrado com sucesso!');
	}
}
?>

<main>
	<br>
	<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12 d-flex flex-column align-items-center justify-content-center">
					<div class="card">

						<div class="card-body">

							<div class="pt-4 pb-2">
								<h5 class="card-title text-center pb-0 fs-4">Faça o cadastro</h5>
							</div>

							<form method="POST" action="proc_cad_usuario.php">
								<label>Nome</label>
								<input class="col-12 form-control" type="text" name="nome"
									value="<?php echo $_SESSION['nome']; ?>" placeholder="Digite o nome e o sobrenome"
									required><br>

								<label>E-mail</label>
								<input class="col-12 form-control" type="text" name="email"
									value="<?php echo $email; ?>" placeholder="Digite o seu e-mail" required><br>

								<label>Senha</label>
								<input class="col-12 form-control" type="password" name="senha"
									placeholder="Digite a senha" required><br>

								<input class="btn btn-primary w-100" type="submit" name="btnCadUsuario"
									value="Cadastrar"><br><br>

								Já possui cadastro? <a href="login.php">Clique aqui</a> para logar

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>