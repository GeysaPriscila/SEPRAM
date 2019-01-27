<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Login</title>
	</head>
	<body>
		<div class="corpo">
			<!--nav2-->
			<?php
                include "nav2.php"
            ?>	
			<div class="box-login">
				<!--form login-->
				<h2>Login</h2>
				<p>Faça o login para continuar.</p>
				<div class="login" style="margin-top: 35px;">
					<form action="main.php">
						<div class="grupo-form">
							<input type="email" placeholder="E-mail" class="form">
						</div>
						<div class="grupo-form">
							<input type="password" placeholder="Senha" class="form">
						</div>
						<div class="grupo">
							<a href="#">Não consegue acessar sua conta?</a>
						</div>
						<div class="grupo-form">
							<input type="submit" value="Entrar" class="form-button">
						</div>
					</form>
				</div>
				<!--nova conta-->
				<div class="nova-conta">
					<h2>Novo por aqui? Crie sua conta!</h2>
					<div class="grupo-form">
						<form action="registro.php">
							<input type="submit" value="Criar Conta" class="form-button" style="width: 100%;">
						</form>	
					</div>
				</div>
			</div>
		</div>
	</body>
</html>