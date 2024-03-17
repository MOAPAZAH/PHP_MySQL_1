 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORMULARIO</title>
	<link rel="stylesheet" type="text/css" href="aspectoFormulario.css">

</head>
<body>

	<h4><button onclick="location.href='mostrar.php'">MOSTRAR TABLA</button><h4>
	<center>
	<form action="registro.php" method="POST" enctype="multipart/form-data" class="contact"> 
		<legend class="datos"><h1>REGISTRO</h1></legend>
		<label>NOMBRE:</label>					<input type="varchar" name="e1">
		<label>ESPECIE:</label>					<input type="varchar" name="e2">
		<label>ALIMENTACION:</label>			<input type="varchar"  REQUERIT name="e3">
		<label>ANTIGUEDAD:</label>				<input type="varchar"  REQUERIT  name="e4">
		
		<label>PERIODO:</label>					
		<select name = "e5">
			<option>Devonico</option>
			<option>Carbonifero</option>
			<option>Permico</option>
			<option>Triasico</option>
			<option>Jurasico</option>
			<option>Cretacico</option>
			<option>Paleogeno</option>
			<option>Neogeno</option>
		</select><br>

		<label>ALTURA:</label>					<input type="number" REQUERIT  name="e6">
		<label>PESO:</label>					<input type="number" REQUERIT  name="e7">
		<label>AÑO DE HALLAZGO:</label>			<input type="date" REQUERIT name="e8">
		<label>LUGAR DE HALLAZGO:</label>		<input type="varchar" REQUERIT name="e9">
		<label>FOTO:</label>					<input type="file" REQUERIT accept="image/*" name="foto"><br><br>
		
		<input type="submit" value="ACEPTAR" name="submit"><input type="reset" value="RESETEAR" >
		
	</form>
	
</center>
</body>
</html>