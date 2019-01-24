

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dist/bootstrap.min.css">
</head>
<body>
	<span style="display: inline-block;position: fixed;top: 0;right: 0; margin: 25px 25px 0 0;"><a href="./">Subir archivo</a></span>
	<div class="jumbotron"><h3 class="display-4 text-center">Archivos</h3></div>
	<div class="container">
		<div class="row ">

			<div class="offset-2 col-md-8">
				<?php
				$directorio = opendir("./uploads"); 
				echo '<ul class="list-group">';
				while ($archivo = readdir($directorio)) {
				    if (!is_dir($archivo)) {
				        echo '<li class="list-group-item"><a href="uploads/'.$archivo.'">'.$archivo."</a><br /></li>";
				    }  
				}
				echo '</ul>';
				?>
			</div>
		</div>
	</div>
</body>
</html>