<!DOCTYPE html>
<html lang="pt" ng-app="sepram" ng-controller="sepramCtrl">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Perfil - {{notificacoes2[0].nome}}</title>
	</head>
	<body class="bg">
		<div class="corpo">
			<!--nav-->
			<?php
                include "nav.php"
             ?>
			<!--fim nav-->
			<!--content-->
			<div class="container">
				<!-- {{notificacoes2}} -->
				<div class="row">
					<div class="col col-12">
						<section>
							<div class="conteudo">
								<div class="row">
									<div class="col col-6 col-12-m perf">
										<div class="perf-img">
											<img src="{{notificacoes2[0].foto}}" alt="">
										</div>
										<div class="perf-name">
											<h1>{{notificacoes2[0].nome}}</h1>
											<p>{{notificacoes2[0].email}}</p>
											<span><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>{{notificacoes2[0].localidade}}</span>	
										</div>
									</div>
									<div class="col col-6 col-12-m perf">
										<div class="perf-sobre">
											<h4>Sobre:</h4>
											<p>"Desenvolvedor front-end que participou do s2b em 2017 na trilha Web Design. Proativo e cheio de vontade de colocar ideias para frente!"</p>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="row">
					<div class="col col-6 col-12-m">
						<div class="row">
							<div class="col col-12">
								<div class="padding-20">
									<section class="padding-10">
										<h4>Habilidades:</h4>
										<div class="proj-hab">
											<a href="#"><span>{{notificacoes2[0].hab1}}</span></a>
											<a href="#"><span>{{notificacoes2[0].hab2}}</span></a>
											<a href="#"><span>{{notificacoes2[0].hab3}}</span></a>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12">
								<div class="padding-20">
									<section class="padding-10">
										<h4>Projetos que participou:</h4>
										
										<div class="proj-list scroll" style="height: 221px;">
											<div class="proj-part" ng-repeat="p in posts">
												<div class="proj-img hidden" style="background-image: url({{p.imagem}})"></div>
												<div class="proj-title">
													<a href="{{p.linkDetalhe}}">
														<h3>{{p.subtitulo}}</h3>
													</a>
												</div>
											</div>
											
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-6 col-12-m">
						<div class="row">
							<div class="col col-12">
								<div class="padding-21">
									<section class="padding-10">
										<h4>Projetos que participa:</h4>
										<div class="proj-list scroll" style="height: 158px;">

											<div class="proj-part">
												<div class="proj-img hidden" style="background-image: url({{posts[0].imagem}})"></div>
												<div class="proj-title">
													<a href="{{posts[0].linkDetalhe}}">
														<h3>{{posts[0].subtitulo}}</h3>
													</a>
												</div>
											</div>

											<div class="proj-part">
												<div class="proj-img hidden" style="background-image: url({{posts[2].imagem}})"></div>
												<div class="proj-title">
													<a href="{{posts[2].linkDetalhe}}">
														<h3>{{posts[2].subtitulo}}</h3>
													</a>
												</div>
											</div>

										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12">
								<div class="padding-21">
									<section class="padding-10">
										<h4>Redes Sociais:</h4>
										<div class="ava">
											<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--fim content-->
		</div>
		<footer>
			<?php
                include "nav.php"
             ?>
		</footer>
	</body>
</html>