<div ng-Repeat="info in posts">
	<div class="container2">
		<div class="row">
			<div class="col col-12">
				<div class="post-box">
					<header>
						<div class="row">
							<div class="col col-12">
								<div class="bx-header">
									<a href="{{info.autorPage}}">
										<img src="{{info.fotoAutor}}" alt="">
										<p>{{info.autor}}</p>
									</a>
									<div class="location">
										<a href="#">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<span>{{info.localidade}}</span>
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
									<img class="box-img" src="{{info.imagem}}" alt="">
								</center>
							</a>
						</div>
						<div class="col col-9 col-12-m box-content">
							<a href="{{info.linkDetalhe}}">
								<h3>{{info.titulo}}</h3>
								<p>{{info.subtitulo}}</p>
							</a>
							<div class="tags">
								<a href="tag.php"><span>{{info.tag1}}</span></a>
								<a href="tag.php"><span>{{info.tag2}}</span></a>
								<a href="tag.php"><span>{{info.tag3}}</span></a>
							</div>
							<div class="vagas">
								<p>{{info.vagas}} vagas</p>
								<a href="{{info.linkDetalhe}}">
								<button>Detalhes</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--fim box-->    
</div>