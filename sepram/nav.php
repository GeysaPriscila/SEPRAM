<div class="row" style="height: 75px;">
				<div class="col col-12">
					<nav class="nav">
						<div class="container">
							<div class="row">
								<div class="col col-3 col-6-m">
									<div class="logo nav-logo">
										<a href="main.php"><img src="img/logo.png" alt=""></a>
									</div>
								</div>
								<div class="col col-6 hidden">
									<div class="grupo-form busca">
										<input type="text" placeholder="Busca" class="form busca-f">
									</div>
								</div>
								<div class="col col-3 col-6-m">
									<div class="hidden nav-menu">
										<ul>
											<li><a href="perfil.php"><img class="nav-user-img" src="img/perf.png" alt=""></a></li>
											<li>
												<i class="fa fa-cog" aria-hidden="true"></i>
												<ul>
													<p>CONFIGURAÇÕES</p>
													<li>
														<a href="seus_projetos.php">
															<p><i class="fa fa-archive" aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>Seus projetos</p>
														</a>
													</li>
													<li>
														<a href="perfil_edit.php">
															<p><i class="fa fa-user" aria-hidden="true" style="margin-right: 5px;"></i>Editar perfil</p>
														</a>
													</li>
													<li>
														<a href="ajuda.php">
															<p><i class="fa fa-question-circle" aria-hidden="true" style="margin-right: 5px;"></i>Ajuda</p>
														</a>
													</li>
													<li>
														<a href="index.php">
															<p><i class="fa fa-sign-out" aria-hidden="true" style="margin-right: 5px;"></i>Sair</p>
														</a>
													</li>
												</ul>
											</li>
											<li>
												<i class="fa fa-bell" aria-hidden="true"></i>
												<ul class="scroll">
													<p>NOTIFICAÇÕES</p>													
													<li ng-repeat="notificacao in notificacoes">
														<a href="{{notificacao.link}}">
															<p><b>{{notificacao.nome}}</b>{{notificacao.txt}}</p>
														</a>
													</li>													
												</ul>
											</li>
										</ul>
									</div>
									<div class="show-m nav-menu-m">
										<ul>
											<li>
												<i class="fa fa-bars" aria-hidden="true"></i>
												<ul>
													<li>
														<a href="projetos.php">
															<p><i class="fa fa-archive" aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>Seus projetos</p>
														</a>
													</li>
													<li>
														<a href="perfil_edit.php">
															<p><i class="fa fa-user" aria-hidden="true" style="margin-right: 8px;margin-left: 2px;"></i>Editar perfil</p>
														</a>
													</li>
													<li>
														<a href="ajuda.php">
															<p><i class="fa fa-question-circle" aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i>Ajuda</p>
														</a>
													</li>
													<li>
														<a href="notificacoes.php">
															<p><i class="fa fa-bell" aria-hidden="true" style="margin-right: 5px;"></i>Notificações</p>
														</a>
													</li>
													<li>
														<a href="index.php">
															<p><i class="fa fa-sign-out" aria-hidden="true" style="margin-right: 5px;margin-left: 1px;"></i></i>Sair</p>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>