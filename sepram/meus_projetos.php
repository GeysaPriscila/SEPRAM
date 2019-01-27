<div class="container2">
				<div class="row">
					<div class="col col-12">
						<div class="post-box">
							<header>
								<div class="row">
									<div class="col col-12">
										<div class="bx-header">
											<a href="perfil.php">
												<img src="{{posts[0].fotoAutor}}" alt="">
												<p>{{posts[0].autor}}</p>
											</a>
											<div class="location">
												<a href="#">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>{{posts[0].localidade}}</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</header>
							<div class="row">
								<div class="col col-2 col-12-m">
									<a href="#">
										<center>
											<img class="box-img" src="{{posts[0].imagem}}" alt="">
										</center>
									</a>
								</div>
								<div class="col col-9 col-12-m box-content">
									<a href="#">
										<h3>{{posts[0].titulo}}</h3>
										<p>{{posts[0].subtitulo}}</p>
									</a>
									<div class="tags">
										<a href="tag.php"><span>{{posts[0].tag1}}</span></a>
										<a href="tag.php"><span>{{posts[0].tag2}}</span></a>
										<a href="tag.php"><span>{{posts[0].tag3}}</span></a>
									</div>
									<div class="vagas">
										<p>{{posts[0].vagas}} vagas</p>
										<a href="main.php">									
											<button class="neg-button margin-left">Excluir</button>
										</a>
										<a href="projeto_edit.php">						
											<button class="acc-button margin-left">Editar</button>
										</a>	
										<a href="projeto_user.php">		
											<button class="margin-left">Detalhes</button>
										</a>																
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--fim box-->