<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sube las Imagenes al Sistema</title>
</head>
<body>
	<center>
		<form name="form" method="post" action="subir_img.php" enctype="multipart/form-data">
			<tr>
				<td valign="top" align="center" width="400">
					<h2>Escoja la Imagen a Seleccionar</h2>
				</td>
			</tr>
			<br>
			<table width="600" align="center" border="1">
			<tr>
				<td valign="top" align="center">
					Nro de Id.
					<td valign="top" align="center">
						<input type="text" name="id_noti">
					</td>

				</td>
			</tr>
			<tr>
				<td valign="top" align="center">
					Nombre del Archivo
				</td>
				<td valign="top" align="center">
					<input type="file" name="imagen" size="20">
				</td>
			</tr>
			<tr>
				<td valign="top" align="center" colspan="2">
					<input type="submit" value="Enviar Imagen">
				</td>
			</tr>
			</table>
		</form>
	</center>

</body>
</html>