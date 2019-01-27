<!DOCTYPE html>
<html lang="pt" ng-app="sepram">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Seus projetos</title>
	</head>
	<body class="bg" ng-controller="sepramCtrl">
		<div class="corpo">
			<!--nav-->
			<?php
                include "nav.php"
             ?>
			<!--fim nav-->
			<!--content-->
			<!--editar-->
			<div class="container2">
				<div class="row">
					<div class="col col-12 tag-box">
						<a href="#">
							<h2>Seus Projetos</h2>
						</a>
					</div>
				</div>
			</div>
			<!--box-->        
			<?php
                include "meus_projetos.php"
             ?>
			<!--fim box-->
		</div>
		<footer>
			<?php
                include "footer.php"
             ?>
		</footer>
	</body>
</html>