<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Registre-se</title>
	</head>
	<body class="bg">
		<div class="corpo">
			<!--nav-->
			<?php
                include "nav2.php"
             ?>
			<!--content-->
			<div class="container">
				<div class="row">
					<div class="col col-12">
						<section>
							<header>
								<h1>Registro</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</header>
							<div class="conteudo">
								<div class="row">
									<div class="col col-6 col-12-m">
										<form action="">
											<div class="grupo-form">
												<span>Nome</span>
												<input type="text" placeholder="Seu nome completo" class="form2">
											</div>
											<div class="grupo-form">
												<span>Email</span>
												<input type="email" placeholder="exemplo@email.com" class="form2">
											</div>
											<div class="grupo-form">
												<span>Senha</span>
												<input type="password" placeholder="********" class="form2">
											</div>
											<div class="grupo-form">
												<span>Repita sua senha</span>
												<input type="password" placeholder="********" class="form2">
											</div>
											<div class="grupo-form">
												<span>Cidade - estado</span>
												<input type="text" placeholder="Recife-PE" class="form2">
											</div>
											<div class="grupo-form">
												<span>Habilidades</span>
												<textarea type="text" placeholder="Designer, Filmaker, Biólogo, Habilidade com animais..." class="form2" style="height: 80px;"></textarea>
											</div>
											<div class="grupo-form">
												<span>Disponibilidade de horas na semana</span>
												<input type="text" placeholder="40" class="form2">
											</div>
											<div class="grupo-form">
												<span>Sobre você</span>
												<textarea type="text" placeholder="Sinta-se livre" class="form2" style="height: 80px;"></textarea>
											</div>
											<div class="grupo-form">
												<span>Foto</span>
												<input type="file" name="pic" accept="image/*" class="form2">
											</div>
											<div class="grupo-form">
												<input type="checkbox" class="form-button">ESTOU DE ACORDO COM OS <a href=""> TERMOS DE USO</a> E <a href=""> POLÍTICA DE PRIVACIDADE</a>.
											</div>
											<div class="grupo">
												<a href="#">Precisa de ajuda?</a>
											</div>
											<div class="grupo-form">
												<input type="submit" value="Cadastrar" class="form-button">
											</div>
										</form>
									</div>
									<div class="col col-6 hidden">
										<div class="img-reg">
											<img src="img/regs.png" alt="" style="width: 100%;">
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<?php
                include "footer.php"
             ?>
		</footer>
	</body>
</html>