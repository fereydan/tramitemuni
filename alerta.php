<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	Mensaje de alerta</title>
	 <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<div class ="alerta">
		<div class="mensaje_modal">
			<form method="post" name="Aceptar" action="mensaje-de-envio.html">
				<h3>¿ESTÁ SEGURO DE ENVIAR?</h3>
				
					<input type="button" name="Cancelar" value="Cancelar" onclick="location.href='index.html'" id="btnClose">
					<input type="submit" name="Aceptar" value="Aceptar" id="btnAceptar">	
			</form>
		</div>
	</div>
</body>
</html>