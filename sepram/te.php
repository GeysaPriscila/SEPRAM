<!DOCTYPE html>
<html lang="pt" ng-app="sepram" ng-controller="sepramCtrl">
	<head>
		<?php
            include "head.php"
        ?>
		<title>{{posts[2].titulo}}</title>
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
				<div class="row">
					<div class="col col-12">
						<section>
							<div class="conteudo">
								<div class="row">
									<div class="col col-12 col-12-m perf">
										<div class="perf-img">
											<img src="{{posts[2].imagem}}" alt="">
										</div>
										<div class="perf-name">
											<h1>{{posts[2].titulo}}</h1>
											<p>Por: <a href="{{posts[2].autorPage}}">{{posts[2].autor}}</a></p>
											<span><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>{{posts[2].localidade}}</span>	
										</div>
										<p style="display: inline-block; float: right;"><button class="button acc-button" style="margin-bottom: 10px; margin-top: 45px;">Quero participar!</button></p>
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
										<h4>Detalhes:</h4>
										<div class="perf-sobre" style="height: 106px; line-height: 23px;">
											<p><i class="fa fa-clock-o" aria-hidden="true" style="margin-right: 10px;margin-left: 1px;"></i>{{posts[2].horas}}</p>
											<p><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 10px;"></i>{{posts[2].data}}</p>
											<p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 13px;margin-left: 2px;"></i>{{posts[2].localidade}}</p>
											<p><i class="fa fa-envelope-o" aria-hidden="true" style="margin-right: 10px;"></i>{{posts[2].email}}</p>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12">
								<div class="padding-20">
									<section class="padding-10">
										<h4>Descrição:</h4>
										<div class="perf-sobre">
											<p>{{posts[2].descricao}}</p>
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
										<h4>Habilidades necessárias:</h4>
										<div class="proj-hab" style="height: 130px;">
											<a href="#"><span>{{posts[2].tag1}}</span></a>
											<a href="#"><span>{{posts[2].tag2}}</span></a>
											<a href="#"><span>{{posts[2].tag3}}</span></a>										
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12">
								<div class="padding-21">
									<section class="padding-10">
										<h4>Quem participa:</h4>
										<div class="proj-list scroll" style="height: 221px;">
											<div class="proj-part">
												<div class="proj-img" style="background-image: url(img/perf.png)"></div>
												<div class="proj-title">
													<a href="perfi.php">
														<h3>Ítalo Sousa</h3>
													</a>
													<p>italusousa@gmail.com</p>
												</div>
											</div>
                                            <div class="proj-part">
												<div class="proj-img" style="background-image: url(img/perf2.png)"></div>
												<div class="proj-title">
													<a href="perfil_arthur.php">
														<h3>Arthur Pedro</h3>
													</a>
													<p>arthurpedro995@gmail.com</p>
												</div>
											</div>
                                            <div class="proj-part">
												<div class="proj-img" style="background-image: url(img/perf3.png)"></div>
												<div class="proj-title">
													<a href="perfil_robson.php">
														<h3>Róbson José</h3>
													</a>
													<p>robbinho.jose2014@gmail.com</p>
												</div>
											</div>									
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--content fim-->
		</div>
		<footer>
			<?php
                include "footer.php"
            ?>
		</footer>
	</body>
</html>