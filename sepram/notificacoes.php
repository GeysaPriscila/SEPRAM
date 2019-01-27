<!DOCTYPE html>
<html lang="pt" ng-app="sepram">
	<head>
		<?php
            include "head.php"
        ?>	
		<title>Notificações</title>
	</head>
	<body class="bg" ng-controller="sepramCtrl">
		<div class="corpo">
			<!--nav-->
			<?php
                include "nav.php"
            ?>	
			<!--fim nav-->
			<!--content-->
			<!--solicitacao-->
			<div class="container2">
				<div class="row">
					<div class="col-12">
						<section class="padding-10">
							<h4>Notificações:</h4>
							<div class="proj-list scroll">
								<?php
									include "notf.php"
								?>								
							</div>
						</section>
					</div>
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