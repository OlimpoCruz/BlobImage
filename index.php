<!doctype html>
<html>
	<head>
		<title>Subir imagen a la base de datos</title>
	</head>
	<body>
		<form action="subir.php" method="POST" enctype="multipart/form-data">
		    <label for="imagen">Imagen:</label>
		    <input type="file" name="imagen" id="imagen" />
		    <input type="submit" name="subir" value="Subir"/>
		   	<!--<img src="imagen.php?id=1" />-->
		</form>
	</body>
</html>
