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
				<h3>Problema 3 de Hatziry Arellano</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/Ejercicio3.jpg" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p5_arellano_02_php/Ejercicio3.php";
					?>
					<h4>P3 Explicacion del codigo</h4>
					<p>
						Aqui en este ejercicio podemos ver sobre como remplazar parte de una cadena <br>
						la funcion de str_ireplace no distingue entre mayusculas y minusculas. <br>
						Se reemplazaran todas las ocurrencias encontradas devolviendonos una nueva cadena <br>
						de texto con las modificaciones realizadas. En ambas funciones la cadena sera<br>
						reemplazada todas las veces que sea encontrada. <br>
						
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>