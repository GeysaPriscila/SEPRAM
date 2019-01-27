<!DOCTYPE html>
<html lang="pt"  ng-app="sepram" ng-controller="sepramCtrl">
	<head>
		<?php
            include "head.php"
        ?>
		<title>#tag</title>
	</head>
	<body class="bg">
		<!--nav-->
		<?php
                include "nav.php"
             ?>
		<!--fim nav-->
		<div class="corpo">
			<!--content-->
			<!--editar-->
			<div class="container2">
				<div class="row">
					<div class="col col-12 tag-box">
						<a href="#">
							<h2>#TAG</h2>
						</a>
					</div>
				</div>
			</div>
			<?php
				include "boxes2.php";
			?>
		</div>
		<footer>
			<?php
                include "footer.php"
             ?>
		</footer>
	</body>
</html>