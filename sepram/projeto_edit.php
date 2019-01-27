<!DOCTYPE html>
<html lang="pt" ng-app="sepram">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Editar projeto</title>
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
						<p><b>Atenção!</b> Cuidado ao alterar as informações do seu projeto</p>
					</div>
				</div>
			</div>
			<!--content-->
			<div class="container">
				<div class="row">
					<div class="col col-12">
						<section>
							<header>
								<h1>Editar projeto</h1>
								<p>Realize as alterações no seu projeto.</p>
							</header>
							<div class="conteudo">
								<form action="main.php">
									<div class="row">
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo-form">
													<span>Título</span>
													<input type="text" value="{{posts[0].titulo}}" class="form3">
												</div>
												<div class="grupo-form">
													<span>Subtitulo</span>
													<input type="text" value="{{posts[0].subtitulo}}" class="form3">
												</div>
												<div class="grupo-form">
													<span>E-mail para contato</span>
													<input type="email" value="{{posts[0].email}}" class="form3">
												</div>
											</div>
										</div>
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo-form">
													<span>Horas semanais</span>
													<input type="text" value="{{posts[0].horas}}" class="form3">
												</div>
												<div class="grupo-form">
													<span>Data de término da seleção</span>
													<input type="date" value="2017-07-29" class="form3">
												</div>
												<div class="grupo-form">
													<span>Localidade</span>
													<input type="text" value="{{posts[0].localidade}}" class="form3">
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo-form">
													<span>Descrição</span>
													<textarea type="text" class="form2" style="height: 80px;">{{posts[0].descricao}}</textarea>
												</div>
												<div class="grupo-form">
													<span>Foto</span>
													<input type="file" name="pic" accept="image/*" class="form2">
												</div>
											</div>
										</div>
										<div class="col col-6 col-12-m">
											<div class="form-bx">
												<div class="grupo-form">
													<span>Disponibilidade de horas na semana</span>
													<input type="text" value="40 horas semanais" class="form2">
												</div>
												<div class="grupo-form">
													<span>Habilidades necessárias</span>
													<textarea type="text" class="form2" style="height: 80px;">#psiquiatria #estatística #bioquímica</textarea>
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
												<div class="grupo-form">
													<a href="main.php"><input type="submit" value="Salvar" class="acc-button form-button"></a>
													<a href="main.php"><input type="submit" value="Cancelar" class="neg-button form-button"></a>
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