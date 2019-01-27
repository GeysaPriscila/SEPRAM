<!--proj solicitacao participante-->
<div ng-repeat="notificacao in notificacoes">
	<div class="proj-part">
		<div class="proj-img" style="background-image: url({{notificacao.foto}})"></div>
		<div class="proj-title title-2">
			<a href="{{notificacao.link}}">
				<h3>{{notificacao.nome}}</h3>
			</a>
			<p>{{notificacao.txt}}</p>
		</div>
	</div>
</div>