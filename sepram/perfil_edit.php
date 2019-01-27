<!DOCTYPE html>
<html lang="pt" ng-app="sepram">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Editar perfil</title>
	</head>
	<body class="bg" ng-controller="sepramCtrl">
		<div class="corpo">
			<!--nav-->
			<?php
                include "nav.php"
             ?>
			<!--fim nav-->
			<!--editar-->
			<div class="container">
				<div class="row">
					<div class="col col-12 alert-info">
						<p><b>Atenção!</b> As alterações feitas não poderão ser revertidas.</p>
					</div>
				</div>
			</div>
			<!--content-->
			<div class="container">
				<div class="row">
					<div class="col col-12">
						<section>
							<header>
								<h1>Editar perfil</h1>
								<p>Altere suas informações pessoais.</p>
							</header>
							<div class="conteudo">
								<form action="main.php">
									<div class="row">
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<p>Dados pessoais:</p>
												<div class="grupo-form">
													<span>Nome</span>
													<input type="text" value="Ítalo Sousa" class="form3">
												</div>
												<div class="grupo-form">
													<span>Email</span>
													<input type="email" value="italusousa@gmail.com" class="form3">
												</div>
											</div>
										</div>
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<p>Endereço:</p>
												<div class="grupo-form">
													<span>Cidade</span>
													<input type="text" value="Recife" class="form3">
												</div>
												<div class="grupo-form">
													<span>Estado</span>
													<input type="text" value="Pernambuco" class="form3">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<p>Sobre você:</p>
												<div class="grupo-form">
													<span>Habilidades</span>
													<textarea type="text" class="form2" style="height: 80px;">#Designer #Filmaker #Biólogo #HabilidadeComAnimais</textarea>
												</div>
												<div class="grupo-form">
													<span>Foto</span>
													<input type="file" name="pic" accept="image/*" class="form2">
												</div>
											</div>
										</div>
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<p>Mais um pouco sobre você</p>
												<div class="grupo-form">
													<span>Disponibilidade de horas na semana</span>
													<input type="text" value="4 horas semanais" class="form2">
												</div>
												<div class="grupo-form">
													<span>Eu sou?</span>
													<textarea type="text" class="form2" style="height: 80px;">"Desenvolvedor front-end que participou do s2b em 2017 na trilha Web Design. Proativo e cheio de vontade de colocar ideias para frente!"</textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo-form">
													<span>Facebook</span>
													<input type="text" value="/italusousa" class="form3">
												</div>
												<div class="grupo-form">
													<span>Instagram</span>
													<input type="text" value="@anditsou" class="form3">
												</div>		
											</div>
										</div>
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo-form">
													<span>Twitter</span>
													<input type="text" value="@italoS.A" class="form3">
												</div>									
												<div class="grupo-form" style="margin-top: 19px;">
													<a href="main.php"><input type="submit" value="Salvar" class="acc-button form-button"></a>
													<a href="main.php"><input type="submit" value="Cancelar" class="neg-button form-button"></a>
												</div>											
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo">
													<a href="#">Precisa de ajuda?</a>
												</div>
												
											</div>
										</div>
										<div class="col col-6 col-12-m"></div>
									</div>
								</form>
							</div>
						</div>
					</section>
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