<!DOCTYPE html>
<html lang="pt" ng-app="sepram">
	<head>
		<?php
        	include "head.php"
        ?>
		<title>Sepram</title>
	</head>
	<body ng-controller="sepramCtrl">
		<div class="row">
			<!--esquerda-->
			<div class="hidden col col-7">
				<div id="left">
					<header>
						<div class="row">
							<div class="col col-12">
								<div id="index-header">
									<h5>Últimas oportunidades</h5>
								</div>
							</div>
						</div>
					</header>
					<div class="left-content scroll">
						<div class="container">
							<div class="row">
								<div class="col col-12 alert-info">
									<p><b>Open!</b> disponível no: <a href="https://github.com/ItaloSa/sepram">GitHub</a>.</p>
								</div>
							</div>
						</div>
						<?php
							include "index_box.php"
						?>                               
						<!-- ... -->
						<div class="row">
							<div class="col col-12 dots">
								<a href="#">
								<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--fim esquerda-->
			<!--direita-->
			<div class="col col-5 col-12-m">
				<div id="direita">
					<div class="row">
						<div class="col col-2"></div>
						<!--conteudo-->
						<div class="col col-8">
							<div class="conteudo-direita">
								<!--logo-->
								<header>
									<div class="logo">
										<a href="#"><img src="img/logo.png" alt=""></a>
									</div>
									<p>Serviço gratuito. Unindo pessoas que desejam participar ou recrutar membros para projetos acadêmicos.</p>
								</header>
								<!--form login-->
								<div class="login">
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
											<a href="main.php">
												<input type="submit" value="Entrar" class="form-button">
											</a>
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
						<div class="col col-2"></div>
					</div>
				</div>
			</div>
			<!--fim direita-->
		</div>
	</body>
</html>
