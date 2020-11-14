<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 2 de Hatziry Arellano</h3>
				<article class="articulos">	
					<figure>
					<img src="imagenes/Ejercicio2.jpg" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_arellano_02_php/Ejercicio2.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
						En este ejercicio podemos ver lo que viene siendo la busqueda de datos en un array <br>
						en el ejemplo anterior se comprueba si el nombre 'pepe' existe en el array '$aDias'  <br>
						quedando la variable '$Posicion' con un valor de '-1' si no se encuentra o <br>
						conteniendo la posicion en la que se encuentra.<br>
						
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>