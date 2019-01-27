<!DOCTYPE html>
<html lang="pt" ng-app="sepram">
	<head>
		<?php
            include "head.php"
        ?>
		<title>Feed</title>
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
					<div class="col col-12 alert-info">
						<a href="projeto_novo.php">
							<h2>CRIAR NOVO PROJETO</h2>
						</a>
					</div>
				</div>
			</div>
			<!--box-->        
			<?php
                include "boxes2.php"
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